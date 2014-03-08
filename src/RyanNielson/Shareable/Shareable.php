<?php namespace RyanNielson\Shareable;

use \Illuminate\Support\Facades\Config;
use \Illuminate\View\Environment as ViewEnvironment;
use View;

class Shareable {
    private $view = null;
    
    public function __construct(ViewEnvironment $view)
    {
        $this->view = $view;   
    }
    /**
     * Returns all social sharing buttons.
     * @return string
     */
    public function all()
    {
        $defaultButtons = Config::get('shareable::default_buttons', array());
        $output = '';
        
        foreach ($defaultButtons as $button) {
            $output .= call_user_func(array($this, $button));
        }
        
        return $output;
    }

    public function __call($name, $arguments)
    {
        $className = "\\RyanNielson\\Shareable\\Buttons\\" . studly_case($name);
        $button = new $className($this->view);
        return $button->render(count($arguments) > 0 ? $arguments[0] : array());
    }
}