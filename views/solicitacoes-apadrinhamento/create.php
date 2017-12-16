<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\SolicitacoesApadrinhamento */

$this->title = 'Preencher formulário de  solicitação de apadrinhamento';
$this->params['breadcrumbs'][] = ['label' => 'Solicitacoes Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitacoes-apadrinhamento-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
