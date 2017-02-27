<?php
namespace app\modules\user\models;

use yii\web\IdentityInterface;
use yii\db\ActiveRecord;
/**
 * This is the model class for table "users_messages_data".
 *
 * @property int $id
 * @property string $guest_name
 * @property string $guest_email
 * @property string $message
 * @property string $date_added
 */
class Login extends ActiveRecord implements IdentityInterface
{
    private $_user = false;

    public static function tableName()
    {
        return 'users';
    }

    public function rules()
    {
        return [
            [['login', 'password'], 'required'],
            [['login'], 'string', 'max' => 64],
            [['password'], 'validatePassword'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    /**
     * Validates the password.
     * This method serves as the inline validation for password.
     *
     * @param string $attribute the attribute currently being validated
     * @param array  $params    the additional name-value pairs given in the rule
     */
    public function validatePassword($attribute, $params=null){
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user) {
                $this->addError($attribute, 'Неверный логин или пароль.');
            }
        }
    }

    /**
     * Finds user by [[username]] or [[email]].
     *
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = self::findOne(['login' => $this->login]);
            if($this->_user[attributes] === null) {
                self::findOne(['email' => $this->login]);
            }
        }

        return $this->_user;
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id)
    {
        return self::findOne($id);
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }
}

