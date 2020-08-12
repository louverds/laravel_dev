<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
        
        public function index(){
            $title= "Welcome to My Home Page!";
            return view('pages.index', compact('title'));
        // return view('pages.index')-->with('title', $title); 
        }
        public function about(){
            return view('pages.about'); 
        }
        public function services(){
            $data = array(
                'title' => 'Services',
                'services' => ['Web Design', 'Programming', 'SEO']
            );
            return view('pages.services')->with($data); 
        }
        
        public function members(){
            return view('pages.members'); 
        }
}

