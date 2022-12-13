<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Congreso;

/**
 * CongresoSearch represents the model behind the search form of `app\models\Congreso`.
 */
class CongresoSearch extends Congreso
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idCongreso'], 'integer'],
            [['nombre', 'bienvenida', 'nota', 'objetivos', 'fech_creacion', 'fech_inicio', 'fech_fin', 'txt_convocatoria', 'link_convocatoria', 'txt_programa_general', 'link_programa_genral', 'txt_registro_ponencia', 'link_registro_ponencia', 'modalidad', 'img_easychair', 'autorizado', 'publicado'], 'safe'],
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
        $query = Congreso::find();

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
            'idCongreso' => $this->idCongreso,
            'fech_creacion' => $this->fech_creacion,
            'fech_inicio' => $this->fech_inicio,
            'fech_fin' => $this->fech_fin,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'bienvenida', $this->bienvenida])
            ->andFilterWhere(['like', 'nota', $this->nota])
            ->andFilterWhere(['like', 'objetivos', $this->objetivos])
            ->andFilterWhere(['like', 'txt_convocatoria', $this->txt_convocatoria])
            ->andFilterWhere(['like', 'link_convocatoria', $this->link_convocatoria])
            ->andFilterWhere(['like', 'txt_programa_general', $this->txt_programa_general])
            ->andFilterWhere(['like', 'link_programa_genral', $this->link_programa_genral])
            ->andFilterWhere(['like', 'txt_registro_ponencia', $this->txt_registro_ponencia])
            ->andFilterWhere(['like', 'link_registro_ponencia', $this->link_registro_ponencia])
            ->andFilterWhere(['like', 'modalidad', $this->modalidad])
            ->andFilterWhere(['like', 'img_easychair', $this->img_easychair])
            ->andFilterWhere(['like', 'autorizado', $this->autorizado])
            ->andFilterWhere(['like', 'publicado', $this->publicado]);

        return $dataProvider;
    }
}
