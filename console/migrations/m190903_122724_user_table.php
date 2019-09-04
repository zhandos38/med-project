<?php

use yii\db\Migration;

/**
 * Class m190903_122724_user_table
 */
class m190903_122724_user_table extends Migration
{
    public $tableName = '{{user}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        public
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190903_122724_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190903_122724_user_table cannot be reverted.\n";

        return false;
    }
    */
}
