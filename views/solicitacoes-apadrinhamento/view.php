<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SolicitacoesApadrinhamento */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Solicitacoes Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitacoes-apadrinhamento-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id, 'ongs_id' => $model->ongs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id, 'pessoas_id' => $model->pessoas_id, 'ongs_id' => $model->ongs_id], [
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
            'qtd_pessoas_desejo_apadrinhar',
            'sexo_apadrinhados',
            'motivo_apadrinhar',
            'status_solicitacao',
            'excluido',
            'created',
            'modified',
            'pessoas_id',
            'ongs_id',
        ],
    ]) ?>

</div>
