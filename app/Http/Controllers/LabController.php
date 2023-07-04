<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        return view('LabCoding.lab.start');
    }
}
