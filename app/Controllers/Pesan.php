<?php

namespace App\Controllers;

class Pesan extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Input Pesan'
        ];
        echo view('templates/header', $data);
        echo view('pesan/inputpesan');
        echo view('templates/footer');
        
    }

    public function submit()
    {
        $data = [
            'title' => 'Tampilkan Pesan',
            'pesan' => $_POST['pesan']
            ];
            echo view('templates/header', $data);
            echo view('pesan/tampilpesan');
            echo view('templates/footer');
            
    }
}