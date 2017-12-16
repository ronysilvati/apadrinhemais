<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Apadrinhamentos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamentos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'padrinho_id' => $model->padrinho_id, 'afilhado_id' => $model->afilhado_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'padrinho_id' => $model->padrinho_id, 'afilhado_id' => $model->afilhado_id], [
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
            'apadrinhamentoscol',
            'padrinho_id',
            'afilhado_id',
        ],
    ]) ?>

</div>
