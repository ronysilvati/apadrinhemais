<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AgendamentoVisita */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Agendamento Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendamento-visita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'apadrinhamentos_id' => $model->apadrinhamentos_id, 'apadrinhamentos_padrinho_id' => $model->apadrinhamentos_padrinho_id, 'apadrinhamentos_afilhado_id' => $model->apadrinhamentos_afilhado_id, 'ongs_horarios_visitas_id' => $model->ongs_horarios_visitas_id, 'ongs_horarios_visitas_ongs_id' => $model->ongs_horarios_visitas_ongs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'apadrinhamentos_id' => $model->apadrinhamentos_id, 'apadrinhamentos_padrinho_id' => $model->apadrinhamentos_padrinho_id, 'apadrinhamentos_afilhado_id' => $model->apadrinhamentos_afilhado_id, 'ongs_horarios_visitas_id' => $model->ongs_horarios_visitas_id, 'ongs_horarios_visitas_ongs_id' => $model->ongs_horarios_visitas_ongs_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'excluido',
            'created',
            'modified',
            'apadrinhamentos_id',
            'apadrinhamentos_padrinho_id',
            'apadrinhamentos_afilhado_id',
            'ongs_horarios_visitas_id',
            'ongs_horarios_visitas_ongs_id',
        ],
    ]) ?>

</div>
