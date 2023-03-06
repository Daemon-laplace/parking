<?php

namespace App\Http\Controllers;

class AccueilController extends Controller
{
    public function index()
    {
        return view('accueil');
    }

    public function signin()
    {
        return view('inscription');
    }


    public function login()
    {
        return view('connection');
    }
}