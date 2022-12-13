<?php

namespace backend\controllers;

use app\models\Conferencia;
use app\models\ConferenciaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ConferenciaController implements the CRUD actions for Conferencia model.
 */
class ConferenciaController extends Controller
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
     * Lists all Conferencia models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ConferenciaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Conferencia model.
     * @param int $id_mag Id Mag
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_mag)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_mag),
        ]);
    }

    /**
     * Creates a new Conferencia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Conferencia();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_mag' => $model->id_mag]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Conferencia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_mag Id Mag
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_mag)
    {
        $model = $this->findModel($id_mag);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_mag' => $model->id_mag]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Conferencia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_mag Id Mag
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_mag)
    {
        $this->findModel($id_mag)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Conferencia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_mag Id Mag
     * @return Conferencia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_mag)
    {
        if (($model = Conferencia::findOne(['id_mag' => $id_mag])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
