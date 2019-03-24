<?php

use yii\db\Migration;

/**
 * Class m190324_003001_create_table_user
 */
class m190324_003001_create_table_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('enum', [
            'id' => $this->primaryKey(),
            'userType' => $this->char(200),
            'name' => $this->char(200),
            'surname' => $this->char(200),
            'sex' => $this->integer(),
            'email' => $this->char(200),
            'date_of_birth' => $this->char(200),
            'password' => $this->char(200),
            'isVerified' => $this->boolean(200),
            'employerInfo' => $this->string(200),
            'phone' => $this->char(200),
            'country' => $this->char(200),
            'city' => $this->char(200),
            'rating' => $this->float(),
            'avatarThumb' => $this->string(200),
            'avatar' => $this->string(200),
            'viewsCount' => $this->integer(),
            'dialogsCount' => $this->integer(),
            'reviewsCount' => $this->integer(),
            'albumId' => $this->string(200),
            'album' => $this->string(200),
            'created' => $this->string(200),
            'updated' => $this->string(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_003001_create_table_user cannot be reverted.\n";

        return false;
    }
    */
}
