<?php

namespace meysampg\jtimepicker;

use yii\web\AssetBundle;

class JTimePickerAsset extends AssetBundle
{
	public $sourcePath = '@bower/jqueryui-jtimepicker-addon';

	public $js = [
		YII_ENV_DEV ? 'jquery-ui-timepicker-cc.js' : 'jquery-ui-timepicker-cc.min.js',
		YII_ENV_DEV ? 'jquery-ui-timepicker-addon.js' : 'jquery-ui-timepicker-addon.min.js',
		'datepicker-fa-IR.js'
	];

	public $depends = [
        'yii\jui\JuiAsset',
	];
}
