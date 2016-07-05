<?php

namespace meysampg\jtimepicker;

use Yii;
use yii\base\InvalidParamException;
use yii\helpers\FormatConverter;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\jui\DatePicker as BaseDatePicker;
use meysampg\jtimepicker\JTimePickerAsset;

class JDateTimePicker extends BaseDatePicker
{
	public function run()
	{
		echo $this->renderWidget() . "\n";

        $containerID = $this->inline ? $this->containerOptions['id'] : $this->options['id'];
        $language = $this->language ? $this->language : Yii::$app->language;

        if (strncmp($this->dateFormat, 'php:', 4) === 0) {
            $this->clientOptions['dateFormat'] = FormatConverter::convertDatePhpToJui(substr($this->dateFormat, 4));
        } else {
            $this->clientOptions['dateFormat'] = FormatConverter::convertDateIcuToJui($this->dateFormat, 'date', $language);
        }

        if ($language !== 'en-US') {
            $view = $this->getView();
            $options = Json::htmlEncode($this->clientOptions);
            $language = Html::encode($language);
            $view->registerJs("$('#{$containerID}').datetimepicker($.extend({}, $.datepicker.regional['{$language}'], $options));");
        } else {
            $this->registerClientOptions('datetimepicker', $containerID);
        }

        $this->registerClientEvents('datetimepicker', $containerID);
		JTimePickerAsset::register($view);
	}
}
