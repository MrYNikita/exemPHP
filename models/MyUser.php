<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "myUser".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password
 * @property string|null $nameFirst
 * @property string|null $nameLast
 */
class MyUser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myUser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'password', 'nameFirst', 'nameLast'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'nameFirst' => 'Name First',
            'nameLast' => 'Name Last',
        ];
    }
}
