<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%presentation}}`.
 */
class m191110_102636_create_presentation_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%presentation}}', [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'file' => $this->string(),
            'author' => $this->string(),
            'views' => $this->integer(),
            'year' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%presentation}}');
    }
}
