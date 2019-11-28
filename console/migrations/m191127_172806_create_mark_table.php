<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mark}}`.
 */
class m191127_172806_create_mark_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mark}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'address' => $this->string(),
            'building_category_id' => $this->tinyint(),
            'floors' => $this->integer(),
            'built_at' => $this->integer(),
            'building_type_id' => $this->tinyint(),
            'destination' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mark}}');
    }
}
