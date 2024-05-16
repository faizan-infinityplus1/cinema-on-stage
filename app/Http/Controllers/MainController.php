<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function aboutshow()
    {
        return view('about-show');
    }
    public function booknow()
    {
        return view('book-now');
    }
    public function booknowhidden(){
        return view('book-now-hidden');

    }
    public function pastshows()
    {
        return view('past-shows');
    }
    public function contactus()
    {
        return view('contact-us');
    }
    public function termsandcondition()
    {
        return view('terms-condition');
    }
    public function blog()
    {
        $blog = Blog::orderBy('id', 'DESC')->latest()->paginate(10);
        return view('blog', compact('blog'));
    }
    public function blog1($title, $id)
    {
        try {

            $nw  = Blog::where('id', $id)->firstOrFail();
            $news = Blog::orderBy('id', 'DESC')->latest()->get();
            return view('blog1', compact('nw', 'news'));
        } catch (\Exception $ex) {
            if ($ex instanceof \Illuminate\Database\Eloquent\ModelNotFoundException) {
                return redirect(route('blogs'))->with('erros', 'Whoops, Something Went Wrong !');
            }
            return redirect(route('blogs'))->with('erros',  $ex->getMessage());
        }
    }
    public function quickenquiry()
    {
        return view('quickenquiry');
    }
}
