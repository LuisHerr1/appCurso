<?php

namespace App\Http\Controllers;

use App\Models\_invoke_;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __invoke()
    {
        return "bienvenido a la pagina principal";
    }


}
