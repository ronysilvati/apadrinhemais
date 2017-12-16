<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Apadrinhamentos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamentos-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Apadrinhamentos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'excluido',
            'created',
            'modified',
            'apadrinhamentoscol',
            // 'padrinho_id',
            // 'afilhado_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
