<?php

use yii\db\Migration;

class m160703_052307_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(65)->notNull(),
            'last_name' => $this->string(65)->notNull(),

            //idk if using unique here would work, haven't googled it.
            'email' => $this->string(65)->unique()->notNull(),
            'password_hash' => $this->string(200)->notNull(),
            'updated_at' => $this->timestamp()->defaultValue(null),
            'created_at' => $this->dateTime() . ' DEFAULT NOW() ',
        ]);
    }

    public function down()
    {
        echo "m160703_052307_user_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
