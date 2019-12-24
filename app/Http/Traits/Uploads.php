<?php

namespace App\Http\Traits;

trait Uploads {

    /**
     * Upload image for any kind of object.
     *
     * @param File $file
     * @param string $folder
     * @return string path of image
     */
    public function UploadImage($file, $folder)
    {
        $fileName = str_random(30) . "." . $file->getClientOriginalExtension();
        $path = public_path("/uploads/$folder/");
        $file->move($path, $fileName);
        return "/uploads/$folder/" . $fileName;
    }

    /**
     * Upload file.
     *
     * @param Request $file
     * @param Setting $className
     *
     * @return bool|string
     */
    public function uploadeFile($file, $className)
    {
        $className = str_replace("\\", "/", $className);
        $fileName = str_random() . "." . $file->getClientOriginalExtension();
        $path = public_path("/img/$className/");
        $file->move($path, $fileName);
        return "/img/$className/" . $fileName;
    }

    public function deleteExistImage($content, $var)
    {
        $field = json_decode($content, true);
        if(!empty($field[$var]) && file_exists(public_path() . $field[$var])) {
            unlink(public_path() . $field[$var]);
        }
    }

    public function deleteImage(string $path)
    {
        $imagePath = public_path($path);
        if (file_exists($imagePath)) {
            unlink($imagePath);
            return true;
        }

        return false;
    }

    /**
     * Delete images of object
     *
     * @param array $images
     * @param Object $classImg
     * @return bool
     */
    public function deleteImagesObj($images, $classImg)
    {
        foreach ($images as $img) {
            $imagePath = public_path($img->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $currentImg = $classImg::find($img->id);
            $currentImg->delete();
            return true;
        }
    	return false;
    }
}


