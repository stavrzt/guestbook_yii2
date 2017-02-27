<?php

namespace app\modules\main\models;


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
    public $mycaptcha;

    public static function tableName()
    {
        return 'users_messages_data';
    }

    public function rules()
    {
        return [
            [['message'], 'string', 'max' => 1000],
            ['mycaptcha', 'captcha', 'captchaAction' => 'main/default/captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'message' => 'Message',
            'date_added' => 'Date Added',
        ];
    }
}
