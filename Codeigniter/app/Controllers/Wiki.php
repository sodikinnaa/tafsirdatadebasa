<?php
// app/Controllers/Wiki.php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\WikiModel;
use App\Models\wiki_en_model;

class Wiki extends Controller
{
    public function index()
    {
        // Panggil model WikiModel
        $model = new WikiModel();
        $url = URLWIKI;
        // Ambil data dari model berdasarkan link
        $data = $model->scrapeData($url);

        $title = $data['title'];



        return view('templates/header', ['title' => $title])
            // . view('templates/search')
            . view('templates/main', $data)
            . view('templates/footer');
    }
    public function view($link = '', $param = '')
    {
        // var_dump($link);
        // Panggil model WikiModel
        $model = new WikiModel();
        $url = URLWIKI . $link;
        // Ambil data dari model berdasarkan link
        $data = $model->scrapeData($url, $link);

        $title = $data['title'];



        return view('templates/header', ['title' => $title])
            // . view('templates/search')
            . view('templates/main', $data)
            . view('templates/footer');
    }



    public function edit_custom()
    {
        // Panggil model WikiModel
        $model = new WikiModel();
        $kosong = $model->Kosong();
        $title = $kosong['title'];

        return view('templates/header', ['title' => $title])
            // . view('templates/search')
            . view('templates/main', $kosong)
            . view('templates/footer');
        // Ganti 'home' dengan nama view beranda Anda.
    }
}
