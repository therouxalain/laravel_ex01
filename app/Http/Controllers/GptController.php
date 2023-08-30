<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GptController extends Controller
{
    //
    public function index(){
        return view('home');
    }

    public function exemples(){
        return view('exemples');
    }

    public function equipe(){
        return view('equipe');
    }

    //Prise des informations
    public function questions(){
        return view('questions');
    }

    //Production d'une page avec la solution à la demande par CheapGPT
    public function solution(Request $request)
    {
        return view('solution', ['data' => $request]);
    }

}
