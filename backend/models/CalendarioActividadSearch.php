<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CalendarioActividad;

/**
 * CalendarioActividadSearch represents the model behind the search form of `app\models\CalendarioActividad`.
 */
class CalendarioActividadSearch extends CalendarioActividad
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_evento', 'idCongreso'], 'integer'],
            [['fecha_inicio', 'fecha_fin', 'descipcion', 'responsable'], 'safe'],
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
        $query = CalendarioActividad::find();

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
            'id_evento' => $this->id_evento,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_fin' => $this->fecha_fin,
            'idCongreso' => $this->idCongreso,
        ]);

        $query->andFilterWhere(['like', 'descipcion', $this->descipcion])
            ->andFilterWhere(['like', 'responsable', $this->responsable]);

        return $dataProvider;
    }
}
