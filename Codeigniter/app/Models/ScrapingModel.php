<?php

namespace App\Models;

use CodeIgniter\Model;
use Goutte\Client;

class ScrapingModel extends Model
{
    public function scrapeData($link)
    {
        $client = new Client();


        $crawler = $client->request('GET', $link);

        if ($client->getResponse()->getStatusCode() == 200) {
            $titleNode = $crawler->filter('h1#firstHeading span');
            if ($titleNode->count() > 0) {
                $title = $titleNode->text();
            } else {
                $title = "Title not found";
            }

            $contentNode = $crawler->filter('div#bodyContent');
            if ($contentNode->count() > 0) {
                $content = $contentNode->html();
                $contentNode = $crawler->filter('div#bodyContent');
            } else {
                $content = "Content not found";
            }

            // $content = str_replace('id="mp-topbanner"', 'id="mp-topbanner" style="display:none" ', $content);
            // $content = str_replace('"printfooter"', '"printfooter" style="display:none" ', $content);
            // $content = str_replace('https://en.wikipedia.org/', 'https://teknopedia.ac.id/', $content);
            // $content = str_replace('"after-portlet after-portlet-lang"', '"after-portlet after-portlet-lang" style="display:none"', $content);
            // $content = str_replace('id="p-lang-btn"', 'id="p-lang-btn" style="display:none" ', $content);
            $content = $this->HiddenRemove($content);
            $data = [
                'title' => $title,
                'content' => $content,
            ];

            return $data;
        } else {
            return [
                'title' => 'Gagal mengambil halaman',
                'content' => 'Kode status HTTP: ' . $client->getResponse()->getStatusCode(),
            ];
        }
    }

    public function HiddenRemove($html)
    {
        $ArrStrip = [
            'id="mp-topbanner"' => 'id="mp-topbanner" style="display:none" ',
            '"printfooter"' => '"printfooter" style="display:none" ',
            'https://en.wikipedia.org/' => 'https://teknopedia.ac.id/',
            '"after-portlet after-portlet-lang"' => '"after-portlet after-portlet-lang" style="display:none"',
            'id="p-lang-btn"' => 'id="p-lang-btn" style="display:none" ',
            'id.wikipedia.org' => 'teknopedia.teknokrat.ac.id',
            'https://en.wikipedia.org/' => 'https://en.teknopedia.teknokrat.ac.id/',
            'fr.wikipedia.org' => 'fr.teknopedia.teknokrat.ac.id',
            'jp.wikipedia.org' => 'jp.teknopedia.teknokrat.ac.id',
            'de.wikipedia.org' => 'de.teknopedia.teknokrat.ac.id',
            'it.wikipedia.org' => 'it.teknopedia.teknokrat.ac.id',
            'es.wikipedia.org' => 'es.teknopedia.teknokrat.ac.id',
            'ru.wikipedia.org' => 'ru.teknopedia.teknokrat.ac.id',
            'fa.wikipedia.org' => 'fa.teknopedia.teknokrat.ac.id',
            'pl.wikipedia.org' => 'pl.teknopedia.teknokrat.ac.id',
            'zh.wikipedia.org' => 'zh.teknopedia.teknokrat.ac.id',
            'nl.wikipedia.org' => 'nl.teknopedia.teknokrat.ac.id',
            'pt.wikipedia.org' => 'pt.teknopedia.teknokrat.ac.id',
            'ar.wikipedia.org' => 'ar.teknopedia.teknokrat.ac.id',
            'https://tet.wikipedia.org/' => 'https://teknopedia.teknokrat.ac.id/',
            'class="mw-editsection"' => 'class="mw-editsection" style="display:none" ',
            'btn pull-right primary"' => 'btn pull-right primary" style="display:none;"',
            'href="/wiki' => 'href="/wiki',

            'btn pull-right primary"' => 'btn pull-right primary" style="display:none;"',
            'href="/wiki' => 'href="/wiki',
            'class="mw-editsection"' => 'class="mw-editsection" style="display:none" ',
            'class="printfooter"' => 'class="printfooter" style="display:none" ',
            // 'class="after-portlet after-portlet-lang"', 'class="after-portlet after-portlet-lang" style="display:none" ',

            'id="p-lang-btn"' => 'id="p-lang-btn" style="display:none" ',
            'id="mw-search-top-table"' => 'id="mw-search-top-table" style="display:none" ',
            'https://en.wikipedia.org/' => 'https://teknopedia.ac.id/',
            'mp-footer"' => 'mp-footer" style="display:none;"',
            'class="nomobile mp-header"' => 'class="nomobile mp-header" style="display:none" ',

        ];

        foreach ($ArrStrip as $key => $value) {
            $html = str_replace($key, $value, $html);
        }

        return $html;
    }
}
