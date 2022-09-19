<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\NewCategoryRequest;
use App\Models\Category;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

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
    public function store(NewCategoryRequest  $request)
    {
        //
        if ($request->createNewCategory()){
            Alert::success('success','new category added');
            return redirect(route('admin.categories.index'));
        }
        Alert::error('error','an error ');
        return back();
        // $request->validate([
        //     'name'=>['required','string'],
        //     'image'=>['nullable','image','max:1024']
        // ]);
        // try {
        //     $newCategory = Category::create([
        //         'name'=>$request->input('name'),
        //         'image'=>upload_single_image("categories","image") ,
        //         'slug'=>$request->input('name')
        //     ]);
        //     if ($newCategory != null){
        //         return redirect(route('admin.categories.index'))->with('success','Success!');
        //     }
        // } catch(\Exception $exception){
        //     Log::info($exception->getMessage());
        //     Alert::error('error', 'Something went error');
        // }
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
    public function edit(Category  $category)
    {
        //
        return view('admin.categories.edit',[
            'category'=>$category
        ]);

        // try{
        //     $category = Category::findOrFail($id);
        //     return view('admin.categories.edit', compact('category'));
        // }catch(\Exception $exception){
        //     Log::info($exception->getMessage());
        //     Alert::error('error', 'Something went worry');
        // }
        
    }

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
        try {
            $category = Category::findOrFail($id);
            $category->update([
               'name'=>$request->input('name'),
                'slug'=>$request->input('name'),
                'image'=>update_image('categories',$category->image , 'image'),
            ]);
           return redirect(route('admin.categories.index'))->with('success','updated');
        } catch (ModelNotFoundException $exception){
            Log::error($exception->getMessage());
            // return back()->with('error','Error!');
            Alert::error('error', 'Something went worry');
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
