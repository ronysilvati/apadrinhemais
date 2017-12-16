<?php

namespace app\controllers;

use Yii;
use app\models\Pessoas;
use app\models\Usuarios;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PessoasController implements the CRUD actions for Pessoas model.
 */
class PessoasController extends AppController
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
     * Lists all Pessoas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Pessoas::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pessoas model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function actionCreatePadrinho()
    {
        $tipo               = 'PADRINHO';
        $model              = new Pessoas();
        $model->scenario    = Pessoas::SCENARIO_PADRINHO;
        $model->tipo_pessoa = $tipo;
        $isNewRecord        = $model->isNewRecord;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            if($isNewRecord){
                $this->connectPeople($model);

                return $this->redirect(['/usuarios/create']);
            }
            else{
                return $this->redirect(['view', 'id' => $model->id]);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
                'tipo'  => $tipo
            ]);
        }
    }

    public function actionCreateApadrinhado()
    {
        $tipo   = 'APADRINHADO';
        $model = new Pessoas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'tipo'  => $tipo
            ]);
        }
    }

    public function actionCreateGestor()
    {
        $tipo   = 'GESTOR';
        $model = new Pessoas();
        $model->scenario    = Pessoas::SCENARIO_PADRINHO;
        $model->tipo_pessoa = $tipo;


        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $this->connectPeople($model);

            return $this->redirect(['/usuarios/create']);
        } else {
            return $this->render('create', [
                'model' => $model,
                'tipo'  => $tipo
            ]);
        }
    }

    /**
     * Updates an existing Pessoas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Pessoas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pessoas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pessoas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pessoas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
