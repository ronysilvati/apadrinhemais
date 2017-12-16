<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\OngDoacoes */

$this->title = 'Create Ong Doacoes';
$this->params['breadcrumbs'][] = ['label' => 'Ong Doacoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ong-doacoes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
