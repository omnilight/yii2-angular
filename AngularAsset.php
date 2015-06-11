<?php

namespace omnilight\assets;

use yii\web\AssetBundle;
use yii\web\View;


/**
 * Class AngularAsset
 */
class AngularAsset extends AssetBundle
{
    public $sourcePath = '@bower/angular/';

    public $js = [
        'angular.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
} 