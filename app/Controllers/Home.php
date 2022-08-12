<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = 'Martechedge';
        return view('header', $data)
            . view('home')
            . view('footer');
    }
}
