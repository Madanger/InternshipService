<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to the National Intenship Service program";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title',$title);
        
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services');
        return view('pages.services')->with($data);
    }

    public function apply(){
        return view('pages.intenship');
    }

    public function register(){
        return view('pages.register');
    }

    public function login(){
        return view('pages.login');
    }

    public function processApplications(){
        return view('pages.processApplications');
    }
}
