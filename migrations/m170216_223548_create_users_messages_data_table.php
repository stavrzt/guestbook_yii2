<?php

use yii\db\Migration;

/**
 * Handles the creation of table `users_messages_data`.
 */
class m170216_223548_create_users_messages_data_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('users_messages_data', [
            'id' => $this->primaryKey(),
            'guest_name' => $this->string(64)->notNull(),
            'guest_email' => $this->string(100)->notNull(),
            'message' => $this->string(1000)->notNull(),
            'date_added' => $this->timestamp(),
        ], $tableOptions);

        $this->insert('users_messages_data', [
            'guest_name' => 'YA',
            'guest_email' => 'ya@mail.ru',
            'message' => 'xxxxxxxxx',
        ]);
        $this->insert('users_messages_data', [
            'guest_name' => 'TT',
            'guest_email' => 'TT@mail.ru',
            'message' => 'TTTTTTTTTTTTTTT',
        ]);
        $this->insert('users_messages_data', [
            'guest_name' => 'NN',
            'guest_email' => 'NN@mail.ru',
            'message' => 'NNNNNNNN',
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('users_messages_data');
    }
}
