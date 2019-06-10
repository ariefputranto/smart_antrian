<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property int $identity_type_id
 * @property string $identity_numbers
 * @property string $name
 * @property string $birthday
 * @property string $address
 * @property string $phone
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $verification_token
 *
 * @property Queue[] $queues
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['identity_type_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['birthday'], 'safe'],
            [['username', 'auth_key', 'password_hash', 'email', 'created_at', 'updated_at'], 'required'],
            [['identity_numbers', 'name', 'address', 'phone', 'username', 'password_hash', 'password_reset_token', 'email', 'verification_token'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['password_reset_token'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'identity_type_id' => 'Identity Type ID',
            'identity_numbers' => 'Identity Numbers',
            'name' => 'Name',
            'birthday' => 'Birthday',
            'address' => 'Address',
            'phone' => 'Phone',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'email' => 'Email',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'verification_token' => 'Verification Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQueues()
    {
        return $this->hasMany(Queue::className(), ['user_id' => 'id']);
    }
}
