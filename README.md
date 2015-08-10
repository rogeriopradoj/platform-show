rogeriopradoj/platform-show
===========================

[![Author](http://img.shields.io/badge/author-@rogeriopradoj-blue.svg?style=flat-square)](https://github.com/rogeriopradoj)
[![Latest Version](https://img.shields.io/github/release/rogeriopradoj/platform-show.svg?style=flat-square)](https://github.com/rogeriopradoj/platform-show/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](http://rogeriopradoj.mit-license.org/)
[![Build Status](https://img.shields.io/travis/rogeriopradoj/platform-show/master.svg?style=flat-square)](https://travis-ci.org/rogeriopradoj/platform-show)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/rogeriopradoj/platform-show.svg?style=flat-square)](https://scrutinizer-ci.com/g/rogeriopradoj/platform-show/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/rogeriopradoj/platform-show.svg?style=flat-square)](https://scrutinizer-ci.com/g/rogeriopradoj/platform-show)
[![Total Downloads](https://img.shields.io/packagist/dt/rogeriopradoj/platform-show.svg?style=flat-square)](https://packagist.org/packages/rogeriopradoj/platform-show)
[![Dependency Status](https://www.versioneye.com/user/projects/546e2af29dcf6d41e7000989/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/546e2af29dcf6d41e7000989)


A easy way to get information of composer show --platform in a webpage.

## What is this?

It is a small library, built above [composer/composer](https://packagist.org/composer/composer),
that prints in a webpage the same information you could get in your terminal via
CLI command ```composer show --platform```.

## What is it good for?

Ideal for using when you have don't have access to [Composer CLI](https://getcomposer.org/)
in a server, but can run PHP scripts on it that will be processed with a web server.

Install
-------

Install `RogerioPradoJ\PlatformShow` using Composer.

```
composer require "rogeriopradoj/platform-show"
```

Usage
-----

```php
<?php

require '../vendor/autoload.php';

echo \RogerioPradoJ\PlatformShow::show();

```
