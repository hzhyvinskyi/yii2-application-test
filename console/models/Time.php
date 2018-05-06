<?php

namespace console\models;

use Yii;

class Time
{
	/**
	 * Gets formatted time via formatter component
	 * @return string
	 * @throws \yii\base\InvalidConfigException
	 */
	public static function getTime()
	{
		return Yii::$app->formatter->asDatetime('now', 'yyyy-MM-dd HH:mm:ss') . PHP_EOL;
	}
}
