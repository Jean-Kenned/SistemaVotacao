<?php

include __DIR__.'/../init.php';
include __DIR__.'/../app/Controllers/ControllerManager.php';

$request = $_SERVER['REQUEST_URI'];
ControllerManager::execute($request);


