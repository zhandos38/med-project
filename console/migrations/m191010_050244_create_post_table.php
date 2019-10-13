<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%news}}`.
 */
class m191010_050244_create_post_table extends Migration
{
    public $tableName = '{{%post}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'content' => $this->text(),
            'views' => $this->integer(),
            'user_id' => $this->integer(),
            'type_id' => $this->integer(2),
            'image' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk-news-user_id-user-id',
            $this->tableName,
            'user_id',
            \common\models\User::tableName(),
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-news-user_id-user-id', $this->tableName);
        $this->dropTable($this->tableName);
    }
}
