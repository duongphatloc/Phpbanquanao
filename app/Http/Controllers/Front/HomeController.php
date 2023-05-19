<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view ('front.index');
    }
    public function about(){
        return view ('front.home.about');
    }
    public function service(){
        return view ('front.home.service');
    }
}
