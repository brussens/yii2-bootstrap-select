<?php
/**
 * Bootstrap-select yii2 widget asset bundle.
 * Class Asset
 * @author Brusenskiy Dmitry <brussens@nativeweb.ru>
 * @since 1.0.0
 * @version 1.0.0
 * @link https://github.com/brussens/yii2-bootstrap-select <Repostory>
 * @copyright 2015 Brusenskiy Dmitry
 * @license http://opensource.org/licenses/MIT MIT
 * @package brussens\bootstrap\select
 */

namespace brussens\bootstrap\select;

use yii\web\AssetBundle;

class Asset extends AssetBundle
{
    /**
     * @var string
     */
    public $sourcePath = '@bower/bootstrap-select/dist';

    /**
     * @var array
     */
    public $js = [
        'js/bootstrap-select.min.js',
    ];

    /**
     * @var array
     */
    public $css = [
        'css/bootstrap-select.min.css',
    ];

    /**
     * @var array
     */
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}