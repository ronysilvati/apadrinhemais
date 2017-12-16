<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pessoas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pessoas-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col col-md-12 col-lg-12">
        <?= $form->field($model, 'nome')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-2 col-lg-2">
        <?= $form->field($model, 'nascimento')->textInput() ?>
    </div>

    <?php
    $model->tipo_pessoa = $tipo;
    ?>

    <div class="col col-md-7 col-lg-7">
        <?= $form->field($model, 'profissao')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-3 col-lg-3">
        <?=
        $form->field($model, 'estado_civil')
            ->dropDownList(
                array('SOLTEIRO'=>'SOLTEIRO','CASADO'=>'CASADO','DIVORCIADO'=>'DIVORCIADO')
            );
        ?>
    </div>

    <div class="col col-md-12 col-lg-12">
        <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-3 col-lg-3">
        <?= $form->field($model, 'celular')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-9 col-lg-9">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-3 col-lg-3">
        <?=
        $form->field($model, 'sexo')
            ->dropDownList(
                array('M'=>'MASCULINO','F'=>'FEMININO')
            );
        ?>
    </div>
    <?php
    if($tipo === 'PADRINHO'){
        ?>
        <div class="col col-md-2 col-lg-2">
            <?= $form->field($model, 'total_pessoas_reside')->textInput() ?>
        </div>
        <?php
    }

    ?>

    <div class="col col-md-12 col-lg-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>


<script>
    $('#pessoas-nascimento').mask('99/99/9999', { placeholder: '__/__/____' });
    $('#pessoas-celular').mask('99/99/9999', { placeholder: '(__)____ - _____' });
    $('#pessoas-total_pessoas_reside').mask('00', {reverse: true});
</script>



