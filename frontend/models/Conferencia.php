<?php

namespace app\models;

use app\models\Conferencia as ModelsConferencia;
use Yii;

/**
 * This is the model class for table "conferencias".
 *
 * @property int $id_mag
 * @property string $nombre
 * @property string $nombre_ponente
 * @property string $hora
 * @property string $fecha
 * @property string $horario
 * @property string $lugar
 * @property string|null $link
 * @property string|null $descipcion
 * @property int|null $idCongreso
 * @property int|null $id_tipo
 *
 * @property Congreso $idCongreso0
 * @property TipoPonencia $tipo
 */
class Conferencia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conferencias';
    }

    public static function imprimirDato($datoS)
    {
        $count = 1;
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('conferencias')
            ->where("idCongreso=(SELECT idCongreso
            FROM congreso
            WHERE publicado=1)");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ( "$count" ), (":- "),(" | ") ,htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'),(" | "), ("<br>");
            $count= $count + 1;
        }
    }
    public static function interpDatoHTML($datoS)
    {
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('conferencias')
            ->where("idCongreso=(SELECT idCongreso
            FROM congreso
            WHERE publicado=1)");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            $param= htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8');            
            $b = html_entity_decode($param);
            echo $b;
            /* echo $param; */
        }
    }

    public static function imprimirElemento()
    {
        $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
        foreach ($ciclos as $ciclo) {           
            $id =  $ciclo->idCongreso; //atributos
            $talleres = ModelsConferencia::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
            foreach ($talleres as $taller) {
                echo "<br>";
                echo "<hr class= dotted >";
                echo "Nombre del Taller : ";
                echo $taller->nombre . "<br>";
                echo "<hr class= dotted >";
                echo "<br>";
                echo "Ponente :  ";
                echo $taller->nombre_ponente;
                echo "<br>";
                echo "Fecha : ";
                echo $taller->fecha . "<br>";
                echo "Hora de inicio : ";
                echo $taller->hora . "<br>";
                echo "Hora de fin : ";
                echo $taller->horario . "<br>";
                echo "Ubicacion : ";
                echo $taller->lugar . "<br>";
                echo "Enlace : ";
                echo $taller->link . "<br>";
                echo "<br>";
                echo "<hr class= solid>";
                echo "<br>";
            }
        }
    }
    
}
