<?php

use yii\db\Migration;

/**
 * Class m211122_175219_create_tables
 */
class m211122_175219_create_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m211122_175219_create_tables cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('people', [
            'id' => $this->primaryKey(),
            'firstName' => $this->string()->notNull(),
            'lastName' => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m211122_175219_create_tables cannot be reverted.\n";
        $this->dropTable('people');

        return false;
    }
}
