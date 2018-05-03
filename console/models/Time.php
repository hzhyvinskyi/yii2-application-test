<?php

namespace console\models;

use Yii;

class Time
{
	public static function getTime()
	{
		Yii::$app->formatter->timeZone = 'Europe/Kiev';

		return Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd HH:mm:ss') . PHP_EOL;
	}
}
