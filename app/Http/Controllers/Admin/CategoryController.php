<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Categroy;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::get();
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>['required','string'],
            'image'=>['nullable','image','max:1024']
        ]);
        $newCategory = Category::create([
            'name'=>$request->input('name'),
            'image'=>upload_single_image("categories") ,
            'slug'=>$request->input('name')
        ]);
        if ($newCategory != null){
            return redirect(route('admin.categories.index'))->with('success','Success!') ;
        }  else{
            return back()->with('error','Error!') ;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category){
        return view('admin.categories.edit', [
            'category'=>$category,
        ]);
    }
    // public function edit($id)
    // {
    //     //
    //     $category = Category::findOrFail($id);
    //     return view('admin.categories.edit', compact('category'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // $category = Category::findOrFail($id);
        try {
            $category = Category::findOrFail($id);
            $category->update([
               'name'=>$request->input('name'),
                'slug'=>$request->input('name'),
                'image'=>update_image('categories',$category->image)
            ]);
           return redirect(route('admin.categories.index'))->with('success','updated');
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            return back()->with('error','Error!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $category = Category::findOrFail($id);
            /*
             * We need to check to see if this category has an image uploaded
             */
            $oldImagePath = public_path("storage/categories/$category->image");
            if (file_exists($oldImagePath)){
                unset($oldImagePath);
            }
            $category->delete();
            return redirect()->route('admin.categories.index')->with('success','deleted');
        }   catch (\Exception $exception) {
            return back()->with('error','Error deleting');
        }
    }
}
