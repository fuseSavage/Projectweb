<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asdmin;

class AsdminController extends Controller
{
    
    public function index()
    {
        return view('asdmin');
    }

    public function store(Request $request)
    {
        $asdmin = new Asdmin();

        $asdmin->name = $request->input('name');
        $asdmin->email = $request->input('email');
        $asdmin->post = $request->input('post');
        
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $asdmin->image = $filename;
        } else {
            return $request;
            $asdmin->image = '';
        }
        
        $asdmin->save();
        
        return view('asdmin')->with('asdmin',$asdmin);
    }
}