<?php namespace RyanNielson\Shareable\Buttons;

use Illuminate\View\Environment as ViewEnvironment;

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

    private $view = null;
    
    public function __construct(ViewEnvironment $view) {
        $this->view = $view;   
    }
    
    /**
     * Called to render a social button.
     * @return string
     */
    public function render($options = array())
    {
        $options = array_merge($this->defaultOptions, $options);
        return $this->view->make('shareable::twitter', array('options' => $options));
    }
}