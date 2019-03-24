<?php

use yii\db\Migration;

/**
 * Class m190324_114600_create_table_ChatMessage
 */
class m190324_114600_create_table_ChatMessage extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ChatMessage', [
            'id' => $this->primaryKey(),
            'fromUserId' => $this->integer(),
            'fromUser' => $this->char(200),
            'toUserId' => $this->integer(),
            'toUser' => $this->string(),
            'isRead' => $this->boolean(),
            'text' => $this->string(),
            'date' => $this->date(),
            'created' => $this->char(200),
            'updated' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ChatMessage');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_114600_create_table_ChatMessage cannot be reverted.\n";

        return false;
    }
    */
}
