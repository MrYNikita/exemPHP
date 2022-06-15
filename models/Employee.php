<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property int $id
 * @property int|null $idRole
 * @property int|null $idUser
 * @property int|null $idProject
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idRole', 'idUser', 'idProject'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idRole' => 'Id Role',
            'idUser' => 'Id User',
            'idProject' => 'Id Project',
        ];
    }
}
