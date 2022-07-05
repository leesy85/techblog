<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        echo 'this is pages controller';
    }

    function showme($page = 'home')
    {
        echo view('templates/header');
        echo view('pages/' . $page);
        echo view('templates/footer');
    }
}
