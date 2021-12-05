<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to the LaravelCRUD app';
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'Welcome to the About page of our app';
        return view('pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }
}
