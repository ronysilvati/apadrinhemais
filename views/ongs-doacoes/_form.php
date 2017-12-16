<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ongs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ongs-doacoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col col-md-2 col-lg-2">
        <?= $form->field($model, 'valor') ?>
    </div>
    <div class="col col-md-3 col-lg-3">
        <?= $form->field($model, 'celular') ?>
    </div>
    <div class="col col-md-5 col-lg-5">
        <?= $form->field($model, 'email') ?>
    </div>
    <div class="col col-md-12 col-lg-12">
        <div class="form-group">
            <?= Html::submitButton('Registrar Doação', ['class' => 'btn btn-primary']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

<script>


    $('#ongsdoacoes-valor').mask('000.000.000.000.000,00', {reverse: true});



</script>
