<?php

namespace app\controllers;

use Yii;
use app\models\ApadrinhamentosDisponiveis;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApadrinhamentosDisponiveisController implements the CRUD actions for ApadrinhamentosDisponiveis model.
 */
class ApadrinhamentosDisponiveisController extends Controller
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
     * Lists all ApadrinhamentosDisponiveis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ApadrinhamentosDisponiveis::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ApadrinhamentosDisponiveis model.
     * @param integer $id
     * @param integer $pessoas_id
     * @return mixed
     */
    public function actionView($id, $pessoas_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $pessoas_id),
        ]);
    }

    /**
     * Creates a new ApadrinhamentosDisponiveis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ApadrinhamentosDisponiveis();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ApadrinhamentosDisponiveis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $pessoas_id
     * @return mixed
     */
    public function actionUpdate($id, $pessoas_id)
    {
        $model = $this->findModel($id, $pessoas_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ApadrinhamentosDisponiveis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $pessoas_id
     * @return mixed
     */
    public function actionDelete($id, $pessoas_id)
    {
        $this->findModel($id, $pessoas_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ApadrinhamentosDisponiveis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $pessoas_id
     * @return ApadrinhamentosDisponiveis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $pessoas_id)
    {
        if (($model = ApadrinhamentosDisponiveis::findOne(['id' => $id, 'pessoas_id' => $pessoas_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
