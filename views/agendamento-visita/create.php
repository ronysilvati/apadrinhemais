<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AgendamentoVisita */

$this->title = 'Create Agendamento Visita';
$this->params['breadcrumbs'][] = ['label' => 'Agendamento Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendamento-visita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
