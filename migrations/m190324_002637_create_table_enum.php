<?php

use yii\db\Migration;

/**
 * Class m190324_002637_create_table_enum
 */
class m190324_002637_create_table_enum extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('enum', [
            'id' => $this->primaryKey(),
            'name_rus' => $this->char(200),
            'name_eng' => $this->char(200),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('enum');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190324_002637_create_table_enum cannot be reverted.\n";

        return false;
    }
    */
}
