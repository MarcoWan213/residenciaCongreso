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

    public static function imprimirDato($datoS)
    {
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('talleres_cursos')
            ->where("idCongreso=3");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ("| "),htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'),(" | ");
        }
    }
}
