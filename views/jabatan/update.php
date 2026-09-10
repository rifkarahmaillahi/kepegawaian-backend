<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatan */

$this->title = 'Ubah Jabatan: ' . $model->nip;
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_jabatan, 'url' => ['view', 'id' => $model->id_jabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jabatan-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
