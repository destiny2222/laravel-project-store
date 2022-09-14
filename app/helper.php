<?php
if (!function_exists('upload_single_image')){
    function upload_single_image($folder){
        $fileNameToStore = 'no-image.png';
        if (request()->hasFile('image')){
            $image = request()->file('image');
            //get the image extension
            $ext = $image->getClientOriginalExtension();
            // BLuid the filename
            $fileName = substr(rand(1,90000000000000).time(),offset:2);
            $fileNameToStore = $fileName. '.'.$ext;
            // store the image
            $image->storeAs($folder,$fileNameToStore,'public');
        }
        return $fileNameToStore;
        
    }
}

// if (!function_exists('updating_image')){
//     function updating_image($folder, $Currentimagepath){
//         // $fileNameToStore = upload_single_image('image');
//         if (request()->hasFile('image')){
//             $oldimage = public_path("storage/$folder/$Currentimagepath");
//             if (file_exists('oldimage')){
//                 unset($oldimage);
//             }

//         }
//     }
// }

if (!function_exists('update_image')){
    function update_image($folder,$currentImagePath) : String{
        if (request()->hasFile('image')){
            $imagePath = public_path("storage/$folder/$currentImagePath");
            if (file_exists($imagePath)){
                unset($imagePath);
            }
            //upload the new image
            $image = request()->file('image');
            //Get the image extension
            $ext = $image->getClientOriginalExtension();
            //Build the filename
            $currentImagePath = substr(rand(1,9000000000000).time(),2);
            $fileNameToStore = $currentImagePath.'.'.$ext;
            //Store the image
            $image->storeAs($folder,$fileNameToStore,'public');
        }
        return $currentImagePath;
    }
}
