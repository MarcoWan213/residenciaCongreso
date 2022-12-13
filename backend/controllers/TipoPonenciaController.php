<?php

namespace backend\controllers;

use app\models\TipoPonencia;
use app\models\TipoPonenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TipoPonenciaController implements the CRUD actions for TipoPonencia model.
 */
class TipoPonenciaController extends Controller
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
     * Lists all TipoPonencia models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TipoPonenciaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TipoPonencia model.
     * @param int $id_tipo Id Tipo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_tipo)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_tipo),
        ]);
    }

    /**
     * Creates a new TipoPonencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TipoPonencia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_tipo' => $model->id_tipo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TipoPonencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_tipo Id Tipo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_tipo)
    {
        $model = $this->findModel($id_tipo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_tipo' => $model->id_tipo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TipoPonencia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_tipo Id Tipo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_tipo)
    {
        $this->findModel($id_tipo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TipoPonencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_tipo Id Tipo
     * @return TipoPonencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_tipo)
    {
        if (($model = TipoPonencia::findOne(['id_tipo' => $id_tipo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
