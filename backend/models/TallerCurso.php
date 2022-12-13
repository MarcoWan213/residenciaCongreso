<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "talleres_cursos".
 *
 * @property int $id_tall_curs
 * @property string $taller
 * @property string|null $descipcion_taller
 * @property string|null $instructror
 * @property string|null $cvu_instructor
 * @property int|null $idCongreso
 *
 * @property Congreso $idCongreso0
 */
class TallerCurso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'talleres_cursos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['taller'], 'required'],
            [['descipcion_taller', 'cvu_instructor'], 'string'],
            [['idCongreso'], 'integer'],
            [['taller', 'instructror'], 'string', 'max' => 100],
            [['idCongreso'], 'exist', 'skipOnError' => true, 'targetClass' => Congreso::class, 'targetAttribute' => ['idCongreso' => 'idCongreso']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tall_curs' => 'Id Tall Curs',
            'taller' => 'Taller',
            'descipcion_taller' => 'Descipcion Taller',
            'instructror' => 'Instructror',
            'cvu_instructor' => 'Cvu Instructor',
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
