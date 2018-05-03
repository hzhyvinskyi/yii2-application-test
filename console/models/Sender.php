<?php

namespace console\models;

use Yii;

class Sender {
	public static function run( array $subscribers, array $newsList)
	{
		foreach ($subscribers as $subscriber) {
			$result = Yii::$app->mailer->compose('/mailer/newslist', [
				'newsList' => $newsList,
			])
				->setFrom('hzhyvinskyi@gmail.com')
				->setTo($subscriber['email'])
				->setSubject('Testing console app')
				->send();
		}

		return $result;
	}
}
