<?php

namespace App\Controllers;

class HomeController {

    public function index(){
        $name = 'kaspar';
        setcookie('mycookie', '12334', time()+60*60*24*30);
        //$_SESSION['username'] = null;
        dump($_GET);
        dump($_POST);
        dump($_REQUEST);
        dump($_FILES);
        if($_FILES){
            $parts = explode('.',$_FILES['image']['name']);
            $format = $parts[count($parts)-1];
            $ourName = md5($_FILES['image']['name'] . microtime()) . ".$format";
            //move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../../'. $ourName);
        }
        dump($_COOKIE);
        dump($_SESSION);
        view('home', compact('name'));
    }

    public function about(){
        view('about');
    }
}