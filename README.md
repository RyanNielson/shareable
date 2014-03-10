#shareable

A Laravel 4 package to make it easy to add social sharing buttons to your application.

This Laravel 4 package provides helpers for easily adding social sharing buttons to your views. This package includes support for:

- Facebook
- Google Plus
- Twitter


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

Render all share buttons, specified in the config.php (default all buttons), within a unordered list:

    {{ Shareable::all() }}

### Facebook
[developers.facebook.com/docs/plugins/share-button](https://developers.facebook.com/docs/plugins/share-button/)

    {{ Shareable::facebook($options = array()) }}

Option     | Type       | Default        | Possible Options
---------- | ---------- | ----------     | ----------
url        | string     | ''             | 
width      | integer    | 100            | 
type       | string     | 'button_count' | 'box_count', 'button_count', 'button', 'icon_link', 'icon', 'link'


### Google Plus 
[developers.google.com/+/web/share](https://developers.google.com/+/web/share/)

    {{ Shareable::googlePlus($options = array()) }}

Option      | Type       | Default        | Possible Options
----------  | ---------- | ----------     | ----------
url         | string     | ''             | 
size        | string     | 'medium'       | 'small', 'medium', 'large'
lang        | string     | 'en-US'        | See [developers.google.com/+/web/share/](https://developers.google.com/+/web/share/)
width       | integer    | null           | 
annotation  | string     | 'bubble'       | 'none', 'bubble', vertical-bubble', 'inline'


### Twitter
[about.twitter.com/resources/buttons#tweet](https://about.twitter.com/resources/buttons#tweet)

    {{ Shareable::twitter($options = array()) }}

Option     | Type       | Default    | Possible Options
---------- | ---------- | ---------- | ----------
url        | string     | ''         | 
text       | string     | ''         | 
count      | boolean    | true       | 
via        | string     | ''         | 
recommend  | string     | ''         | 
hashtags   | string     | ''         | 
size       | string     | ''         | 
lang       | string     | 'en'       | 


## View and Configuration Changes

Like most Laravel packages, you can edit the configuration and views for this package by running a few commands to put the files into your app's project directory.

Edit configuration: `php artisan config:publish ryannielson/shareable`

Edit views: `php artisan view:publish ryannielson/shareable`

