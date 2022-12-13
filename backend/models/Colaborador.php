<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colaborador".
 *
 * @property int $id_colavorador
 * @property string $nombre
 * @property string|null $enlace
 * @property string|null $link
 * @property string|null $telefono
 * @property string|null $logotipo
 * @property int|null $idCongreso
 *
 * @property Congreso $idCongreso0
 */
class Colaborador extends \yii\db\ActiveRecord
{
    public $archivo;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colaborador';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['idCongreso'], 'integer'],
            [['nombre', 'enlace'], 'string', 'max' => 100],
            [['link', /* 'logotipo' */], 'string', 'max' => 200],/* sigue estando la variable logotivo luego la usaremos  */
            [['archivo'], 'file', 'extensions' => 'jpg,png,'],
            [['telefono'], 'string', 'max' => 15],
            [['idCongreso'], 'exist', 'skipOnError' => true, 'targetClass' => Congreso::class, 'targetAttribute' => ['idCongreso' => 'idCongreso']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_colavorador' => 'Id Colavorador',
            'nombre' => 'Nombre',
            'enlace' => 'Enlace',
            'link' => 'Link',
            'telefono' => 'Telefono',
            'archivo' => 'Logotipo',
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
