<?php

namespace common\components;

use Yii;

/**
 * Class StringHelper
 * @package frontend\components
 *
 * Limits the output of a string
 *
 * @author Roman Hzhyvinskyi <hzhyvinskyi@gmail.com>
 */
class StringHelper
{
	private $limit;
	private $count;

	public function __construct()
	{
		$this->limit = Yii::$app->params['shortTextLimit'];
		$this->count = Yii::$app->params['textLimitByWords'];
	}

	/**
	 * Cuts a string by the space without breaking the words
	 * @param $str
	 * @param null $limit
	 * @return bool|string
	 */
	public function getShort($str, $limit = null)
	{
		if ($limit === null)
			$limit = $this->limit;

		if (strlen($str) <= $limit)
			return $str;

		$temp = substr($str, 0, $limit);

		return substr($temp, 0, strrpos($temp, ' ')) . '...';
	}

	/**
	 * Cuts a string for a given numbers of the words
	 * @param $str
	 * @param null $count
	 * @return string
	 */
	public function getStrByWordCount($str, $count = null)
	{
		if ($count === null)
			$count = $this->count;

		$array = explode(' ', $str);

		$out = array_slice($array, 0, $count);

		return implode(' ', $out);
	}
}
