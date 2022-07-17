<?php namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if (! $this->isLoggedIn()) {
            return redirect()->to('/');
        }

        $data = [
            'title' => 'dashboard'
        ];

        return view('dashboard', $data);
    }

    private function isLoggedIn() : bool
    {
        if (session()->get('logged_in')) {
            return true;
        }

        return false;
    }

}