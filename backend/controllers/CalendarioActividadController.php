<?php

namespace backend\controllers;

use app\models\CalendarioActividad;
use app\models\CalendarioActividadSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CalendarioActividadController implements the CRUD actions for CalendarioActividad model.
 */
class CalendarioActividadController extends Controller
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
     * Lists all CalendarioActividad models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CalendarioActividadSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CalendarioActividad model.
     * @param int $id_evento Id Evento
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_evento)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_evento),
        ]);
    }

    /**
     * Creates a new CalendarioActividad model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CalendarioActividad();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_evento' => $model->id_evento]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CalendarioActividad model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_evento Id Evento
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_evento)
    {
        $model = $this->findModel($id_evento);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_evento' => $model->id_evento]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CalendarioActividad model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_evento Id Evento
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_evento)
    {
        $this->findModel($id_evento)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CalendarioActividad model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_evento Id Evento
     * @return CalendarioActividad the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_evento)
    {
        if (($model = CalendarioActividad::findOne(['id_evento' => $id_evento])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
