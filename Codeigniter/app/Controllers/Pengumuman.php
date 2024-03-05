<?php
// app/Controllers/Pengumuman.php

namespace App\Controllers;

use CodeIgniter\Controller;

class Pengumuman extends Controller
{
    public function index()
    {
        // return view('welcome_message');
        // Isikan dengan format 
        // return view('nama_view');
        // jika difolder
        // return view('nama/folder/nama_view');
        $title = "Pengumuman";

        return view('templates/header',  ['title' => $title])
            // . view('templates/search')
            . view('templates/pengumuman')
            . view('templates/footer');
    }
}
