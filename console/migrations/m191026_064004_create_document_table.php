<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%document}}`.
 */
class m191026_064004_create_document_table extends Migration
{
    public $tableName = '{{%document}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'document' => $this->string(),
            'type' => $this->string(),
            'size' => $this->string(),
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
