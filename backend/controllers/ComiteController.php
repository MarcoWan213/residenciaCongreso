<?php

namespace backend\controllers;

use app\models\Comite;
use app\models\ComiteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComiteController implements the CRUD actions for Comite model.
 */
class ComiteController extends Controller
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
     * Lists all Comite models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ComiteSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Comite model.
     * @param int $id_com_org Id Com Org
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_com_org)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_com_org),
        ]);
    }

    /**
     * Creates a new Comite model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Comite();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_com_org' => $model->id_com_org]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Comite model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_com_org Id Com Org
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_com_org)
    {
        $model = $this->findModel($id_com_org);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_com_org' => $model->id_com_org]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Comite model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_com_org Id Com Org
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_com_org)
    {
        $this->findModel($id_com_org)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Comite model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_com_org Id Com Org
     * @return Comite the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_com_org)
    {
        if (($model = Comite::findOne(['id_com_org' => $id_com_org])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
