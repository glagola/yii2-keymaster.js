<?php
namespace glagola\keymaster;

use \yii\web\AssetBundle;

class KeymasterJsAsset extends AssetBundle {
    public $sourcePath = '@bower/keymaster';

    public $js = [
        'keymaster.js',
    ];
}
