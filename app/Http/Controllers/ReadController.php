<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function onepiecezz(){
        return view('onepiece.onepiece');
    }
    
    public function somazz(){
        return view('soma.soma');
    }
    public function dragonballzz(){
        return view('xdragonball.dragonball');
    }
    
    
    public function onepiece_ep_1(){
        return view('onepiece.oneep1');
    }
    public function onepiece_ep_2(){
        return view('onepiece.oneep2');
    }
    public function onepiece_ep_3(){
        return view('onepiece.oneep3');
    }
    public function onepiece_ep_4(){
        return view('onepiece.oneep4');
    }
    public function onepiece_ep_5(){
        return view('onepiece.oneep5');
    }
    
    
    
    public function soma_ep_1(){
        return view('soma.somaep1');
    }
    public function soma_ep_2(){
        return view('soma.somaep2');
    }
    public function soma_ep_3(){
        return view('soma.somaep3');
    }
    public function soma_ep_4(){
        return view('soma.somaep4');
    }
    public function soma_ep_5(){
        return view('soma.somaep5');
    }
    
    
    public function dragonball_ep_1(){
        return view('xdragonball.dragonballep1');
    }
    public function dragonball_ep_2(){
        return view('xdragonball.dragonballep2');
    }
    public function dragonball_ep_3(){
        return view('xdragonball.dragonballep3');
    }
    public function dragonball_ep_4(){
        return view('xdragonball.dragonballep4');
    }
    public function dragonball_ep_5(){
        return view('xdragonball.dragonballep5');
    }





}
