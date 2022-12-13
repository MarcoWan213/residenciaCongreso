<?php

namespace backend\controllers;

use app\models\MiembroComite;
use app\models\MiembroComiteSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MiembroComiteController implements the CRUD actions for MiembroComite model.
 */
class MiembroComiteController extends Controller
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
     * Lists all MiembroComite models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MiembroComiteSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single MiembroComite model.
     * @param int $id_com_org Id Com Org
     * @param int $id_miembro Id Miembro
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_com_org, $id_miembro)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_com_org, $id_miembro),
        ]);
    }

    /**
     * Creates a new MiembroComite model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new MiembroComite();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_com_org' => $model->id_com_org, 'id_miembro' => $model->id_miembro]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing MiembroComite model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_com_org Id Com Org
     * @param int $id_miembro Id Miembro
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_com_org, $id_miembro)
    {
        $model = $this->findModel($id_com_org, $id_miembro);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_com_org' => $model->id_com_org, 'id_miembro' => $model->id_miembro]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing MiembroComite model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_com_org Id Com Org
     * @param int $id_miembro Id Miembro
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_com_org, $id_miembro)
    {
        $this->findModel($id_com_org, $id_miembro)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the MiembroComite model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_com_org Id Com Org
     * @param int $id_miembro Id Miembro
     * @return MiembroComite the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_com_org, $id_miembro)
    {
        if (($model = MiembroComite::findOne(['id_com_org' => $id_com_org, 'id_miembro' => $id_miembro])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
