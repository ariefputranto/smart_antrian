<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m190610_134207_create_service_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%service}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull()->unique(),
            'code' => $this->string(10)->notNull()->unique(),
            'lat' => $this->double()->notNull(),
            'lng' => $this->double()->notNull(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%service}}');
    }
}
