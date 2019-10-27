<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event}}`.
 */
class m191024_152750_create_event_table extends Migration
{
    public $tableName = '{{%event}}';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->text(),
            'where' => $this->string(),
            'start_at' => $this->integer(),
            'finish_at' => $this->integer(),
            'place' => $this->string(),
            'content' => $this->text(),
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
