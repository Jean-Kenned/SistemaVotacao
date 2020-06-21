<?php

class Helpers {
  public static function formatData($data,$hora){
    $stringDate = $data." ".$hora.":00"; 
    return $stringDate;
  }

}