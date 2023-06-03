<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemplarController extends Controller
{
    public function index()
    {
        
        return view('Ejemplares.agregarEjemplares');
    }

}