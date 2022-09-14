<?php

namespace App\Http\Requests\Admin;

use App\Models\Categroy;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rule;

class UpdateCategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required','string','max:255',Rule::unique('categories')->ignore($this->id)],
            'image'=>['nullable','image','max:300'],
        ];
    }

    private function storeImage(Categroy $category)
    {
        $fileNameToStore = $category->image;
        if ($this->hasFile('image')){
            $oldImagePath = public_path("storage/categories/$category->image");
            if (file_exists($oldImagePath)){
                unset($oldImagePath);
            }
            //upload the new image
            $image = $this->file('image');
            //Get the image extension
            $ext = $image->getClientOriginalExtension();
            //Build the filename
            $fileName = substr(rand(1,9000000000000).time(),2);
            $fileNameToStore = $fileName.'.'.$ext;
            //Store the image
            $image->storeAs('categories',$fileNameToStore,'public');
        }
        return $fileNameToStore;
    }
    public function updateCategory(Categroy $category)
    {

        try {
            $category->update([
                'name'=>$this->name,
                'slug'=>$this->name,
                'image'=> $this->storeImage($category)
            ]);
           return true;
        } catch (\Exception $exception){
            Log::error($exception->getMessage());
            return false;
        }
    }
}
