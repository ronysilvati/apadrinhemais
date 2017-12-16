<?php

namespace app\controllers;

use Yii;
use app\models\AgendamentoVisita;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AgendamentoVisitaController implements the CRUD actions for AgendamentoVisita model.
 */
class AgendamentoVisitaController extends Controller
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
     * Lists all AgendamentoVisita models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => AgendamentoVisita::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AgendamentoVisita model.
     * @param integer $id
     * @param integer $apadrinhamentos_id
     * @param integer $apadrinhamentos_padrinho_id
     * @param integer $apadrinhamentos_afilhado_id
     * @param integer $ongs_horarios_visitas_id
     * @param integer $ongs_horarios_visitas_ongs_id
     * @return mixed
     */
    public function actionView($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id),
        ]);
    }

    /**
     * Creates a new AgendamentoVisita model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AgendamentoVisita();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'apadrinhamentos_id' => $model->apadrinhamentos_id, 'apadrinhamentos_padrinho_id' => $model->apadrinhamentos_padrinho_id, 'apadrinhamentos_afilhado_id' => $model->apadrinhamentos_afilhado_id, 'ongs_horarios_visitas_id' => $model->ongs_horarios_visitas_id, 'ongs_horarios_visitas_ongs_id' => $model->ongs_horarios_visitas_ongs_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing AgendamentoVisita model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @param integer $apadrinhamentos_id
     * @param integer $apadrinhamentos_padrinho_id
     * @param integer $apadrinhamentos_afilhado_id
     * @param integer $ongs_horarios_visitas_id
     * @param integer $ongs_horarios_visitas_ongs_id
     * @return mixed
     */
    public function actionUpdate($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id)
    {
        $model = $this->findModel($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id, 'apadrinhamentos_id' => $model->apadrinhamentos_id, 'apadrinhamentos_padrinho_id' => $model->apadrinhamentos_padrinho_id, 'apadrinhamentos_afilhado_id' => $model->apadrinhamentos_afilhado_id, 'ongs_horarios_visitas_id' => $model->ongs_horarios_visitas_id, 'ongs_horarios_visitas_ongs_id' => $model->ongs_horarios_visitas_ongs_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing AgendamentoVisita model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @param integer $apadrinhamentos_id
     * @param integer $apadrinhamentos_padrinho_id
     * @param integer $apadrinhamentos_afilhado_id
     * @param integer $ongs_horarios_visitas_id
     * @param integer $ongs_horarios_visitas_ongs_id
     * @return mixed
     */
    public function actionDelete($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id)
    {
        $this->findModel($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the AgendamentoVisita model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $apadrinhamentos_id
     * @param integer $apadrinhamentos_padrinho_id
     * @param integer $apadrinhamentos_afilhado_id
     * @param integer $ongs_horarios_visitas_id
     * @param integer $ongs_horarios_visitas_ongs_id
     * @return AgendamentoVisita the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $apadrinhamentos_id, $apadrinhamentos_padrinho_id, $apadrinhamentos_afilhado_id, $ongs_horarios_visitas_id, $ongs_horarios_visitas_ongs_id)
    {
        if (($model = AgendamentoVisita::findOne(['id' => $id, 'apadrinhamentos_id' => $apadrinhamentos_id, 'apadrinhamentos_padrinho_id' => $apadrinhamentos_padrinho_id, 'apadrinhamentos_afilhado_id' => $apadrinhamentos_afilhado_id, 'ongs_horarios_visitas_id' => $ongs_horarios_visitas_id, 'ongs_horarios_visitas_ongs_id' => $ongs_horarios_visitas_ongs_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
