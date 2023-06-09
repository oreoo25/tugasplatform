<?php

namespace App\Controllers;

use App\Models\AsistenModel;

class AsistenController extends BaseController
{
    protected $asistenModel;

    public function __construct()
    {
        $this->asistenModel = new AsistenModel();
    }

    public function index()
    {
        $daftar = $this->asistenModel->findAll();
        $data = [
            'list' => $daftar
        ];
        return view('asisten/AsistenView', $data);
    }

    public function simpan()
    {
        helper('form');
        
        if (!$this->request->is('post')) {
            return view('asisten/simpan');
        }
        
        $post = $this->request->getPost(['nim', 'nama', 'praktikum', 'ipk']);
        
        $model = model(AsistenModel::class);
        $model->simpan($post);
        
        return view('asisten/success');
    }

    public function search()
    {
        if (!$this->request->is('post')) {
            return view('asisten/search');
        }

        $nim = $this->request->getPost('key');

        $model = model(AsistenModel::class);
        $asisten = $model->ambil($nim);

        $data = ['hasil' => $asisten];
        return view('asisten/search', $data);
    }

    public function edit()
    {
        $db = \config\Database::connect();
        $Builder = $db->table('asisten');
        helper('form');

        if (!$this->request->is('post')) {
            return view('asisten/update');
        }

        $data = [
            'nama' => $this->request->getPost('nama'),
            'praktikum' => $this->request->getPost('praktikum'),
            'ipk' => $this->request->getPost('ipk')
        ];

        $Builder->where('NIM', $this->request->getPost('nim'));
        $Builder->update($data);

        return view('asisten/success');
    }

    public function delete()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('asisten');
        helper('form');

        if (!$this->request->is('post')) {
            return view('asisten/delete');
        }

        $post = $this->request->getPost('nim');

        $builder->where('nim', $post);
        $builder->delete();

        return view('asisten/success');
    }
}
