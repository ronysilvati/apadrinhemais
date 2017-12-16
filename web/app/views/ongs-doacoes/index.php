<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ongs Doacoes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-doacoes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ongs Doacoes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'valor',
            'celular',
            'email:email',
            'confirmado',
            // 'excluido',
            // 'created',
            // 'modified',
            // 'pessoas_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
