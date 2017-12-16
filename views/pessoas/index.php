<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pessoas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Pessoas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nome',
            'nascimento',
            'tipo_pessoa',
            'excluido',
            // 'created',
            // 'modified',
            // 'profissao',
            // 'estado_civil',
            // 'total_pessoas_reside',
            // 'endereco',
            // 'celular',
            // 'email:email',
            // 'sexo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
