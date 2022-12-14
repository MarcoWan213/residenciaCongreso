<?php

namespace backend\controllers;

use app\models\Congreso;
use app\models\CongresoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

use yii\data\Pagination;

/**
 * CongresoController implements the CRUD actions for Congreso model.
 */
class CongresoController extends Controller
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
     * Lists all Congreso models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CongresoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Congreso model.
     * @param int $idCongreso Id Congreso
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($idCongreso)
    {
        return $this->render('view', [
            'model' => $this->findModel($idCongreso),
        ]);
    }

    /**
     * Creates a new Congreso model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Congreso();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'idCongreso' => $model->idCongreso]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Congreso model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $idCongreso Id Congreso
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($idCongreso)
    {
        $model = $this->findModel($idCongreso);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'idCongreso' => $model->idCongreso]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Congreso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $idCongreso Id Congreso
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($idCongreso)
    {
        $this->findModel($idCongreso)->delete();

        return $this->redirect(['index']);
    }

    

    /**
     * Finds the Congreso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $idCongreso Id Congreso
     * @return Congreso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($idCongreso)
    {
        if (($model = Congreso::findOne(['idCongreso' => $idCongreso])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
