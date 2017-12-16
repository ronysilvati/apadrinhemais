<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ApadrinhamentosDisponiveis */

$this->title = 'Create Apadrinhamentos Disponiveis';
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos Disponiveis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamentos-disponiveis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
