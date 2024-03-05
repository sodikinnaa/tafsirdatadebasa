<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// $routes->get('/', 'Wiki::view/$1');



$routes->get('/w/(:any)', 'Wiki::edit_custom');
$routes->get('/w', 'Wiki::edit_custom');


// $routes->get('/(:any)', 'Wiki::view/$1');
// $routes->get('blog', [Blog::class, 'index']);
$routes->get('/', 'Home::index');
$routes->get('web-scraper', 'WebScraper::index');
$routes->post('web-scraper/scrape', 'WebScraper::index');
$routes->get('wiki/(:any)', 'Wiki::view/$1');
$routes->get('wiki', 'Home::index');
$routes->get('w', 'Wiki::view/$1');
$routes->get('Pengumuman', 'Pengumuman::index');
$routes->get('pengumuman', 'Pengumuman::index');
$routes->get('/(:any)', 'Wiki::edit_custom');
$routes->get('/(', 'Wiki::edit_custom');
// $route['wiki/search/(:any)'] = 'wiki/search?search_query=$1';

$routes->get('sitemap.xml', 'Sitemap::index');
