<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


      return view('front-end.index');
    }

    public function all_blog(){

      return view('front-end.all-blog');
    }

    public function detail_blog(){

      return view('front-end.detail-blog');
    }
}
