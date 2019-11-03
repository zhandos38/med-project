<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tutorials}}`.
 */
class m191103_143548_create_tutorial_table extends Migration
{
    public $tableName = '{{%tutorial}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'description' => $this->string(),
            'image' => $this->string(),
            'file' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
