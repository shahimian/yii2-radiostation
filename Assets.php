<?php
/**
 * Created by PhpStorm.
 * User: Shahimian
 * Date: 7/7/2016
 * Time: 9:26 PM
 */

namespace shahimian\radiostation;


use yii\web\AssetBundle;

class Assets extends AssetBundle
{

    public $sourcePath = "@vendor/shahimian/yii2-radiostation/assets";

    public $css = [
        'styles.css',
    ];

}
