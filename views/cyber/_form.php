<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\cyber */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cyber-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(),[
        'options' => ['placeholder' => 'Pilih Tanggal...'],
        'pluginOptions' => [
            'autoclose'=>true,
            'format' => 'dd-M-yyyy'
         ]
        ]);?>

    <?= $form->field($model, 'jekel')->dropDownList(
        array('L'=> 'Laki-Laki','P'=> 'Perempuan'))->label('Jenis Kelamin') ?>

    <?= $form->field($model, 'angkatan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
