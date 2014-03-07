<?php namespace RyanNielson\Shareable\Buttons;

use View;

class Reddit extends Button {
  
    /**
     * An array of default options for the twitter button.
     * @var Array
     */
    private $defaultOptions = array(
      'url' => '',
      'title' => '',
      'bgcolor' => '',
      'bordercolor' => ''
    );
  
    /**
     * Called to render a social button.
     * @return string
     */
    public function render($options = array())
    {
      $options = array_merge($this->defaultOptions, $options);
      return View::make('shareable::reddit', array('options' => $options));
    }
}