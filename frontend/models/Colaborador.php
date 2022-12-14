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
    public static function imprimirDato($datoS)
    {
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('colaborador')
            ->where("idCongreso=3");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ("| "), htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'), (" | ");
        }
    }
}
