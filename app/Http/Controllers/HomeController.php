<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('welcome');
    }

    public function about(){
      return view('about');
    }

    public function contact(){
      return view('contact');
    }

    public function query() {
      $queryData = request('q');
      return 'The parameter was ' . strip_tags($queryData);
    }
}
