<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JabatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jabatans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jabatan-index">

   <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
       <div class="search">         
    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>
</div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'id_jabatan',
            'nip',
             'jabatan0.nama',
            'jabatan',
            'eselon',
            'tmt_jabatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
</div>
</div>
