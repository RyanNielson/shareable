#shareable

A Laravel 4 package to make it easy to add social sharing buttons.

[![Build Status](https://travis-ci.org/RyanNielson/shareable.png?branch=master)](https://travis-ci.org/RyanNielson/shareable.png)
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

TODO