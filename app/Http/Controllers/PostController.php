<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateNumber;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function shows()
    {
        return view('shows');
    }

    public function validateYear(ValidateNumber $request)
    {
        return "dsfdfd";
    }
}
