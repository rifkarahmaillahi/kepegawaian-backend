<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use kartik\select2\Select2;
use yii\helpers\ArrayHelper;
use backend\models\Pegawai;
use backend\models\Diklat;

/* @var $this yii\web\View */
/* @var $model backend\models\DiklatSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diklat-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div class="Searchh">
        <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                    <?= $form->field($model,'nip')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(Pegawai::find()->all(),'nip_pegawai','nama'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ...'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
            </div>
        </div>
            <div class="col-md-4">
            <div class="form-group">
                    <?= $form->field($model,'nama_diklat')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(Diklat::find()->all(),'nama_diklat','nama_diklat'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ...'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
            </div>
            </div>
        
 <div class="col-md-4">
<div class="form-group">
    <br/>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
       <?= Html::a('Reset', ['/diklat'], ['class' => 'btn btn-default']) ?>
        <?= Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
