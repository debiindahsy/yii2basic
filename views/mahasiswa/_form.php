<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_mahasiswa')->textInput(['maxlength' => true]) ?>

    <?php $model->isNewRecord==1? $model->jenis_kelamin='L':$model->jenis_kelamin; ?>
		<?= $form->field($model, 'jenis_kelamin')->radioList(array('Laki-Laki'=>'Laki-laki', 'Perempuan'=>'Perempuan'))->label('Jenis Kelamin') ?>

    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(),[
    'name' => 'dp_2',
    'type' => DatePicker::TYPE_COMPONENT_PREPEND,
    'value' => '2000-12-02',
    'pluginOptions' => [
        'autoclose'=>true,
        'format' => 'yyyy-mm-dd'
    ]
    ]); ?>

    <?= $form->field($model, 'id_provinsi')->textInput() ?>

    <?= $form->field($model, 'id_kota')->textInput() ?>

    <?= $form->field($model, 'id_jurusan')->textInput() ?>

    <?= $form->field($model, 'id_prodi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
