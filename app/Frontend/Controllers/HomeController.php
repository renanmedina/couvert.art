<?php

namespace App\Frontend\Controllers;

use App\Core\Http\Controllers\Controller;
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
