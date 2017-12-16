<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ongs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ongs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php

        $onlyView = true;

        if(!isSet($lista) || ($lista !== true)){
            $onlyView = false;
            ?>
            <p>
                <?= Html::a('Create Ongs', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?php
        }
    ?>


    <?php

        if($onlyView){
            echo GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'cnpj',
                    'nome_fantasia',
                    'endereco',
                    'requisitos_apadrinhamento:ntext'
                ],
            ]);
        }
        else{
           echo  GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    'cnpj',
                    'nome_fantasia',
                    'endereco',
                    'requisitos_apadrinhamento:ntext',
                    // 'excluido',
                    // 'created',
                    // 'modified',

                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]);
        }
     ?>
</div>
