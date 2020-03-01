<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tienda extends Controller
{
    //


    public function  about(){
        return view ("tienda.about");
    }

    public function  contacta(){
        return view ("tienda.contacta");
    }

    public function  comprar(){
        return view ("tienda.comprar");
    }

    public function  gestionar(){
        return view ("tienda.gestionar");
    }
}
