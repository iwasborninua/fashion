<?php

use yii\db\Migration;

/**
 * Class m190324_113938_create_table_ChatRoom
 */
class m190324_113938_create_table_ChatRoom extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ChatRoom', [
            'id' => $this->primaryKey(),
            'userId' => $this->integer(),
            'user' => $this->char(200),
            'lastMessageId' => $this->integer(),
            'lastMessage' => $this->string(),
            'unreadCount' => $this->integer(),
            'allMessagesCount' => $this->integer(),
            'created' => $this->char(200),
            'updated' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ChatRoom');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_113938_create_table_ChatRoom cannot be reverted.\n";

        return false;
    }
    */
}
