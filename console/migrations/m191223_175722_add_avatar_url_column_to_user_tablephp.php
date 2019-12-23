<?php

use yii\db\Migration;

/**
 * Class m191223_175722_add_avatar_url_column_to_user_tablephp
 */
class m191223_175722_add_avatar_url_column_to_user_tablephp extends Migration
{
    public $tableName = '{{user}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'avatar_url', $this->string()->after('address'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'avatar_url');
    }
}
