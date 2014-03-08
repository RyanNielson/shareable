<?php

use Mockery as m;
use \Illuminate\Support\Facades\View;
use RyanNielson\Shareable\Buttons\Twitter;

class ButtonsTwitterTest extends PHPUnit_Framework_TestCase {

	public function tearDown()
	{
		m::close();
	}

	public function testRender()
	{
        //$viewFactory = new View;
        $twitter = new Twitter(new View);
        dd($twitter->render());
        //dd(new Twitter);
        //dd(new View);
        $viewFactory = new Illuminate\View\Factory;        
        //$twitter = new \RyanNielson\Buttons\Twitter($viewFactory);
        //$view = m::mock('Illuminate\View\Factory');
        dd($viewFactory);
        dd(m::mock('Illuminate\View\Factory'));
		$customPresenter = m::mock('Illuminate\Pagination\Presenter');
		$customPresenter->shouldReceive('getPageLinkWrapper')
			->once()
			->andReturnUsing(function($url, $page) {
				return '<a href="' . $url . '">' . $page . '</a>';
			});
		$this->assertEquals('<a href="http://laravel.com?page=1">1</a>', $customPresenter->getPageLinkWrapper('http://laravel.com?page=1', '1'));
	}
}