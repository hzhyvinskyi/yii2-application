<?php

use yii\db\Migration;

/**
 * Handles the creation of table `news`.
 */
class m180604_143858_create_news_table extends Migration
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
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('news');
    }
}
