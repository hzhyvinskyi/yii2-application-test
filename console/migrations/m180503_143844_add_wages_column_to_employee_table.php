<?php

use yii\db\Migration;

/**
 * Adding column `wages` to table `employee`
 */
class m180503_143844_add_wages_column_to_employee_table extends Migration
{
    public function safeUp()
    {
        $this->addColumn('employee', 'Оклад', $this->integer());
    }

    public function safeDown()
    {
        $this->dropColumn('employee', 'Оклад');
    }
}
