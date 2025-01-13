<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function __construct() {}

    public function index()
    {
        return view('encurtador.index');
    }
}
