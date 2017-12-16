<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OngsDoacoes */

$this->title = 'Update Ongs Doacoes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ongs Doacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ongs-doacoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
