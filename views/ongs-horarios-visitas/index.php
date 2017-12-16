<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ongs Horarios Visitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-horarios-visitas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ongs Horarios Visitas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'horario',
            'excluido',
            'created',
            'modified',
            // 'ongs_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
