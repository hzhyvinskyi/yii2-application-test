<?php

namespace frontend\models;

use Yii;

class News
{
	/**
	 * Returns amount of records in table 'news'
	 * @return array|false
	 * @throws \yii\db\Exception
	 */
	public static function getNewsCount()
	{
		$sql = "SELECT COUNT(*) FROM news";

		return Yii::$app->db->createCommand($sql)->queryScalar();
	}
}
