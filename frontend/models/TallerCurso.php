<?php

namespace app\models;

use app\models\TalleresCursos;
use app\models\Congreso;
use app\models\TallerCurso as ModelsTallerCurso;
use Yii;
use yii\bootstrap5\Html;

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
        $count = 1;
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('talleres_cursos')
            ->where("idCongreso=(SELECT idCongreso
              FROM congreso
              WHERE publicado=1)");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ("| "), ("$count"), (":- "), htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'), (" | "), ("<br>");
            $count = $count + 1;
        }
    }
    public static function interpDatoHTML($datoS)
    {
        $count = 1;
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('talleres_cursos')
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
            /* echo $param; */
        }
    }

    public static function imprimirElemento()
    {
        $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
        foreach ($ciclos as $ciclo) {
            /*   echo  $ciclo->nombre; //atributos
            echo  $ciclo->bienvenida; //atributos */
            //echo  $ciclo->talleresCursos; //atributos

            $id =  $ciclo->idCongreso; //atributos
            $talleres = TallerCurso::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
            foreach ($talleres as $taller) {

                echo "<br>";
                echo "<hr class= dotted >";
                echo "Nombre del Taller: ";
                echo $taller->taller . "<br>";
                echo "<hr class= dotted >";
                echo "<br>";
                echo $taller->descipcion_taller;
                echo "Instructor del Taller: ";
                echo $taller->instructror . "<br>";
                echo "Fecha de inicio: ";
                echo $taller->fecha_inicio . "<br>";
                echo "Fecha de fin: ";
                echo $taller->fecha_fin . "<br>";
                echo "Total de horas: ";
                echo $taller->horas . "<br>";
                echo "<br>";
                echo "<hr class= solid>";
                echo "<br>";
            }
        }
    }
}

