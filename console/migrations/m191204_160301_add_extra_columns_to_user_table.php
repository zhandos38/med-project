<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m191204_160301_add_extra_columns_to_user_table extends Migration
{
    public $tableName = '{{%user}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'workplace', $this->string());
        $this->addColumn($this->tableName, 'speciality', $this->string());
        $this->addColumn($this->tableName, 'degree', $this->string());
        $this->addColumn($this->tableName, 'description', $this->string());
        $this->addColumn($this->tableName, 'city', $this->integer());
        $this->addColumn($this->tableName, 'birthday', $this->integer());
        $this->addColumn($this->tableName, 'position', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'workplace');
        $this->dropColumn($this->tableName, 'speciality');
        $this->dropColumn($this->tableName, 'degree');
        $this->dropColumn($this->tableName, 'description');
        $this->dropColumn($this->tableName, 'city');
        $this->dropColumn($this->tableName, 'birthday');
        $this->dropColumn($this->tableName, 'position');
    }
}
