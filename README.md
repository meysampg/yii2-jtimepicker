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

![screenshot_2016-10-04_14-58-40](https://cloud.githubusercontent.com/assets/1416085/19072535/94561672-8a42-11e6-95fd-62a3cb0702d8.png)

or
```php
<?= \meysampg\jtimepicker\JDatePicker::widget(); ?>
```
![screenshot_2016-10-04_14-59-02](https://cloud.githubusercontent.com/assets/1416085/19072533/94320f70-8a42-11e6-98ad-51bb82325a8d.png)

or
```php
<?= \meysampg\jtimepicker\JTimePicker::widget(); ?>
```
![screenshot_2016-10-04_14-58-02](https://cloud.githubusercontent.com/assets/1416085/19072534/9453a98c-8a42-11e6-8953-2074802b1826.png)