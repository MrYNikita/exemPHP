<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "performance".
 *
 * @property int $id
 * @property int|null $idTask
 * @property int|null $idEmployee
 */
class Performance extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'performance';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idTask', 'idEmployee'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idTask' => 'Id Task',
            'idEmployee' => 'Id Employee',
        ];
    }
}
