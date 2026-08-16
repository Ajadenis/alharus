<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramUnggulanController extends Controller
{
    public function program()
    {
        return view('program-unggulan.index');
    }
}
