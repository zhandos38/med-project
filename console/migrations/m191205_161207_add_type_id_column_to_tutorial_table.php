<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%tutorial}}`.
 */
class m191205_161207_add_type_id_column_to_tutorial_table extends Migration
{
    public $tableName = '{{%tutorial}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'type_id', $this->integer()->after('file'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'type_id');
    }
}
