<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;

class NewsController extends Controller
{
	/**
	 * Gets amount of records in the table 'news' (thanks to model)
	 * and generates View
	 * @return string
	 */
	public function actionBase()
	{
		$amount = News::getNewsCount();

		return $this->render('base', [
			'amount' => $amount,
		]);
	}
}
