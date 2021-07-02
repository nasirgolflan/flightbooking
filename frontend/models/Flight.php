<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "flight".
 *
 * @property int $id
 * @property string $name
 * @property string $number
 * @property int $seats
 */
class Flight extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'flight';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number', 'seats'], 'required'],
            [['seats'], 'integer'],
            [['name', 'number'], 'string', 'max' => 50],
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
            'number' => 'Number',
            'seats' => 'Seats',
        ];
    }
}
