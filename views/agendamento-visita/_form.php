<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AgendamentoVisita */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="agendamento-visita-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'excluido')->textInput() ?>

    <?= $form->field($model, 'created')->textInput() ?>

    <?= $form->field($model, 'modified')->textInput() ?>

    <?= $form->field($model, 'apadrinhamentos_id')->textInput() ?>

    <?= $form->field($model, 'apadrinhamentos_padrinho_id')->textInput() ?>

    <?= $form->field($model, 'apadrinhamentos_afilhado_id')->textInput() ?>

    <?= $form->field($model, 'ongs_horarios_visitas_id')->textInput() ?>

    <?= $form->field($model, 'ongs_horarios_visitas_ongs_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
