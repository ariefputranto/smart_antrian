<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%queue}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%service}}`
 * - `{{%user}}`
 */
class m190610_134645_create_queue_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%queue}}', [
            'id' => $this->primaryKey(),
            'service_id' => $this->integer()->notNull(),
            'user_id' => $this->integer()->notNull(),
            'number' => $this->integer()->notNull(),
            'is_hold' => $this->boolean(),
            'is_called' => $this->boolean(),
            'date' => $this->date()->notNull(),
            'created_at' => $this->dateTime(),
        ]);

        // creates index for column `service_id`
        $this->createIndex(
            '{{%idx-queue-service_id}}',
            '{{%queue}}',
            'service_id'
        );

        // add foreign key for table `{{%service}}`
        $this->addForeignKey(
            '{{%fk-queue-service_id}}',
            '{{%queue}}',
            'service_id',
            '{{%service}}',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-queue-user_id}}',
            '{{%queue}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-queue-user_id}}',
            '{{%queue}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%service}}`
        $this->dropForeignKey(
            '{{%fk-queue-service_id}}',
            '{{%queue}}'
        );

        // drops index for column `service_id`
        $this->dropIndex(
            '{{%idx-queue-service_id}}',
            '{{%queue}}'
        );

        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-queue-user_id}}',
            '{{%queue}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-queue-user_id}}',
            '{{%queue}}'
        );

        $this->dropTable('{{%queue}}');
    }
}
