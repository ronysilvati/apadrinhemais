<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SolicitacoesApadrinhamento */

$this->title = 'Update Solicitacoes Apadrinhamento: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Solicitacoes Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id, 'ongs_id' => $model->ongs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="solicitacoes-apadrinhamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
