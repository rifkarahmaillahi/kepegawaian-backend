<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use backend\models\Pegawai;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\Diklat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="diklat-form">

    <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">General Elements</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
    <?php $form = ActiveForm::begin(); ?>

     <div class="col-md-12">
     <div class="form-group">
   <?= $form->field($model, 'nip')->widget(Select2::classname(),[
                                    'data' => ArrayHelper::map(Pegawai::find()->all(),'nip_pegawai','nama'),
                                    'language' => 'en',
                                    'options' => ['placeholder' => 'Pilih ..'],
                                    'pluginOptions' => ['allowClear' => true],
                                  ]); ?>
</div>
<div class="form-group">
    <?= $form->field($model, 'nama_diklat')->textInput(['maxlength' => true]) ?>
</div>
<div class="form-group">
    <?= $form->field($model, 'jam')->textInput(['maxlength' => true]) ?>
</div>
<div class="form-group">
    <?= $form->field($model, 'tanggal_diklat')->widget(DatePicker::classname(),[
            'pluginOptions' =>[
            'autoclose' =>true,
            'format' => 'yyyy-mm-dd',
            'value' =>date('d-M-Y',strtotime('+2 days')),                
        ]
    ] );
    ?> 
</div>
<div class="form-group">
    <?= $form->field($model, 'penyelenggara')->textInput(['maxlength' => true]) ?>
</div>
<div class="form-group">
    <?= $form->field($model, 'tempat')->textInput(['maxlength' => true]) ?>
</div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
