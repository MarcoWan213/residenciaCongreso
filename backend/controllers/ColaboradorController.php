<?php

namespace backend\controllers;

use app\models\Colaborador;
use app\models\ColaboradorSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ColaboradorController implements the CRUD actions for Colaborador model.
 */
class ColaboradorController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Colaborador models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ColaboradorSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Colaborador model.
     * @param int $id_colavorador Id Colavorador
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_colavorador)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_colavorador),
        ]);
    }

    /**
     * Creates a new Colaborador model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Colaborador();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_colavorador' => $model->id_colavorador]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Colaborador model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_colavorador Id Colavorador
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_colavorador)
    {
        $model = $this->findModel($id_colavorador);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_colavorador' => $model->id_colavorador]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Colaborador model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_colavorador Id Colavorador
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_colavorador)
    {
        $this->findModel($id_colavorador)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Colaborador model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_colavorador Id Colavorador
     * @return Colaborador the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_colavorador)
    {
        if (($model = Colaborador::findOne(['id_colavorador' => $id_colavorador])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
