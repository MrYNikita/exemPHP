<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "task".
 *
 * @property int $id
 * @property int|null $name
 * @property string|null $dateBegin
 * @property string|null $dateFinish
 * @property int|null $idProject
 */
class Task extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'task';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'idProject'], 'integer'],
            [['dateBegin', 'dateFinish'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'dateBegin' => 'Date Begin',
            'dateFinish' => 'Date Finish',
            'idProject' => 'Id Project',
        ];
    }
}
