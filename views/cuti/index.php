<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cutis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuti-index">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
       <div class="search">         
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
</div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_cuti',
            'nip',
            'cuti.nama',
            'jenis_cuti',
            'nomor_surat_cuti',
            'tanggal_cuti',
            //'keterangan:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
</div>
