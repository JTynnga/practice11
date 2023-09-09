<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    function upload()
    {
        //return "hola desde controller";
        return view("upload");
    }
    function uploadPost(Request $request)
    {
        $file = $request->file("file");
        echo 'FileName:' . $file->getClientOriginalName();
        $destinationPath = "uploads";
        echo '<br>';
        echo 'File Extension:' . $file->getClientOriginalExtension();
        echo '<br>';
        echo 'File Real Path:' . $file->getRealPath();
        echo '<br>';
        echo 'File size:' . $file->getSize();
        echo '<br>';
        echo 'File Mime Type:' . $file->getMimeType();
        echo '<br>';
        if ($file->move($destinationPath, $file->getClientOriginalName())) {
            echo "File Upload Sucess";
        } else
            echo "Failed to upload file";
    }
}