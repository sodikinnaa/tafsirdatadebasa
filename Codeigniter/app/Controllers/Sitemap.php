<?php

namespace App\Controllers;

class Sitemap extends BaseController
{
    public function index()
    {
        // URL array yang ingin dimasukkan dalam sitemap
        $urls = [
            'https://teknopedia.teknokrat.ac.id',
            // Tambahkan URL lainnya sesuai kebutuhan
        ];

        // Load View "sitemap" dengan data URL
        return view('sitemap', ['urls' => $urls]);
    }
}
