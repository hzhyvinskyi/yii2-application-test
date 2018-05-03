<?php

use yii\db\Migration;

class m180503_140228_create_employee_table extends Migration
{
    public function safeUp()
    {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
			'Фамилия' => $this->string(50),
			'Имя' => $this->string(50),
			'Отчество' => $this->string(50),
			'Дата_рождения' => $this->date(),
			'Город' => $this->string(50),
			'Дата_начала_работы' => $this->timestamp(),
			'Стаж_работы' => $this->tinyInteger(2),
			'Должность' => $this->string(50),
			'Номер_отдела' => $this->integer(8),
			'Идентификационный_код' => $this->integer(),
			'Email' => $this->string(50)->unique(),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('employee');
    }
}
