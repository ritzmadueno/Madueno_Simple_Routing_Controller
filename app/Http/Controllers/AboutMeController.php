<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    public function show()
    {
        $data = [
            'description' => "Hi!, I'm Ritz , Here are some things you should know about me.",
            'list' => ['Certified Original Gangster', "I'm Always Clutch", 'I Make My Own Songs'],
            'image' => 'profile.jpg' 
        ];
        return view('about-me', ['data' => $data]);
    }
}

