<?php

namespace console\models;

use Yii;

class News
{
	const STATUS_NOT_SENT = 1;
	const STATUS_SENT = 2;

	public static function getNewsForSend()
	{
		$sql = "SELECT * FROM news WHERE status = " . self::STATUS_NOT_SENT;

		$result = Yii::$app->db->createCommand($sql)->queryAll();

		return self::prepareNews($result);
	}

	private static function prepareNews($result)
	{
		if (!empty($result) && is_array($result)) {
			foreach ($result as &$item) {
				$item['content'] = Yii::$app->stringHelper->getShort($item['content']);
			}
		}

		return $result;
	}

	public static function changeNewsStatus()
	{
		$sql = "UPDATE news SET status = " . self::STATUS_SENT . " WHERE status = " . self::STATUS_NOT_SENT;

		Yii::$app->db->createCommand($sql)->execute();
	}
}
