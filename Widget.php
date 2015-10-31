<?php
/**
 * Bootstrap-select yii2 widget.
 * Class Select
 * @author Brusenskiy Dmitry <brussens@nativeweb.ru>
 * @since 1.0.0
 * @version 1.0.0
 * @link https://github.com/brussens/yii2-bootstrap-select <Repostory>
 * @copyright 2015 Brusenskiy Dmitry
 * @license http://opensource.org/licenses/MIT MIT
 * @package brussens\bootstrap\select
 */

namespace brussens\bootstrap\select;

use Yii;
use yii\widgets\InputWidget;
use yii\helpers\Html;
use yii\helpers\Json;

class Widget extends InputWidget
{
    /**
     * Items for dropDownList
     * @var array
     */
    public $items = [];

    /**
     * Options of JavaScript plugin
     * @see https://silviomoreto.github.io/bootstrap-select/ Documentation of JavaScript plugin
     * @var array
     */
    public $clientOptions = [];

    /**
     * JS plugin selector class
     * @var string
     */
    public $cssClass = 'select-picker';

    /**
     * @throws \yii\base\InvalidConfigException
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @return string
     */
    public function run()
    {
        parent::run();
        $this->registerJs();
        return ($this->hasModel() ? Html::activeDropDownList($this->model, $this->attribute, $this->items, $this->options) : Html::dropDownList($this->name, $this->value, $this->items, $this->options));
    }

    /**
     * Registration JavaScript scripts.
     */
    private function registerJs()
    {
        $view = $this->getView();
        $options = !empty($this->clientOptions) ? Json::encode($this->clientOptions) : '';
        Html::addCssClass($this->options, $this->cssClass);
        Html::addCssClass($this->options, 'form-control');
        Asset::register($view);
        $view->registerJs("jQuery('.".$this->cssClass."').selectpicker(".$options.");");
    }
}