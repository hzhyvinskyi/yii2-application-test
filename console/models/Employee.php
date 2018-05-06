<?php

namespace console\models;

use Yii;

class Employee
{
	public static function getAllData()
	{
		$sql = "SELECT * FROM employee";

		return Yii::$app->db->createCommand($sql)->queryAll();
	}

	/**
	 * Send salary information message to user
	 * @param array $employees
	 * @return bool
	 */
	public static function salarySender(array $employees)
	{
		foreach ($employees as $employee) {
			Yii::$app->mailer->compose('/employee/salary_accounting', [
				'employee' => $employee,
			])
				->setFrom('hzhyvinskyi@gmail.com')
				->setTo($employee['Email'])
				->setSubject('Ведомости о зарплате')
				->send();
		}
	}
}
