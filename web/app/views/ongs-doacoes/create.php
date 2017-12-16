<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OngsDoacoes */

$this->title = 'Create Ongs Doacoes';
$this->params['breadcrumbs'][] = ['label' => 'Ongs Doacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-doacoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
