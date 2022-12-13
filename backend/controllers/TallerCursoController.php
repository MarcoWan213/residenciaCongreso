<?php

namespace backend\controllers;

use app\models\TallerCurso;
use app\models\TallerCursoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TallerCursoController implements the CRUD actions for TallerCurso model.
 */
class TallerCursoController extends Controller
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
     * Lists all TallerCurso models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TallerCursoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TallerCurso model.
     * @param int $id_tall_curs Id Tall Curs
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_tall_curs)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_tall_curs),
        ]);
    }

    /**
     * Creates a new TallerCurso model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TallerCurso();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_tall_curs' => $model->id_tall_curs]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TallerCurso model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_tall_curs Id Tall Curs
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_tall_curs)
    {
        $model = $this->findModel($id_tall_curs);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_tall_curs' => $model->id_tall_curs]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TallerCurso model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_tall_curs Id Tall Curs
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_tall_curs)
    {
        $this->findModel($id_tall_curs)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TallerCurso model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_tall_curs Id Tall Curs
     * @return TallerCurso the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_tall_curs)
    {
        if (($model = TallerCurso::findOne(['id_tall_curs' => $id_tall_curs])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
