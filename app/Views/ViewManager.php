<?php

class ViewManager {
  protected $template = null;

  public function __construct($template) {
    $this->template = $template;
  }

  public function render(Array $data){
    extract($data);
    include( __DIR__. DIRECTORY_SEPARATOR . $this->template);
    $content = ob_get_contents();
    ob_end_clean();
    return $content;
  }


}


