<?php namespace RyanNielson\Shareable\Buttons;

use View;

class Twitter extends Button {
  
    /**
     * An array of default options for the twitter button.
     * @var Array
     */
    private $defaultOptions = array(
      'url' => '',
      'text' => '',
      'count' => true,
      'via' => '',
      'recommend' => '',
      'hashtags' => '',
      'size' => '',
      'lang' => 'en'
    );
  
    /**
     * Called to render a social button.
     * @return string
     */
    public function render($options = array())
    {
      $options = array_merge($this->defaultOptions, $options);
      return View::make('shareable::twitter', array('options' => $options));
    }
}