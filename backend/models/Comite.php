<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comites".
 *
 * @property int $id_com_org
 * @property string $nombre_comite
 * @property string $objetivo
 * @property string|null $descipcion
 * @property int|null $vigencia_anios
 * @property int|null $idCongreso
 *
 * @property Congreso $idCongreso0
 * @property MiembroComite[] $miembroComites
 * @property Miembro[] $miembros
 */
class Comite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comites';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_comite', 'objetivo'], 'required'],
            [['objetivo', 'descipcion'], 'string'],
            [['vigencia_anios', 'idCongreso'], 'integer'],
            [['nombre_comite'], 'string', 'max' => 200],
            [['idCongreso'], 'exist', 'skipOnError' => true, 'targetClass' => Congreso::class, 'targetAttribute' => ['idCongreso' => 'idCongreso']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_com_org' => 'Id Com Org',
            'nombre_comite' => 'Nombre Comite',
            'objetivo' => 'Objetivo',
            'descipcion' => 'Descipcion',
            'vigencia_anios' => 'Vigencia Anios',
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

    /**
     * Gets query for [[MiembroComites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMiembroComites()
    {
        return $this->hasMany(MiembroComite::class, ['id_com_org' => 'id_com_org']);
    }

    /**
     * Gets query for [[Miembros]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMiembros()
    {
        return $this->hasMany(Miembro::class, ['id_miembro' => 'id_miembro'])->viaTable('miembro_comite', ['id_com_org' => 'id_com_org']);
    }
}
