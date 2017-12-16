<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ongs */

$this->title = 'Cadastrar ONG';
$this->params['breadcrumbs'][] = ['label' => 'Ongs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
