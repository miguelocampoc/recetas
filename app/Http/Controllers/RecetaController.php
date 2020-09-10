<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {

        
           $recetas= [
               'recetas pizza', 'receta hamburguesa', 
               'receta tacos'
           ];


     return view('recetas.index',compact('recetas'));
    }
}
