#Bootstrap select widget for Yii2

##Install
Either run
```
php composer.phar require --prefer-dist brussens/yii2-bootstrap-select "*"
```

or add

```
"brussens/yii2-bootstrap-select": "*"
```

to the require section of your `composer.json` file.

##Options

* **clientOptions** - options of plugin. See https://silviomoreto.github.io/bootstrap-select/

##Usage
```php
use brussens\bootstrap\select\Widget as Select;
echo $form->field($model, 'subject')->widget(Select::className(), [
                            'options' => ['data-live-search' => 'true'],
                            'items' => [
                                '1' => 'Item 1',
                                '2' => 'Item 2',
                                '3' => 'Item 3',
                                '4' => 'Item 4',
                                '5' => 'Item 5',
                            ]
                        ]);
```
##Profit