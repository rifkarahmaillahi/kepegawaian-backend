<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Diklat */

$this->title = 'Update Diklat: ' . $model->id_diklat;
$this->params['breadcrumbs'][] = ['label' => 'Diklats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_diklat, 'url' => ['view', 'id' => $model->id_diklat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="diklat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
