<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('home');
    }
    /**
     * Greet the user.
     *
     * 
     * @return String
     */
    public function homeGreet()
    {
        return "Greetings!";
    }
}
