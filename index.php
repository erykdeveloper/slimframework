<?php
require _DIR_ . '/vendor/autoload.php';

use Psr\Http\Message\Message\ResponseInterface as Response;
use Psr\Http\Message\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


$app = AppFactory::create();

$app->get('/', function(Request $request, Response $response, $args){
    $response->getBody()->write("Hello world");
    return $response;
});