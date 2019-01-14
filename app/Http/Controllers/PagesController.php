<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function inicio(){
        return view('welcome');//retorna a la vista con el nombre welcome
    }
    public function buscar(){
        return view('buscar');//retorna a la vista con el nombre buscar
    }
    public function login(){
        return view('login');//retorna a la vista con el nombre login
    }
    public function preguntas($pregunta = null){
        $grupodep = ['Pregunta 1','Pregunta 2', 'Pregunta 3'];
        return view('preguntas',compact('grupodep','pregunta'));
    }
}
