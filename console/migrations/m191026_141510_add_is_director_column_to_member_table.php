<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%member}}`.
 */
class m191026_141510_add_is_director_column_to_member_table extends Migration
{
    public $tableName = '{{%member}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'is_director', $this->boolean()->after('image'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'is_director');
    }
}
