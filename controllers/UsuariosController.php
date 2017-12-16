<?php

namespace app\controllers;

use Yii;
use app\models\Usuarios;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UsuariosController implements the CRUD actions for Usuarios model.
 */
class UsuariosController extends AppController
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
     * Lists all Usuarios models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Usuarios::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Usuarios model.
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
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Usuarios();

        if(Yii::$app->request->isPost){
            $model->pessoas_id = $this->getPessoaId();
            $model->excluido = false;
            $model->ongs_id = null;
        }

        $model->load(Yii::$app->request->post());

        if ($model->load(Yii::$app->request->post()) && $model->save(false)) {

            if($this->getPessoaTipo() === 'PADRINHO'){
                return $this->redirect(['/solicitacoes-apadrinhamento/create']);
            }
            else if($this->getPessoaTipo() === 'GESTOR'){
                return $this->redirect(['/ongs/create']);
            }

        } else {

            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Usuarios model.
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
     * Deletes an existing Usuarios model.
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
     * Finds the Usuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @param integer $pessoas_id
     * @return Usuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id, $pessoas_id)
    {
        if (($model = Usuarios::findOne(['id' => $id, 'pessoas_id' => $pessoas_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
