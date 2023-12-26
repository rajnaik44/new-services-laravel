<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request){
        // echo "<pre>";
        // print_r($request->all());

         ///to change the file name and store
        $fileName = time()."-ws.".$request->file('image')->getClientOriginalExtension();
        // echo $fileName;
        // die;

      echo $request->file('image')->storeAS('uploads', $fileName);
    }
}
