<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Conferencia;

/**
 * ConferenciaSearch represents the model behind the search form of `app\models\Conferencia`.
 */
class ConferenciaSearch extends Conferencia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_mag', 'idCongreso', 'id_tipo'], 'integer'],
            [['nombre', 'nombre_ponente', 'hora', 'fecha', 'horario', 'lugar', 'link', 'descipcion'], 'safe'],
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
        $query = Conferencia::find();

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
            'id_mag' => $this->id_mag,
            'hora' => $this->hora,
            'fecha' => $this->fecha,
            'horario' => $this->horario,
            'idCongreso' => $this->idCongreso,
            'id_tipo' => $this->id_tipo,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'nombre_ponente', $this->nombre_ponente])
            ->andFilterWhere(['like', 'lugar', $this->lugar])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'descipcion', $this->descipcion]);

        return $dataProvider;
    }
}
