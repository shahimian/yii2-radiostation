<?php

namespace shahimian\radiostation\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use shahimian\radiostation\models\RadioSource;

/**
 * RadioSourceSearch represents the model behind the search form of `shahimian\radiostation\models\RadioSource`.
 */
class RadioSourceSearch extends RadioSource
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['source_id'], 'integer'],
            [['source_audio', 'source_picture', 'datetime'], 'safe'],
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
        $query = RadioSource::find();

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
            'source_id' => $this->source_id,
            'datetime' => $this->datetime,
        ]);

        $query->andFilterWhere(['like', 'source_audio', $this->source_audio])
            ->andFilterWhere(['like', 'source_picture', $this->source_picture]);

        return $dataProvider;
    }
}
