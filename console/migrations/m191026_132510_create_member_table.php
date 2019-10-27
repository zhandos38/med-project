<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%member}}`.
 */
class m191026_132510_create_member_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%member}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(),
            'description' => $this->text(),
            'email' => $this->string(),
            'image' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%member}}');
    }
}
