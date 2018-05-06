<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180502_103638_create_news_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
			'title' => $this->string(255),
			'content' => $this->text(),
			'status' => $this->tinyInteger(2),
        ]);

        $this->createIndex('idx-post-status', 'news', 'status');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');

        $this->dropIndex('idx-post-status', 'news');
    }
}
