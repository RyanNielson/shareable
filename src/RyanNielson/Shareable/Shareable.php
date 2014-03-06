<?php namespace RyanNielson\Shareable;

use RyanNielson\Shareable\Buttons;
use Illuminate\Support\Facades\Config;
use View;

class Shareable {
  public function all()
  {
    $defaultButtons = Config::get('shareable::default_buttons', array());

    foreach ($defaultButtons as $button) {
      call_user_func(array($this, $button));
    }
  }

  public function __call($name, $arguments)
  {
    $className = "\\RyanNielson\\Shareable\\Buttons\\" . studly_case($name);
    $button = new $className;
    echo $button->render();
  }
}