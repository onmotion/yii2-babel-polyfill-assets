<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-babel-polyfill-assets
 */

namespace onmotion\babelpolyfill;

use yii\web\AssetBundle;

/**
 * Class VueAsset
 * @package onmotion\babelpolyfill
 */
class BabelPolyfillAsset extends AssetBundle
{
    public $sourcePath = '@npm/babel-polyfill/dist';

    public $js = [
    	YII_ENV_DEV ? 'polyfill.js' : 'polyfill.min.js'
    ];
}
