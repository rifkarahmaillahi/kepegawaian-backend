<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Diklat */

$this->title = $model->id_diklat;
$this->params['breadcrumbs'][] = ['label' => 'Diklats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="diklat-view">

       <div class="table">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_diklat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_diklat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_diklat',
            'nip',
            'diklat.nama',
            'nama_diklat',
            'jam',
            'tanggal_diklat',
            'penyelenggara',
            'tempat',
        ],
    ]) ?>

</div>
</div>
