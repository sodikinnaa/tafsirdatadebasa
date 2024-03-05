<?php
// app/Models/WikiModel.php

namespace App\Models;

use Goutte\Client;
use App\Models\ScrapingModel;

class WikiModel
{
    public function scrapeData($url = '', $param = '')
    {
        $client = new Client();


        $crawler = $client->request('GET', $url);

        if ($client->getResponse()->getStatusCode() == 200) {
            // Anda dapat menyesuaikan elemen HTML yang ingin Anda scrape di sini
            $titleNode = $crawler->filter('title')->html();
            $contentHtml = $crawler->filter('div#bodyContent ')->html();
            // $titleNode = str_replace('Wikipedia', 'Teknopedia', $titleNode);
            $titleNode = str_replace(REPLACETITLE, ' ', $titleNode);

            $replace = new ScrapingModel();

            // Menghapus tag span dengan class "mw-editsection" dari konten

            $contentHtml = $replace->HiddenRemove($contentHtml);



            // $contentHtml = str_replace('class="printfooter"', 'class="printfooter" style="display:none" ', $contentHtml);
            // $contentHtml = str_replace('class="after-portlet after-portlet-lang"', 'class="after-portlet after-portlet-lang" style="display:none" ', $contentHtml);
            // $contentHtml = str_replace('id="mw-search-top-table"', 'id="mw-search-top-table" style="display:none" ', $contentHtml);

            $data = [
                'title' => $titleNode,
                'content' => $contentHtml,
            ];

            return $data;
        } else {
            $url = URLSEARCH . 'w/index.php?search=' . $param . '&title=Special%3ASearch&ns0=1';
            return $this->newscrapeData($url);
            /*return [
                'title' => 'Gagal mengambil halaman',
                'content' => 'Kode status HTTP: ' . $client->getResponse()->getStatusCode(),
            ];*/
        }
    }

    public function newscrapeData($url)
    {
        $client = new Client();


        $crawler = $client->request('GET', $url);

        if ($client->getResponse()->getStatusCode() == 200) {
            $titleNode = $crawler->filter('h1#firstHeading');
            $contentHtml = $crawler->filter('div#bodyContent')->html();

            $replace = new ScrapingModel();

            // Menghapus tag span dengan class "mw-editsection" dari konten

            $replace->HiddenRemove($contentHtml);

            $data = [
                // 'title' => $url,
                'title' => $titleNode->text(),
                'content' => $contentHtml,
            ];

            return $data;
        } else {
            return [
                'title' => $url,
                'content' => 'Kode status HTTP: ' . $client->getResponse()->getStatusCode(),
            ];
        }
    }

    public function Kosong()
    {
        $custom = [
            'title' => ENSIKLOPEDIANULL,
            'content' => '<a href="' . base_url() . '">Back</a>',
        ];

        return $custom;
    }
}
