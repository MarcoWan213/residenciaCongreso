<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "calendario_actividad".
 *
 * @property int $id_evento
 * @property string $fecha_inicio fecha del inicio del evento
 * @property string|null $fecha_fin fecha fin del evento
 * @property string $descipcion
 * @property string|null $responsable
 * @property int|null $idCongreso
 *
 * @property Congreso $idCongreso0
 */
class CalendarioActividad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'calendario_actividad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_inicio', 'descipcion'], 'required'],
            [['fecha_inicio', 'fecha_fin'], 'safe'],
            [['descipcion'], 'string'],
            [['idCongreso'], 'integer'],
            [['responsable'], 'string', 'max' => 50],
            [['idCongreso'], 'exist', 'skipOnError' => true, 'targetClass' => Congreso::class, 'targetAttribute' => ['idCongreso' => 'idCongreso']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_evento' => 'Id Evento',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_fin' => 'Fecha Fin',
            'descipcion' => 'Descipcion',
            'responsable' => 'Responsable',
            'idCongreso' => 'Id Congreso',
        ];
    }

    /**
     * Gets query for [[IdCongreso0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIdCongreso0()
    {
        return $this->hasOne(Congreso::class, ['idCongreso' => 'idCongreso']);
    }
}
