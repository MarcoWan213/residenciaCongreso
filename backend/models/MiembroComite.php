<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "miembro_comite".
 *
 * @property int $id_com_org
 * @property int $id_miembro
 * @property string|null $fecha_alta
 * @property string|null $fecha_ultima_renovacion
 * @property string|null $fecha_baja
 * @property string|null $observacion
 *
 * @property Comites $comOrg
 * @property Miembro $miembro
 */
class MiembroComite extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'miembro_comite';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_com_org', 'id_miembro'], 'required'],
            [['id_com_org', 'id_miembro'], 'integer'],
            [['fecha_alta', 'fecha_ultima_renovacion', 'fecha_baja'], 'safe'],
            [['observacion'], 'string'],
            [['id_com_org', 'id_miembro'], 'unique', 'targetAttribute' => ['id_com_org', 'id_miembro']],
            [['id_com_org'], 'exist', 'skipOnError' => true, 'targetClass' => Comites::class, 'targetAttribute' => ['id_com_org' => 'id_com_org']],
            [['id_miembro'], 'exist', 'skipOnError' => true, 'targetClass' => Miembro::class, 'targetAttribute' => ['id_miembro' => 'id_miembro']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_com_org' => 'Id Com Org',
            'id_miembro' => 'Id Miembro',
            'fecha_alta' => 'Fecha Alta',
            'fecha_ultima_renovacion' => 'Fecha Ultima Renovacion',
            'fecha_baja' => 'Fecha Baja',
            'observacion' => 'Observacion',
        ];
    }

    /**
     * Gets query for [[ComOrg]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComOrg()
    {
        return $this->hasOne(Comites::class, ['id_com_org' => 'id_com_org']);
    }

    /**
     * Gets query for [[Miembro]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMiembro()
    {
        return $this->hasOne(Miembro::class, ['id_miembro' => 'id_miembro']);
    }
}
