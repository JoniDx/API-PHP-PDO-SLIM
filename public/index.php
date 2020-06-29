<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';
require '../src/config/db.php';
require '../src/rutas/agenda.php';
$app = new \Slim\App;


require '../src/rutas/agenda.php';

$app->get('/hello/{name}', function (Request $request,  Response $response, array $args) {
    return $response->write("Hello " . $args['name']);
});

// Run app
$app->run();
