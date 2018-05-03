<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use yii\helpers\Console;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;

class MailerController extends Controller
{
	public function actionSend()
	{
		$subscribers = Subscriber::getSubscribers();
		$newsList = News::getNewsForSend();

		if (!empty($newsList)) {
			$result = Sender::run($subscribers, $newsList);

			if ($result) {
				News::changeNewsStatus();

				Console::output("\nEMails sent: {$result}");
			}
		}
	}
}
