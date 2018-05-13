<?php

$router = $di->getRouter();

// Define your routes here


$router->addGet('/circle/{radius}',
    [
        'controller' => 'circle',
        'action' => 'index',
    ]
);

$router->addGet('/triangle/{a}/{b}/{c}',
    [
        'controller' => 'triangle',
        'action' => 'index',
    ]
);

$router->handle();
