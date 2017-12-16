<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Apadrinhamentos */

$this->title = 'Update Apadrinhamentos: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'padrinho_id' => $model->padrinho_id, 'afilhado_id' => $model->afilhado_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apadrinhamentos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
