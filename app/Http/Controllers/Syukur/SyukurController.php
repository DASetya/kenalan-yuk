<?php

namespace App\Http\Controllers\Syukur;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SyukurController extends Controller
{
    public function index()
    {
        return view('syukur.index');
    }
}
