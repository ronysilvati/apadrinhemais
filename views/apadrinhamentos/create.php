<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Apadrinhamentos */

$this->title = 'Create Apadrinhamentos';
$this->params['breadcrumbs'][] = ['label' => 'Apadrinhamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apadrinhamentos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
