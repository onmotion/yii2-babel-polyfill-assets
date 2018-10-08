Babel polyfill assets for Yii2 app
======================================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Run

```
composer require onmotion/yii2-babel-polyfill-assets "*"
```

or add

```
"onmotion/yii2-babel-polyfill-assets": "*"
```

to the require section of your `composer.json` file.


Usage
-----

```php
<?php \onmotion\babelpolyfill\BabelPolyfillAsset::register($this); ?>
```
