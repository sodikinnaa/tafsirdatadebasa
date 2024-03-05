<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ScrapingModel;
use App\Models\wiki_en_model;

class Home extends BaseController
{
    public function index(): string
    {

        // Ambil data dari input link dan ubah spasi menjadi underscore
        $link = str_replace(' ', '_', $this->request->getPost('link'));
        $url = URLWIKI . $link;
        // Panggil model
        $model = new ScrapingModel();
        $data = $model->scrapeData($url);
        $title = "Teknopedia - Ensiklopedia Dunia";


        return view('templates/header',  ['title' => $title])
            // . view('templates/search')
            . view('templates/main', $data)
            . view('templates/footer');
    }
}
