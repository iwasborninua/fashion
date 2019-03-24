<?php

use yii\db\Migration;

/**
 * Class m190324_115050_create_table_PhotoAlbum
 */
class m190324_115050_create_table_PhotoAlbum extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('PhotoAlbum', [
           'id' => $this->primaryKey(),
           'assets' => $this->string(),
            'isSnapAlbum' => $this->boolean()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('PhotoAlbum');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_115050_create_table_PhotoAlbum cannot be reverted.\n";

        return false;
    }
    */
}
