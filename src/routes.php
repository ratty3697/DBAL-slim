<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


$app->get('/users/{name}', function (Request $request, Response $response) use ($conn){
    
    $name = $request->getAttribute('name');

    $queryBuilder = $conn->createQueryBuilder();

    $queryBuilder
    ->select('tutorial_id', 'name')
    ->from('data')
    ->where('name = ?')
    ->setParameter(0, $name);

    $statement = $conn->prepare('SELECT * FROM data');
	$statement->execute();
	$users = $queryBuilder->execute()->fetchAll();

	$response = $response->withJson($users);

    return $response;
});