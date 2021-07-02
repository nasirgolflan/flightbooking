<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "booking".
 *
 * @property int $id
 * @property int $flight_id
 * @property int $customer_id
 * @property int $time_slots_is
 * @property int $active
 *
 * @property Customer $customer
 * @property TimeSlots $timeSlotsIs
 * @property Flight $flight
 */
class Booking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'booking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['flight_id', 'customer_id', 'time_slots_is'], 'required'],
            [['flight_id', 'customer_id', 'time_slots_is', 'active'], 'integer'],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customer::className(), 'targetAttribute' => ['customer_id' => 'id']],
            [['time_slots_is'], 'exist', 'skipOnError' => true, 'targetClass' => TimeSlots::className(), 'targetAttribute' => ['time_slots_is' => 'id']],
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
            'customer_id' => 'Customer ID',
            'time_slots_is' => 'Time Slots Is',
            'active' => 'Active',
        ];
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customer::className(), ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[TimeSlotsIs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTimeSlotsIs()
    {
        return $this->hasOne(TimeSlots::className(), ['id' => 'time_slots_is']);
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
}
