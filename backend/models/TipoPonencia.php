<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_ponencia".
 *
 * @property int $id_tipo
 * @property string $tipo
 * @property string|null $descripcion
 *
 * @property Conferencias[] $conferencias
 */
class TipoPonencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_ponencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo'], 'required'],
            [['descripcion'], 'string'],
            [['tipo'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tipo' => 'Id Tipo',
            'tipo' => 'Tipo',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * Gets query for [[Conferencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConferencias()
    {
        return $this->hasMany(Conferencias::class, ['id_tipo' => 'id_tipo']);
    }
}
