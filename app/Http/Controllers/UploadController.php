<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Upload;

class UploadController extends Controller
{
    public function show()
    {
        return view('uploadz.create');
    }

    public function store(Request $request)
    {
        $upload = new Upload();

        $upload->title_name = $request->input('title_name');
        $upload->discription = $request->input('discription');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('newuploads/',$filename);
            $upload->image = $filename;
        } else {
            return $request;
            $upload->image = '';
        }
        
        $upload->save();
        
        return redirect('/home');
    }

    
}
