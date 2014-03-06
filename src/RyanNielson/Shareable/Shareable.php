<?php namespace RyanNielson\Shareable;

use RyanNielson\Shareable\Buttons;
use Illuminate\Support\Facades\Config;
use View;

class Shareable {
  public function all()
  {
    $defaultButtons = Config::get('shareable::default_buttons', array());
    $buttonContent = '';
    $buttons = array();
    foreach ($defaultButtons as $button) {
      $className = "\\RyanNielson\\Shareable\\Buttons\\" . studly_case($button);
      if (class_exists($className))
        $buttons[] = new $className();
    }
    
    foreach ($buttons as $button) {
      $buttonContent .= $button->render(); 
    }

    return $buttonContent; 
  }

  public function __call($name, $arguments)
  {
    $className = "\\RyanNielson\\Shareable\\Buttons\\" . studly_case($name);
    $button = new $className;
    echo $button->render();
  }
}