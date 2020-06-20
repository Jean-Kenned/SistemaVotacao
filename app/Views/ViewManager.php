<?php

class ViewManager {
  protected $template = null;
  private $data = array();

  public function __construct($template) {
    $this->template = $template;
  }

  public function assign($variable, $value){
      $this->data[$variable] = $value;
  }

  public function render(){
    extract($this->data);
    include( __DIR__. DIRECTORY_SEPARATOR . $this->template);
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }


}


