<?php namespace RyanNielson\Shareable\Buttons;

abstract class Button {
    /**
     * An array of default options for each button.
     *
     * @var Array
     */
    protected $defaultOptions = array();

    /**
     * The view environment or factory used to render views.
     *
     * @var \Illuminate\View\Environment|\Illuminate\View\Factory
     */
    protected $view;

    /**
     * Constructs a button and injects a view environment for rendering.
     *
     * @return void
     */
    public function __construct($view) {
        $this->view = $view;
    }

    /**
     * Called to render a social button.
     *
     * @return string
     */
    public abstract function render($options = array());
}
