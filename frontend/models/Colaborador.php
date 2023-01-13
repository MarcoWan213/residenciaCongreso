<?php

namespace app\models;

use app\models\Colaborador as ModelsColaborador;
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
            ->where("idCongreso=(SELECT idCongreso
            FROM congreso
            WHERE publicado=1)");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo ("| "), htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8'), (" | "), ("<br>");
        }
    }
    public static function imprimirElemento()
    {
        $ciclos = Congreso::find()->where(['publicado' => '1'])->all();
        foreach ($ciclos as $ciclo) {           
            $id =  $ciclo->idCongreso; //atributos
            $talleres = ModelsColaborador::find()->where(['idCongreso' => $ciclo->idCongreso])->all();
            foreach ($talleres as $taller) {
                echo "<br>";
                echo "<hr class= dotted >";
                echo "Colaborador : ";
                echo $taller->nombre . "<br>";
                echo "<hr class= dotted >";
                echo "<br>";
                echo "Más sobre el Colaborador:  ";
                echo $taller->link;
                echo "<br>";
                echo "Telefono de contacto: ";
                echo $taller->telefono . "<br>";                
                echo $taller->logotipo . "<br>";
                echo "<br>";
                echo "<hr class= solid>";
                echo "<br>";
            }
        }
    }
}
