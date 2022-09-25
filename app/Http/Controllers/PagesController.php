<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $Students = Student::all();
        return view('welcome', compact('Students'));
    }
}

