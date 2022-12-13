<?php

namespace backend\controllers;

use app\models\Miembro;
use app\models\MiembroSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MiembroController implements the CRUD actions for Miembro model.
 */
class MiembroController extends Controller
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
     * Lists all Miembro models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MiembroSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Miembro model.
     * @param int $id_miembro Id Miembro
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_miembro)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_miembro),
        ]);
    }

    /**
     * Creates a new Miembro model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Miembro();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_miembro' => $model->id_miembro]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Miembro model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_miembro Id Miembro
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_miembro)
    {
        $model = $this->findModel($id_miembro);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_miembro' => $model->id_miembro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Miembro model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_miembro Id Miembro
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_miembro)
    {
        $this->findModel($id_miembro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Miembro model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_miembro Id Miembro
     * @return Miembro the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_miembro)
    {
        if (($model = Miembro::findOne(['id_miembro' => $id_miembro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
