<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AgendamentoVisita */

$this->title = 'Update Agendamento Visita: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Agendamento Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'apadrinhamentos_id' => $model->apadrinhamentos_id, 'apadrinhamentos_padrinho_id' => $model->apadrinhamentos_padrinho_id, 'apadrinhamentos_afilhado_id' => $model->apadrinhamentos_afilhado_id, 'ongs_horarios_visitas_id' => $model->ongs_horarios_visitas_id, 'ongs_horarios_visitas_ongs_id' => $model->ongs_horarios_visitas_ongs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agendamento-visita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
