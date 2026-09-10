<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Cuti */

$this->title = 'Create Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-create">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
