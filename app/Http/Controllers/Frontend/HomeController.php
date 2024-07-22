<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index() {
        return Inertia::render('Home', [
            'applicationVersion' =>  \Illuminate\Foundation\Application::VERSION,
            'phpVersion' => PHP_VERSION
        ]);
    }
}
