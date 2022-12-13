<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "conferencias".
 *
 * @property int $id_mag
 * @property string $nombre
 * @property string $nombre_ponente
 * @property string $hora
 * @property string $fecha
 * @property string $horario
 * @property string $lugar
 * @property string|null $link
 * @property string|null $descipcion
 * @property int|null $idCongreso
 * @property int|null $id_tipo
 *
 * @property Congreso $idCongreso0
 * @property TipoPonencia $tipo
 */
class Conferencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conferencias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'nombre_ponente', 'hora', 'fecha', 'horario', 'lugar'], 'required'],
            [['hora', 'horario', 'descipcion'], 'string'],
            [['fecha'], 'safe'],
            [['idCongreso', 'id_tipo'], 'integer'],
            [['nombre', 'nombre_ponente', 'lugar'], 'string', 'max' => 100],
            [['link'], 'string', 'max' => 200],
            [['idCongreso'], 'exist', 'skipOnError' => true, 'targetClass' => Congreso::class, 'targetAttribute' => ['idCongreso' => 'idCongreso']],
            [['id_tipo'], 'exist', 'skipOnError' => true, 'targetClass' => TipoPonencia::class, 'targetAttribute' => ['id_tipo' => 'id_tipo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mag' => 'Id Mag',
            'nombre' => 'Nombre',
            'nombre_ponente' => 'Nombre Ponente',
            'hora' => 'Hora',
            'fecha' => 'Fecha',
            'horario' => 'Horario',
            'lugar' => 'Lugar',
            'link' => 'Link',
            'descipcion' => 'Descipcion',
            'idCongreso' => 'Id Congreso',
            'id_tipo' => 'Id Tipo',
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

    /**
     * Gets query for [[Tipo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipo()
    {
        return $this->hasOne(TipoPonencia::class, ['id_tipo' => 'id_tipo']);
    }
}
