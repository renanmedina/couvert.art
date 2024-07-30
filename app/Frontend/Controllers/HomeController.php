<?php

namespace App\Frontend\Controllers;

use App\Core\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('frontend.pages.home');
    }
}
