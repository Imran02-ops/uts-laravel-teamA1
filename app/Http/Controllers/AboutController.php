<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'name' => 'Arthur Emanuel Dekko',
            'nim' => '2301010097',
            'bio' => 'Front-end developer yang mencintai desain dan eksplorasi UI/UX 💻'
        ]);
    }
}
