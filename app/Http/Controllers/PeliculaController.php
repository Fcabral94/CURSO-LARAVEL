<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    public function index()
    {
                return view("pelicula.index");
    }


    public function formulario(){
        return view("pelicula.formulario");
    }
    public function recibir(Request $request){
        $nombre = $request->input("nombre");
        $email = $request->input("email");
       
    echo  "el nombre es $nombre y el mail es $email";
        
    }
}


