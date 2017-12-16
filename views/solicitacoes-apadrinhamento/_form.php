<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ongs;

/* @var $this yii\web\View */
/* @var $model app\models\SolicitacoesApadrinhamento */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitacoes-apadrinhamento-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col col-md-1 col-lg-1">
        <?=
        $form->field($model, 'qtd_pessoas_desejo_apadrinhar')
            ->dropDownList(
                array('1'=>'1','2'=>'2','3'=>'3')
            );
        ?>
    </div>
    <div class="col col-md-3 col-lg-3">
        <?=
        $form->field($model, 'sexo_apadrinhados')
            ->dropDownList(
                array('M'=>'MASCULINO','F'=>'FEMININO','A'=>'AMBOS')
            );
        ?>
    </div>
    <div class="col col-md-8 col-lg-8">
        <?= $form->field($model, 'motivo_apadrinhar')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-3 col-lg-3">
        <label> Escolher ONG</label>
        <?=
        Html::activeDropDownList($model, 'ongs_id',
            ArrayHelper::map(Ongs::find()->all(), 'id', 'nome_fantasia'),array('class'=>'form-control'))
        ?>
    </div>
    <div class="col col-md-12 col-lg-12">
        <div class="form-group">
        <br />
        <?= Html::submitButton($model->isNewRecord ? 'Solicitar' : 'Atualizar Solicitação', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
