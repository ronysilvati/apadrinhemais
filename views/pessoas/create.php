<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pessoas */

$screenTitle = 'Criar '.ucfirst(strtolower($tipo));

$this->title = $screenTitle;
$this->params['breadcrumbs'][] = ['label' => 'Pessoas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pessoas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'tipo'  => $tipo
    ]) ?>

</div>
