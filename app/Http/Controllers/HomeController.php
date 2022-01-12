<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LengthException;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function create_anagrama()
    {
        
        return view('anagrama');
    }
    public function anagrama(Request $request)
    {   
        $request->validate([
            'a' => 'required|min:1|max:50',
            'b' => 'required|min:1|max:50'
        ]);
        $a=$request->a;
        $b=$request->b;
        
        $abc= (strlen($a) == strlen($b)) ? 'si es son anagramas' :'no son anagramas';
        strrev($b);
        dd($abc , $a , $b);

        return view('anagrama');
    }
    public function matriz()
    {   
        $Matriz[0][0] = 1;
        $Matriz[0][1] = 2;
        $Matriz[0][2] = 3;
        $Matriz[1][0] = 4;
        $Matriz[1][1] = 5;
        $Matriz[1][2] = 6;
        $Matriz[2][0] = 7;
        $Matriz[2][1] = 8;
        $Matriz[2][2] = 9;

        $a=$Matriz[0][0]+$Matriz[1][1]+$Matriz[2][2];
        $b=$Matriz[0][2]+$Matriz[1][1]+$Matriz[2][2];
        $c=$a-$b;
        dd($a ,$b,$c);
        return view('matriz');
    }
    public function sam(){

        $S=7;
        $T=10;
        $A=4;
        $B=12;     
        $M= 3;
        $N=3;
        $manzanas = [2,3,-4];
        $naranjas = [3, -2, -4] ;
        $mazana1=$A + $manzanas [0];
        $mazana2=$A + $manzanas [1];
        $mazana3=$A + $manzanas [2];
        
        $naranjas1=$B + $naranjas [0];
        $naranjas2=$B+$naranjas [1];
        $naranjas3=$B+$naranjas [2];
        $Manzanas_aterrizan=[$mazana1,$mazana2,$mazana3 ];
        
        $Naranjas_aterrizan=[$naranjas1,$naranjas2,$naranjas3];
        // dd($Manzanas_aterrizan , $Naranjas_aterrizan);
        dd($Manzanas_aterrizan[1], $Naranjas_aterrizan[1] ,$Naranjas_aterrizan[2] );
        return view('sam'); 
    }
    
}