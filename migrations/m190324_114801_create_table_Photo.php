<?php

use yii\db\Migration;

/**
 * Class m190324_114801_create_table_Photo
 */
class m190324_114801_create_table_Photo extends Migration
{
    public function safeUp()
    {
        $this->createTable('photo', [
            'id' => $this->primaryKey(),
            'position' => $this->integer(),
            'url' => $this->string(),
            'size' => $this->integer(),
            'mimetype' => $this->string(),
            'albumId' => $this->integer(),
            'album' => $this->string(),
            'snapAlbumId' => $this->integer(),
            'snapAlbum' => $this->string(),
            'urlThumbSmall' => $this->string(),
            'urlThumbMedium' => $this->string(),
            'urlThumbLarge' => $this->string(),
            'created' => $this->string(),
            'updated' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('photo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_114801_create_table_Photo cannot be reverted.\n";

        return false;
    }
    */
}
