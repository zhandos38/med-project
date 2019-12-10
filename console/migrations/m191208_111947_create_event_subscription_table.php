<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%event_subscription}}`.
 */
class m191208_111947_create_event_subscription_table extends Migration
{
    public $tableName = '{{%event_subscription}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'event_id' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->tinyInteger(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);

        $this->addForeignKey(
            'fk-event-subscription-event_id-event-id',
            $this->tableName,
            'event_id',
            'event',
            'id',
            'SET NULL'
        );

        $this->addForeignKey(
            'fk-event-subscription-user_id-user-id',
            $this->tableName,
            'user_id',
            'user',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-event-subscription-event_id-event-id', $this->tableName);
        $this->dropForeignKey('fk-event-subscription-user_id-user-id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
