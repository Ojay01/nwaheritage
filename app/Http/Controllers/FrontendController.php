<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    

        public function contact()
    {
        return view('contact');
    }
        public function about()
    {
        return view('about');
    }
        public function education()
    {
        return view('education');
    }
        public function joinUs()
    {
        return view('join-us');
    }
        public function events()
    {
        return view('events');
    }
        public function projects()
    {
        return view('projects');
    }
        public function history()
    {
        return view('history');
    }
}
