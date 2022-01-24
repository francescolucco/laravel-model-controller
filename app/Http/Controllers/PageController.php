<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

            $name = 'Giovanni';
            $surname = 'Trevisan';

            // vecchio modo:
        // return view('home', ['name'=> $name, 'surname' => $surname]);

        // con compact invece risulta così (molto più comodo!):
        return view('home', compact('name', 'surname'));
    }

    
    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }



}
