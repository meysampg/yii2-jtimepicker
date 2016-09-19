Yii2-JTimePicker
===========
Jalali Date-Time Picker based on jQueryUi DatePicker Extension For Yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist meysampg/yii2-jtimepicker "*"
```

or add

```
"meysampg/yii2-jtimepicker": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by

```php
<?= \meysampg\jtimepicker\JDateTimePicker::widget(); ?>
```
for a combined Time & Date picker or
```php
<?= \meysampg\jtimepicker\JDatePicker::widget(); ?>
```
for a single date picker.