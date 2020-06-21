<?php

include 'EnqueteController.php';

class ControllerManager {

  public static function execute($request){
    switch($request){
      case '/': 
        $enqueteController = new EnqueteController();
        $enqueteController->index();
        break;
      case '/create':
        $enqueteController = new EnqueteController();
        $enqueteController->create();
    }
  }

}