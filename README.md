What is the SetlistFM PHP library?
==================================
[![Latest Stable Version](https://poser.pugx.org/core23/setlistfm-api/v/stable)](https://packagist.org/packages/core23/setlistfm-api)
[![Latest Unstable Version](https://poser.pugx.org/core23/setlistfm-api/v/unstable)](https://packagist.org/packages/core23/setlistfm-api)
[![License](https://poser.pugx.org/core23/setlistfm-api/license)](https://packagist.org/packages/core23/setlistfm-api)

[![Build Status](https://travis-ci.org/core23/setlistfm-php-api.svg)](http://travis-ci.org/core23/setlistfm-php-api)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/core23/setlistfm-php-api/badges/quality-score.png)](https://scrutinizer-ci.com/g/core23/setlistfm-php-api/)
[![Code Climate](https://codeclimate.com/github/core23/setlistfm-php-api/badges/gpa.svg)](https://codeclimate.com/github/core23/setlistfm-php-api)
[![Coverage Status](https://coveralls.io/repos/core23/setlistfm-php-api/badge.svg)](https://coveralls.io/r/core23/setlistfm-php-api)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/51aa4b42-d229-4994-bb3a-156da22a1375/mini.png)](https://insight.sensiolabs.com/projects/51aa4b42-d229-4994-bb3a-156da22a1375)

[![Donate to this project using Flattr](https://img.shields.io/badge/flattr-donate-yellow.svg)](https://flattr.com/profile/core23)
[![Donate to this project using PayPal](https://img.shields.io/badge/paypal-donate-yellow.svg)](https://paypal.me/gripp)

This library provides a wrapper for using the [Setlist.fm API] inside PHP.

### Installation

```
php composer.phar require core23/setlistfm-api

php composer.phar require guzzlehttp/guzzle # if you want to use Guzzle native
php composer.phar require php-http/guzzle6-adapter # if you want to use HTTPlug with Guzzle
```

### Usage
```php
    // Create Guzzle connection
    $connection = new \Core23\SetlistFm\Connection\GuzzleConnection(API_KEY, SHARED_SECRET);

    $artistApi = new \Core23\SetlistFm\Service\ArtistService($connection);
    $artists = $artistApi->search(array(
        'artistName' => 'Slipknot'
    ));
```


[Setlist.fm API]: https://api.setlist.fm
