<?php

namespace app\controllers;

use Yii;
use app\models\OngsHorariosVisitas;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OngsHorariosVisitasController implements the CRUD actions for OngsHorariosVisitas model.
 */
class OngsHorariosVisitasController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all OngsHorariosVisitas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => OngsHorariosVisitas::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single OngsHorariosVisitas model.
     * @param integer $id
     * @param integer $ongs_id
     * @return mixed
     */
    public function actionView($id, $ongs_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $ongs_id),
        ]);
    }

    /**
     * Creates a new OngsHorariosVisitas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new OngsHorariosVisitas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'ongs_id' => $model->ongs_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing OngsHorariosVisitas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $ongs_id
     * @return mixed
     */
    public function actionUpdate($id, $ongs_id)
    {
        $model = $this->findModel($id, $ongs_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'ongs_id' => $model->ongs_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing OngsHorariosVisitas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $ongs_id
     * @return mixed
     */
    public function actionDelete($id, $ongs_id)
    {
        $this->findModel($id, $ongs_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the OngsHorariosVisitas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $ongs_id
     * @return OngsHorariosVisitas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $ongs_id)
    {
        if (($model = OngsHorariosVisitas::findOne(['id' => $id, 'ongs_id' => $ongs_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
