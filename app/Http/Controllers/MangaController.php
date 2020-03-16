<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Manga;

class MangaController extends Controller
{

    public function create()
    {
        return view('Manga.MangaCreate');
    }
    public function store(Request $request)
    {
        
        $data = request()->validate([
            'title_name' => 'required',
            'details'   => 'required'
        ]);

        //dd($data);

        // // บันทึกข้อมูล 
        $data['user_id'] = auth()->user()->id;
        $manga = \App\Manga::create($data);

        return redirect('/home');
        

    }

}
