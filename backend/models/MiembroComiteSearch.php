<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MiembroComite;

/**
 * MiembroComiteSearch represents the model behind the search form of `app\models\MiembroComite`.
 */
class MiembroComiteSearch extends MiembroComite
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_com_org', 'id_miembro'], 'integer'],
            [['fecha_alta', 'fecha_ultima_renovacion', 'fecha_baja', 'observacion'], 'safe'],
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
        $query = MiembroComite::find();

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
            'id_com_org' => $this->id_com_org,
            'id_miembro' => $this->id_miembro,
            'fecha_alta' => $this->fecha_alta,
            'fecha_ultima_renovacion' => $this->fecha_ultima_renovacion,
            'fecha_baja' => $this->fecha_baja,
        ]);

        $query->andFilterWhere(['like', 'observacion', $this->observacion]);

        return $dataProvider;
    }
}
