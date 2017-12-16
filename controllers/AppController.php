<?php
/**
 * Created by PhpStorm.
 * User: Rony Silva
 * Date: 14/12/2017
 * Time: 00:23
 */

namespace app\controllers;
use yii\web\Controller;
use Yii;
use yii\base\Exception;

class AppController extends Controller{

    protected function setPessoaId($pessoaId){
        if($pessoaId > 0){
            Yii::$app->session->set('pessoaId',$pessoaId);
        }
    }

    protected function getPessoaId(){
        return Yii::$app->session->get('pessoaId',null);
    }

    protected function setPessoaTipo($tipoPessoa){

        if(!empty($tipoPessoa)){
            Yii::$app->session->set('pessoaTipo',$tipoPessoa);
        }

    }

    public function getPessoaTipo(){
        return Yii::$app->session->get('pessoaTipo',null);
    }

    protected function connectPeople($model){
        try{
            $this->setPessoaId($model->id);
            $this->setPessoaTipo($model->tipo_pessoa);
        }
        catch(Exception $e){

        }
    }
}