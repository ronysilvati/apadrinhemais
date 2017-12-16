<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ongs */

$this->title = 'Efetuar doações';
$this->params['breadcrumbs'][] = ['label' => 'Home', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
