<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\models\Employee;

class AccountingController extends Controller
{
	public function actionSalary()
	{
		$employees = Employee::getAllData();

		$result = Employee::salarySender($employees);

		if ($result) {
			$salaryData = Yii::$app->formatter->format('now', 'date') .
				' Начисление зарплаты сотрудникам за прошлый месяц' . PHP_EOL;

			file_put_contents(__DIR__ . '/../../frontend/web/log.txt', $salaryData, FILE_APPEND);
		}
	}
}
