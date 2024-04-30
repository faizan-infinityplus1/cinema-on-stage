<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');

    }
    public function about(){
        return view('about');

    }
    public function aboutshow(){
        return view('about-show');
    }
    public function booknow(){
        return view('book-now');
    }
    public function pastshows(){
        return view('past-shows');
    }
    public function contactus(){
        return view('contact-us');
    }
    public function termsandcondition(){
        return view('terms-condition');
    }
    public function blog(){
        return view('blog');
    }
    public function blog1(){
        return view('blog1');
    }
}
