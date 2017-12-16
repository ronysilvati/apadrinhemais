<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agendamento Visitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendamento-visita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Agendamento Visita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'excluido',
            'created',
            'modified',
            'apadrinhamentos_id',
            // 'apadrinhamentos_padrinho_id',
            // 'apadrinhamentos_afilhado_id',
            // 'ongs_horarios_visitas_id',
            // 'ongs_horarios_visitas_ongs_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
