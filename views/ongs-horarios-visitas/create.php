<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OngsHorariosVisitas */

$this->title = 'Create Ongs Horarios Visitas';
$this->params['breadcrumbs'][] = ['label' => 'Ongs Horarios Visitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-horarios-visitas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
