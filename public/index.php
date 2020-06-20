<?php

include __DIR__.'/../init.php';
include __DIR__.'/../app/Controllers/EnqueteController.php';

$enqueteController = new EnqueteController();
$enqueteController->index();

