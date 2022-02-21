<?php

namespace App\Controllers;

class HomeController {

    public function index(){
        $name = 'kaspar';
        dump($_GET);
        dump($_POST);
        view('home', compact('name'));
    }

    public function about(){
        view('about');
    }
}