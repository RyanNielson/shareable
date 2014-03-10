#shareable

A Laravel 4 package to make it easy to add social sharing buttons.

[![Build Status](https://travis-ci.org/RyanNielson/shareable.png?branch=develop)](https://travis-ci.org/RyanNielson/shareable.png)
This Laravel 4 package provides helpers for easily adding social sharing buttons to your views. This package includes support for:

- `Facebook`
- `Google Plus`
- `Twitter`


## Installation

Edit your project's `composer.json` file to require `ryannielson/shareable`:

	"require": {
		"ryannelson/shareable": "1.0.*"
	}

Then update Composer from the terminal:

	composer update

Once complete, you now have to add the the service provider to the providers array in `app/config/app.php`. 

	'RyanNielson\Shareable\ShareableServiceProvider'

That's it!


## Usage

Shareable current supports only a few social networks, which are accessed through a similar Shareable facade which should be used in your views. Each of these methods can also be passed an array of options which correspond to the options shown on the respective button creation pages and listed below.

Render all share buttons within a unordered list:
	{{ Shareable::all($options = array()) }}

### Facebook

	{{ Shareable::facebook($options = array()) }}

Option     | Type       | Default        | Possible Options
---------- | ---------- | ----------     | ----------
url        | string     | ''             | 
width      | integer    | 100            | 
type       | string     | 'button_count' | 'box_count', 'button_count', 'button', 'icon_link', 'icon', 'link'


### Google Plus
	{{ Shareable::googlePlus($options = array()) }}

### Twitter
	{{ Shareable::twitter($options = array()) }}



