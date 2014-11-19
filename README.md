rogeriopradoj/platform-show
===========================

[![Latest Version](https://img.shields.io/github/release/rogeriopradoj/platform-show.svg?style=flat-square)](https://github.com/rogeriopradoj/platform-show/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/rogeriopradoj/platform-show/master.svg?style=flat-square)](https://travis-ci.org/rogeriopradoj/platform-show)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/rogeriopradoj/platform-show.svg?style=flat-square)](https://scrutinizer-ci.com/g/rogeriopradoj/platform-show/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/rogeriopradoj/platform-show.svg?style=flat-square)](https://scrutinizer-ci.com/g/rogeriopradoj/platform-show)
[![Total Downloads](https://img.shields.io/packagist/dt/rogeriopradoj/platform-show.svg?style=flat-square)](https://packagist.org/packages/rogeriopradoj/platform-show)

A easy way to get information of composer show --platform in a webpage.

Install
-------

Install `RogerioPradoJ\PlatformShow` using Composer.

```
composer require "composer/composer *@dev"
composer require rogeriopradoj/platform-show
```

Usage
-----------

```php
use RogerioPradoJ\PlatformShow;

$shower = new PlatformShow();

echo $shower->show(); // or print_r($shower->showArray());

```
