<?php

use yii\db\Migration;

/**
 * Dropping column `city` from table `employee`.
 */
class m180503_151204_drop_city_column_from_employee_table extends Migration
{
    public function up()
    {
    	$this->dropColumn('employee', 'Город');
    }

    public function down()
    {
		$this->addColumn('employee', 'Город', $this->string(50));

	}
}
