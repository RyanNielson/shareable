<?php namespace RyanNielson\Shareable\Buttons;

use View;

class GooglePlus extends Button {
  
    /**
     * Called to render a social button.
     * @return string
     */
    public function render($options = array())
    {
        return View::make('shareable::google_plus');
    }
}