<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Home Page';
        // return view('pages.index', compact('title'));
        return view('pages.index')-> with('title', $title);
    }

    public function about(){
        $title = 'About Page';
        return view('pages.about')-> with('title', $title);
    }

    public function services(){
       
        $data = array(
            'title' => 'Services Page',
            'services' => ['Web design', 'UI/UX design']
        );
        return view('pages.services')-> with($data);
    }
}
