<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;

class AdminController extends Controller
{
    public function index (){

        return view ('admin/admin');
    }

    public function santri(){

        return view ('admin/santri');
    }   
}
