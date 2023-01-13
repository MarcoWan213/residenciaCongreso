<?php

namespace app\models;

use app\models\CalendarioActividad as ModelsCalendarioActividad;
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
        $count = 1;
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('calendario_actividad')
            ->where("idCongreso=(SELECT idCongreso
            FROM congreso
            WHERE publicado=1)");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ("$count"), (":- "), (" | "), htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'), (" | "), ("<br>");
            $count = $count + 1;
        }
    }
    public static function interpDatoHTML($datoS)
    {
        $count = 1;
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('calendario_actividad')
            ->where("idCongreso=(SELECT idCongreso
            FROM congreso
            WHERE publicado=1)");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            $param = htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8');
            $b = html_entity_decode($param);
            echo ("$count"), (":- "), $b;
            $count = $count + 1;
        }
    }
    public static function imprimirElemento()
    {
        $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
        foreach ($ciclos as $ciclo) {           
            $id =  $ciclo->idCongreso; //atributos
            $talleres = ModelsCalendarioActividad::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
            foreach ($talleres as $taller) {
                echo "<br>";
                echo "<hr class= dotted >";
                echo "Actividad : ";
                echo $taller->descipcion . "<br>";
                echo "<hr class= dotted >";
                echo "<br>";
                echo "Fecha de inicio:  ";
                echo $taller->fecha_inicio;
                echo "<br>";
                echo "Fecha de fin: ";
                echo $taller->fecha_fin . "<br>";
                echo "<br>";
                echo "<hr class= solid>";
                echo "<br>";
            }
        }
    }
}
