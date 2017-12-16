<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Solicitações Apadrinhamento';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitacoes-apadrinhamento-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Criar solicitação de Apadrinhamento', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'motivo_apadrinhar',
            'status_solicitacao',
            // 'excluido',
            // 'created',
            // 'modified',
            // 'pessoas_id',
            // 'ongs_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
