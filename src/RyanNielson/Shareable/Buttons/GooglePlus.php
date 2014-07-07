<?php namespace RyanNielson\Shareable\Buttons;

class GooglePlus extends Button {
    /**
     * An array of default options for the twitter button.
     *
     * @var Array
     */
    protected $defaultOptions = array(
        'url' => '',
        'size' => 'medium',
        'lang' => 'en-US',
        'width' => null,
        'annotation' => 'bubble'
    );

    /**
     * Called to render a social button.
     *
     * @param  array  $options
     * @return string
     */
    public function render($options = array())
    {
        $options = array_merge($this->defaultOptions, $options);
        if ($options['size'] === 'small')
            $options['height'] = 15;
        elseif ($options['size'] === 'large')
            $options['height'] = 24;
        else
            $options['height'] = '';

        return $this->view->make('shareable::google_plus', array('options' => $options));
    }
}
