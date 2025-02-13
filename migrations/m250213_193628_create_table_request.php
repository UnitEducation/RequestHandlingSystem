<?php

use yii\db\Migration;

/**
 * Class m250213_193628_create_table_request
 */
class m250213_193628_create_table_request extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('request', [
            'id'            => $this->primaryKey(),
            'name'          => $this->string()->notNull(),
            'email'         => $this->string()->notNull(),
            'status'        => "ENUM('Active', 'Resolved') NOT NULL DEFAULT 'Active'",
            'message'       => $this->text()->notNull(),
            'comment'       => $this->text(),
            'created_at'    => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at'    => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m250213_193628_create_table_request cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250213_193628_create_table_request cannot be reverted.\n";

        return false;
    }
    */
}
