<?php

use yii\db\Migration;

/**
 * Class m190324_003618_create_table_ModelInfo
 */
class m190324_003618_create_table_ModelInfo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('ModelInfo', [
            'id' => $this->primaryKey(),
            'userId' => $this->char(200),
            'height' => $this->integer(),
            'clothingSizeRus' => $this->integer(),
            'shoeSizeRus' => $this->float(),
            'chest' => $this->integer(),
            'waist' => $this->integer(),
            'hip' => $this->integer(),
            'hairColor' => $this->integer(),
            'eyeColor' => $this->integer(),
            'hasPassport' => $this->boolean(),
            'photoGenres' => $this->string(),
            'createdAt' => $this->string(),
            'updatedAt' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('ModelInfo');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_003618_create_table_ModelInfo cannot be reverted.\n";

        return false;
    }
    */
}
