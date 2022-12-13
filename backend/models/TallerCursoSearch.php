<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TallerCurso;

/**
 * TallerCursoSearch represents the model behind the search form of `app\models\TallerCurso`.
 */
class TallerCursoSearch extends TallerCurso
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tall_curs', 'idCongreso'], 'integer'],
            [['taller', 'descipcion_taller', 'instructror', 'cvu_instructor'], 'safe'],
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
        $query = TallerCurso::find();

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
            'id_tall_curs' => $this->id_tall_curs,
            'idCongreso' => $this->idCongreso,
        ]);

        $query->andFilterWhere(['like', 'taller', $this->taller])
            ->andFilterWhere(['like', 'descipcion_taller', $this->descipcion_taller])
            ->andFilterWhere(['like', 'instructror', $this->instructror])
            ->andFilterWhere(['like', 'cvu_instructor', $this->cvu_instructor]);

        return $dataProvider;
    }
}
