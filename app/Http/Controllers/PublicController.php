<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }
}
