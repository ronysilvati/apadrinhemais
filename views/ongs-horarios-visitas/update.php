<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\OngsHorariosVisitas */

$this->title = 'Update Ongs Horarios Visitas: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ongs Horarios Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'ongs_id' => $model->ongs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ongs-horarios-visitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
