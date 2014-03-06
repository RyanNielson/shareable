<?php namespace RyanNielson\Shareable\Buttons;

abstract class Button {
  
     /**
     * An array of default options for each button.
     * @var Array
     */
    private $defaultOptions = array();

    /**
     * Called to render a social button.
     * @return string
     */
    public abstract function render($options = array());
}