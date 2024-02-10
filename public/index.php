<?php
use App\Router;


$url = ($_GET['url'])??null;

require '../vendor/autoload.php';

define('hotelMVC', '/'); 
$router = new Router();

$router->get('', 'Hotel#index');
$router->get('chambres', 'Chambres#index');
$router->get('pratique', 'Pratique#index');
$router->get('reservation', 'Reservation#index');
$router->get('galerie', 'Galerie#index');
$router->get('tarifs', 'Tarifs#index');
$router->get('mentions', 'Mentions#index');
$router->get('tourisme', 'Tourisme#index');
$router->get('admin', 'Admin#index');
$router->get('edit', 'Edit#detailTarif');
$router->post('updateTarif', 'Edit#updateTarif');



$match = $router->run();
