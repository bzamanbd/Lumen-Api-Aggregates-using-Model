<?php

/** @var \Laravel\Lumen\Routing\Router $router */


$router->get('/count', 'MemberController@countData');
$router->get('/max', 'MemberController@maxData');
$router->get('/min', 'MemberController@minData');
$router->get('/avg', 'MemberController@avgData');
$router->get('/sum', 'MemberController@sumData');