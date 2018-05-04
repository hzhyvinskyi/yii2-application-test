<?php /** @var $employee[] array */ ?>
<p>
	Уважаемый
	<?php echo $employee['Имя'] . ' ' . $employee['Фамилия'] . '! ';
	echo Yii::$app->formatter->format('now', 'date');?>
	Вам была начислена зарплата в размере $<?=$employee['Оклад']?>.
</p>