<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
   public function home(){
    return view('home');
   }
   public function about(){
    return view('about');
   }

   public function post(){
    return view('post');
   }
   public function Contact(){
    return view('Contact');
   }
}
