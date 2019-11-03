<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title1 = 'Welcome to Laravel!!';
        $title2 = 'Welcome to Laravel!!!!!!!!';
        return view('pages.index', compact('title1', 'title2'));
        //return view('pages.index')->With('title1', $title1);
    }

    public function about(){
        $data = array(
            'title' => 'About',
            'when' => 'Nov 2 2019',
            'team' => ['Ankit', 'Ankita', 'Aavya']
        );
        return view('pages.about')->With($data);
    }
}
