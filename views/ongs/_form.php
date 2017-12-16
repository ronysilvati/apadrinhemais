<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ongs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ongs-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cnpj')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nome_fantasia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'endereco')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'requisitos_apadrinhamento')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    $('#ongs-cnpj').mask('00.000.000/0000-00', {reverse: true});
</script>