<?php

namespace app\modules\main\models;

use Yii;

/**
 * This is the model class for table "users_messages_data".
 *
 * @property int $id
 * @property string $guest_name
 * @property string $guest_email
 * @property string $message
 * @property string $date_added
 */
class UsersMessagesData extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users_messages_data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['guest_name', 'guest_email', 'message'], 'required'],
            [['date_added'], 'safe'],
            [['guest_name'], 'string', 'max' => 64],
            [['guest_email'], 'string', 'max' => 100],
            [['message'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'guest_name' => 'Guest Name',
            'guest_email' => 'Guest Email',
            'message' => 'Message',
            'date_added' => 'Date Added',
        ];
    }
}
