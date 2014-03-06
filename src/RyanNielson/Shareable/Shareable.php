<?php namespace RyanNielson\Shareable;

use View;

class Shareable {
  public function facebook()
  {
    return View::make('shareable::facebook');
  }
}