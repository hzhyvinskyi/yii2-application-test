<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\models\Employee;

/**
 * Mailing information about salary
 */
class AccountingController extends Controller
{
	/**
	 * Get employee's data, send message and log information for statistics
	 */
	public function actionSalary()
	{
		$employees = Employee::getAllData();

		$result = Employee::salarySender($employees);

		$salaryData = Yii::$app->formatter->format('now', 'date') .
			' Начисление зарплаты сотрудникам за прошлый месяц' . PHP_EOL;

		file_put_contents(Yii::$app->params['logFilePath'], $salaryData, FILE_APPEND);
	}
}
