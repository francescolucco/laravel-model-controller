<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

            $name = 'Bentornato';
            $surname = 'Nio';

            // vecchio modo:
        // return view('home', ['name'=> $name, 'surname' => $surname]);

        // con compact invece risulta così (molto più comodo!):
        return view('home', compact('name', 'surname'));
    }

    
    public function about(){
        return view('about');
    }

    public function contacts(){
        $movies = Movie::all();
        return view('contacts', compact('movies'));
    }



}
