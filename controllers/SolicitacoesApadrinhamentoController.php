<?php

namespace app\controllers;

use Yii;
use app\models\SolicitacoesApadrinhamento;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SolicitacoesApadrinhamentoController implements the CRUD actions for SolicitacoesApadrinhamento model.
 */
class SolicitacoesApadrinhamentoController extends AppController
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
     * Lists all SolicitacoesApadrinhamento models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SolicitacoesApadrinhamento::find()->where("pessoas_id=".$this->getPessoaId()),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SolicitacoesApadrinhamento model.
     * @param integer $id
     * @param integer $pessoas_id
     * @param integer $ongs_id
     * @return mixed
     */
    public function actionView($id, $pessoas_id, $ongs_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $pessoas_id, $ongs_id),
        ]);
    }

    /**
     * Creates a new SolicitacoesApadrinhamento model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SolicitacoesApadrinhamento();

        if(Yii::$app->request->isPost){
            if($model->isNewRecord){
                $model->pessoas_id  = $this->getPessoaId();
                $model->status_solicitacao = 'ANALISE';
            }
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id, 'ongs_id' => $model->ongs_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SolicitacoesApadrinhamento model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $pessoas_id
     * @param integer $ongs_id
     * @return mixed
     */
    public function actionUpdate($id, $pessoas_id, $ongs_id)
    {
        $model = $this->findModel($id, $pessoas_id, $ongs_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id, 'ongs_id' => $model->ongs_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing SolicitacoesApadrinhamento model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $pessoas_id
     * @param integer $ongs_id
     * @return mixed
     */
    public function actionDelete($id, $pessoas_id, $ongs_id)
    {
        $this->findModel($id, $pessoas_id, $ongs_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SolicitacoesApadrinhamento model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $pessoas_id
     * @param integer $ongs_id
     * @return SolicitacoesApadrinhamento the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $pessoas_id, $ongs_id)
    {
        if (($model = SolicitacoesApadrinhamento::findOne(['id' => $id, 'pessoas_id' => $pessoas_id, 'ongs_id' => $ongs_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
