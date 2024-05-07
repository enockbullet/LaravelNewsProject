<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $name = 'Divine Enock ';
        $sex = 'Male';
        $colors = ['green', 'blue', 'pink', 'yellow', 'red'];
        return view('index', [
            'name' => $name,
            'sex' => $sex,
            'colors' => $colors
        ]);
    }
    public function about_us()
    {
        return view('about_us');
    }
}
