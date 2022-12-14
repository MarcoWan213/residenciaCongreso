<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "congreso".
 *
 * @property int $idCongreso
 * @property string $nombre Nombre que llevara dicho congreso
 * @property string $bienvenida
 * @property string|null $nota
 * @property string|null $objetivos
 * @property string $fech_creacion Fecha en la cual es creado dicho panel para congreso
 
 * @property string $fech_inicio Fecha de inicio del mismo
 * @property string|null $fech_fin Fecha de fin
 * @property string|null $txt_convocatoria
 * @property string|null $link_convocatoria
 * @property string|null $txt_programa_general
 * @property string|null $link_programa_genral
 * @property string|null $txt_registro_ponencia
 * @property string|null $link_registro_ponencia
 * @property string|null $modalidad
 * @property string|null $img_easychair
 * @property string|null $autorizado
 * @property string|null $publicado
 *
 * @property CalendarioActividad[] $calendarioActividads
 * @property Colaborador[] $colaboradors
 * @property Comites[] $comites
 * @property Conferencias[] $conferencias
 * @property TalleresCursos[] $talleresCursos
 */
class Congreso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'congreso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'bienvenida', 'fech_creacion', 'fech_inicio'], 'required'],
            [['bienvenida', 'nota', 'txt_convocatoria', 'txt_programa_general', 'txt_registro_ponencia'], 'string'],
            [['fech_creacion', 'fech_inicio', 'fech_fin'], 'safe'],
            [['nombre'], 'string', 'max' => 100],
            [['objetivos'], 'string', 'max' => 50],
            [['link_convocatoria', 'link_programa_genral', 'link_registro_ponencia'], 'string', 'max' => 220],
            [['modalidad'], 'string', 'max' => 200],
            [['img_easychair', 'autorizado', 'publicado', 'estatus'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idCongreso' => 'Id Congreso',
            'nombre' => 'Nombre',
            'bienvenida' => 'Bienvenida',
            'nota' => 'Nota',
            'objetivos' => 'Objetivos',
            'fech_creacion' => 'Fech Creacion',
            'fech_inicio' => 'Fech Inicio',
            'fech_fin' => 'Fech Fin',
            'txt_convocatoria' => 'Txt Convocatoria',
            'link_convocatoria' => 'Link Convocatoria',
            'txt_programa_general' => 'Txt Programa General',
            'link_programa_genral' => 'Link Programa Genral',
            'txt_registro_ponencia' => 'Txt Registro Ponencia',
            'link_registro_ponencia' => 'Link Registro Ponencia',
            'modalidad' => 'Modalidad',
            'img_easychair' => 'Img Easychair',
            'autorizado' => 'Autorizado',
            'publicado' => 'Publicado',
            'estatus' => 'Estatus',
        ];
    }

    /**
     * Gets query for [[CalendarioActividads]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCalendarioActividads()
    {
        return $this->hasMany(CalendarioActividad::class, ['idCongreso' => 'idCongreso']);
    }

    /**
     * Gets query for [[Colaboradors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColaboradors()
    {
        return $this->hasMany(Colaborador::class, ['idCongreso' => 'idCongreso']);
    }

    /**
     * Gets query for [[Comites]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComites()
    {
        return $this->hasMany(Comites::class, ['idCongreso' => 'idCongreso']);
    }

    /**
     * Gets query for [[Conferencias]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConferencias()
    {
        return $this->hasMany(Conferencias::class, ['idCongreso' => 'idCongreso']);
    }

    /**
     * Gets query for [[TalleresCursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTalleresCursos()
    {
        return $this->hasMany(TalleresCursos::class, ['idCongreso' => 'idCongreso']);
    }

    public static function imprimirDato($datoS)
    {
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('congreso')
            ->where("publicado=1");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {
            echo htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8');
        }
    }

    /* public static function htmlDato($datoS)
    {
        $buscar = (new \yii\db\Query())
            ->select($datoS)
            ->from('congreso')
            ->where("publicado=1");
        $datos = $buscar->createCommand();
        $columna = $datos->queryAll();
        foreach ($columna as $fila) {            
            return htmlspecialchars($fila[$datoS], ENT_QUOTES, 'UTF-8');
        }
    } */
    /* <!-- IDEA DE GASPI SUPER EFICAS x100 PARA LA IMPRESION -->
            <?php
            $query = Yii::$app->db;
            $buscar = (new \yii\db\Query())
                ->select('nombre')
                ->from('congreso')
                ->where("estatus=1");
            $datos = $buscar->createCommand();
            $columna = $datos->queryAll();
            foreach ($columna as $fila) {
                echo htmlspecialchars($fila['nombre'], ENT_QUOTES, 'UTF-8');
            }
            ?> */
}
