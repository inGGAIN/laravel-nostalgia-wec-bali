<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        $data['title']='home';
        return view('pages.home', $data);
    }

    public function contact() {
        $data['title']='contact';
        return view('pages.contact', $data);
    }

    public function about() {
        $data['title']='about us';
        return view('pages.about', $data);
    }
}