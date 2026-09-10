<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Jabatan */

$this->title = $model->id_jabatan;
$this->params['breadcrumbs'][] = ['label' => 'Jabatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-view">

    <div class="table">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_jabatan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_jabatan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Apakah anda yakin menghapus data ini ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id_jabatan',
            'nip',
              'jabatan0.nama',
            'jabatan',
            'eselon',
            'tmt_jabatan',
        ],
    ]) ?>

</div>
</div>
