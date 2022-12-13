<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Colaborador;

/**
 * ColaboradorSearch represents the model behind the search form of `app\models\Colaborador`.
 */
class ColaboradorSearch extends Colaborador
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_colavorador', 'idCongreso'], 'integer'],
            [['nombre', 'enlace', 'link', 'telefono', 'logotipo'], 'safe'],
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
        $query = Colaborador::find();

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
            'id_colavorador' => $this->id_colavorador,
            'idCongreso' => $this->idCongreso,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'enlace', $this->enlace])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'telefono', $this->telefono])
            ->andFilterWhere(['like', 'logotipo', $this->logotipo]);

        return $dataProvider;
    }
}
