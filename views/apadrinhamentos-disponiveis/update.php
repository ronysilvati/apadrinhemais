<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ApadrinhamentosDisponiveis */

$this->title = 'Update Apadrinhamentos Disponiveis: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos Disponiveis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="apadrinhamentos-disponiveis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
