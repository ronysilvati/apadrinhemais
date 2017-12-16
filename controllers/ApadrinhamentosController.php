<?php

namespace app\controllers;

use Yii;
use app\models\Apadrinhamentos;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ApadrinhamentosController implements the CRUD actions for Apadrinhamentos model.
 */
class ApadrinhamentosController extends Controller
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
     * Lists all Apadrinhamentos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Apadrinhamentos::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Apadrinhamentos model.
     * @param integer $id
     * @param integer $padrinho_id
     * @param integer $afilhado_id
     * @return mixed
     */
    public function actionView($id, $padrinho_id, $afilhado_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $padrinho_id, $afilhado_id),
        ]);
    }

    /**
     * Creates a new Apadrinhamentos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Apadrinhamentos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'padrinho_id' => $model->padrinho_id, 'afilhado_id' => $model->afilhado_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Apadrinhamentos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $padrinho_id
     * @param integer $afilhado_id
     * @return mixed
     */
    public function actionUpdate($id, $padrinho_id, $afilhado_id)
    {
        $model = $this->findModel($id, $padrinho_id, $afilhado_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'padrinho_id' => $model->padrinho_id, 'afilhado_id' => $model->afilhado_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Apadrinhamentos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $padrinho_id
     * @param integer $afilhado_id
     * @return mixed
     */
    public function actionDelete($id, $padrinho_id, $afilhado_id)
    {
        $this->findModel($id, $padrinho_id, $afilhado_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Apadrinhamentos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $padrinho_id
     * @param integer $afilhado_id
     * @return Apadrinhamentos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $padrinho_id, $afilhado_id)
    {
        if (($model = Apadrinhamentos::findOne(['id' => $id, 'padrinho_id' => $padrinho_id, 'afilhado_id' => $afilhado_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
