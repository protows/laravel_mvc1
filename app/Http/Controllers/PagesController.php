<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        //return 'INDEX';
        $title = 'Welcome to Laravel!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
          'title' => 'Service',
           'services' => ['Web design', 'PHP']
        );
        return view('pages.services')->with($data);
    }
}
