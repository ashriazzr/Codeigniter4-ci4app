<?php

namespace App\Controllers;

use CodeIgniter\Commands\Utilities\Publish;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Web',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        echo view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | Web'
        ];
        echo view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'jl.abc no.3',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'jl.bca no.3',
                    'kota' => 'Bekasi'

                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
