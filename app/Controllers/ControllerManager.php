<?php

include 'EnqueteController.php';

class ControllerManager {

  public static function execute($requestURI,$requestMethod){
    switch($requestURI){
      case '/': 
        $enqueteController = new EnqueteController();
        $enqueteController->index();
        break;
      case '/create':
        if($requestMethod=='GET'){
          $enqueteController = new EnqueteController();
          $enqueteController->create();
        }
        if($requestMethod=='POST'){
          $enqueteController = new EnqueteController();
          $enqueteController->store();
        }
    }
  }

}