<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ApadrinhamentosDisponiveis */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos Disponiveis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamentos-disponiveis-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id], [
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
            'descricao',
            'excluido',
            'created',
            'modified',
            'pessoas_id',
        ],
    ]) ?>

</div>
