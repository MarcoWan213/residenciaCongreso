<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "miembro".
 *
 * @property int $id_miembro
 * @property string $nombre
 * @property string $apellidos
 * @property string $tipo
 * @property string|null $institucion
 * @property string|null $telefono
 * @property string|null $email
 * @property string|null $vigente
 *
 * @property Comites[] $comOrgs
 * @property MiembroComite[] $miembroComites
 */
class Miembro extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'miembro';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos', 'tipo'], 'required'],
            [['nombre', 'apellidos'], 'string', 'max' => 100],
            [['tipo'], 'string', 'max' => 50],
            [['institucion', 'email'], 'string', 'max' => 150],
            [['telefono'], 'string', 'max' => 15],
            [['vigente'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_miembro' => 'Id Miembro',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'tipo' => 'Tipo',
            'institucion' => 'Institucion',
            'telefono' => 'Telefono',
            'email' => 'Email',
            'vigente' => 'Vigente',
        ];
    }

    /**
     * Gets query for [[ComOrgs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComOrgs()
    {
        return $this->hasMany(Comites::class, ['id_com_org' => 'id_com_org'])->viaTable('miembro_comite', ['id_miembro' => 'id_miembro']);
    }

    /**
     * Gets query for [[MiembroComites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMiembroComites()
    {
        return $this->hasMany(MiembroComite::class, ['id_miembro' => 'id_miembro']);
    }
}
