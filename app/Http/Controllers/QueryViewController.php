<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QueryViewController extends Controller{
    public function showView(){
        return view('query');
    }
}