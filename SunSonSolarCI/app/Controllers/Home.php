<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('landingpage'); // Loads app/Views/landingpage.php
    }

    public function login(): string
    {
        return view('login'); // Loads app/Views/login.php
    }
}