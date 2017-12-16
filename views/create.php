<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OngDoacoes */
/* @var $form ActiveForm */
?>
<div class="create">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'valor') ?>
        <?= $form->field($model, 'celular') ?>
        <?= $form->field($model, 'pessoas_id') ?>
        <?= $form->field($model, 'confirmado') ?>
        <?= $form->field($model, 'excluido') ?>
        <?= $form->field($model, 'created') ?>
        <?= $form->field($model, 'modified') ?>
        <?= $form->field($model, 'email') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- create -->
