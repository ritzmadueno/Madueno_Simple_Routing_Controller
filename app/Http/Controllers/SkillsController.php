<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function show()
    {
        $data = [
            'description' => 'Some of my Skills.',
            'list' => ['HTML', 'CSS', 'DESIGNING'],
        ];
        return view('skills', ['data' => $data]);
    }
}
