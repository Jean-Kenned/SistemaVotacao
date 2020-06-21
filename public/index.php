<?php

include __DIR__.'/../init.php';
include __DIR__.'/../app/Controllers/ControllerManager.php';

$requestURI = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];
ControllerManager::execute($requestURI,$requestMethod);


