<?php

namespace App\Controllers;

use CodeIgniter\Commands\Utilities\Publish;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web',
            'tes' => ['satu','dua','tiga']
        ];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About | Web'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }
}
