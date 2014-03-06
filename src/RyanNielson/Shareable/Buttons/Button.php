<?php namespace RyanNielson\Shareable\Buttons;

abstract class Button {
  
    /**
     * The URL to share.
     * @var string
     */
    protected $url;
  
    /**
     * The title to share.
     * @var string
     */
    protected $title;
  
    /**
     * Called to render a social button.
     * @return string
     */
    public abstract function render();
}