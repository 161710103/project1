<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function home(){
    	return view('home');
    }

    public function table(){
    	return view('table');
    }

     public function gallery(){
    	return view('gallery');
    }

     public function pelatih(){
    	return view('pelatih');
    }
     public function sejarah(){
    	return view('sejarah');
    }
}
