<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Editorial;

class EditorialController extends Controller
{
    public function index()
    {
        
        return view('Editorial.agregarEditorial');
    }
}
