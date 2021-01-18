<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\File;

use Illuminate\Support\Facades\Storage; //para utilizar la clase storage
use Intervention\Image\Facades\Image;



class FileController extends Controller
{
   
    public function index()
    {
        
        return view('files.index');
    }

    
    public function create()
    {
        return view('files.create');
    }

   
    public function store(Request $request)
    {
        

        $request->validate([
            'file'=> 'required|image|max:2048'
        ]);
        // //return $request->all();
        // //return $request->file('file'); ruta temporal de mi servidor
        // $nombre = $request->file('file')->getClientOriginalName();
       
        // $ruta = storage_path() . '\app\public\imagenes/' . $nombre; 
        // return $ruta;
        //subo imagen con nombre original 'getClientOriginalName()', pero para evitar nombre repetidos
      

        $imagen=$request->file('file')->store('public/imagenes'); 
        $url = Storage::url($imagen);
        
        

        File::create([
            'url'=>$url
        ]);     
     
        return back();

     //  Image::make($request->file('file'))->save($ruta);   



    }


    public function show($id)
    {
      return view('files.show');
    }


    public function edit($id)
    {
        return view('files.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
