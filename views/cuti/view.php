<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Cuti */

$this->title = $model->id_cuti;
$this->params['breadcrumbs'][] = ['label' => 'Cutis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-view">

  <div class="table">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_cuti], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_cuti], [
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
            //'id_cuti',
            'nip',
            'cuti.nama',
            'jenis_cuti',
            'nomor_surat_cuti',
            'tanggal_cuti',
            'keterangan:ntext',
        ],
    ]) ?>

</div>
</div>
