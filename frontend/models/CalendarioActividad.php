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
    public static function imprimirDato($datoS)
    {
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('calendario_actividad')
            ->where("idCongreso=3");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ("| "),htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'),(" | ");
        }
    }
    
}
