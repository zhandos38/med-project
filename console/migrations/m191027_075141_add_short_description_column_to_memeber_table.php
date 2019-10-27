<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%memeber}}`.
 */
class m191027_075141_add_short_description_column_to_memeber_table extends Migration
{
    public $tableName = '{{%member}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'short_description', $this->string()->after('full_name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'short_description');
    }
}
