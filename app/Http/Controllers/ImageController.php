<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

use App\Models\File;

class ImageController extends Controller {

    public function ResizeImage()
    {
       return view ('resize-image');
    }

    public function resizeImageSumit(Request $request)
    {
        $image = $request->file;
        $filename = $image->getClientOriginalName();
        $image_resize = File::make($image->getRealPath());
         return $image_resize;
        // $image_resize->resize(300,300);
        // $image_resize->save(public_path('images/'.$filename));
        return "exitoso";
    }

}