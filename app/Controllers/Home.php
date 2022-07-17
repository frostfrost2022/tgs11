<?php namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'FZR Shiba | Home'
        ];

        return view('home', $data);
    }

}