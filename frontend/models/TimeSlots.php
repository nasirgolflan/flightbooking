<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "time_slots".
 *
 * @property int $id
 * @property int $flight_id
 * @property string $time_slot
 * @property string $date
 *
 * @property Flight $flight
 */
class TimeSlots extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'time_slots';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flight_id', 'time_slot', 'date'], 'required'],
            [['flight_id'], 'integer'],
            [['time_slot', 'date'], 'safe'],
            [['flight_id'], 'exist', 'skipOnError' => true, 'targetClass' => Flight::className(), 'targetAttribute' => ['flight_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'flight_id' => 'Flight ID',
            'time_slot' => 'Time Slot',
            'date' => 'Date',
        ];
    }

    /**
     * Gets query for [[Flight]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFlight()
    {
        return $this->hasOne(Flight::className(), ['id' => 'flight_id']);
    }

    // public function getSeats()
    // {
    //     return $this->hasOne(Flight::className(), ['id' => 'flight_id']);
    // }
}
