<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function main(){
        return view("welcome");
    }
}
