<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HobbiesController extends Controller
{
    public function show()
    {
        $data = [
            'description' => 'These are a few of my favorite hobbies.',
            'list' => ['Video Games', 'Drawing', 'Lawn Tennis'],
        ];
        return view('hobbies', ['data' => $data]);
    }
}
