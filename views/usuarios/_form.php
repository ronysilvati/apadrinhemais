<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="col col-md-6 col-lg-3">
        <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-6 col-lg-3">
        <?= $form->field($model, 'senha')->passwordInput(['maxlength' => true]) ?>
    </div>
    <div class="col col-md-12 col-lg-12">
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Criar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
