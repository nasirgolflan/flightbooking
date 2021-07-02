<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TimeSlots;

/**
 * TimeSlotsSearch represents the model behind the search form of `frontend\models\TimeSlots`.
 */
class TimeSlotsSearch extends TimeSlots
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'flight_id'], 'integer'],
            [['time_slot', 'date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TimeSlots::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'flight_id' => $this->flight_id,
            'time_slot' => $this->time_slot,
            'date' => $this->date,
        ]);

        return $dataProvider;
    }
}
