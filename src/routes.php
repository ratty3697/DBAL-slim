<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->post('/health/', function (Request $request, Response $response) use ($conn){
    
    //$name = $request->getAttribute('name');
    $data = $request->getParsedBody();
    $response = $response->write($data['ip']);
    return $response;


    

});



