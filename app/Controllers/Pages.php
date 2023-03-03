<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | E-TATA'
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About | E-TATA'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'CONTACT US | E-TATA',
            'alamat' => [
                [
                    'tipe' => 'rumah',
                    'alamat' => 'Jl. Guntung lai',
                    'kota' => 'Samarinda'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. MT HARYONO',
                    'kota' => 'Samarinda'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
