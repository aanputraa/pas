<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Penduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'no_kk')->textInput() ?>

    <?= $form->field($model, 'nik')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

    <?= $form->field($model, 'alamat')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rt')->textInput() ?>

    <?= $form->field($model, 'rw')->textInput() ?>

    <?= $form->field($model, 'desa_kelurahan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kecamatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kabupaten')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kelamin')->dropDownList([ 'LAKI-LAKI' => 'LAKI-LAKI', 'PEREMPUAN' => 'PEREMPUAN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'shdk')->dropDownList([ 'KEPALA KELUARGA' => 'KEPALA KELUARGA', 'SUAMI' => 'SUAMI', 'ISTRI' => 'ISTRI', 'ANAK KANDUNG' => 'ANAK KANDUNG', 'ANAK TIRI' => 'ANAK TIRI', 'ORANGTUA' => 'ORANGTUA', 'MERTUA' => 'MERTUA', 'CUCU' => 'CUCU',  'SAUDARA KANDUNG' => 'SAUDARA KANDUNG', 'SAUDARA TIRI' => 'SAUDARA TIRI', 'FAMILI LAIN' => 'FAMILI LAIN',], ['prompt' => '']) ?>

    <?= $form->field($model, 'agama')->dropDownList([ 'ISLAM' => 'ISLAM', 'KRISTEN' => 'KRISTEN', 'HINDU' => 'HINDU', 'BUDHA' => 'BUDHA', 'KONGHUCU' => 'KONGHUCU', 'LAINNYA' => 'LAINNYA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'BELUM KAWIN' => 'BELUM KAWIN', 'KAWIN' => 'KAWIN', 'CERAI HIDUP' => 'CERAI HIDUP', 'CERAI MATI' => 'CERAI MATI', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pendidikan_terakhir')->dropDownList([ 'BELUM SEKOLAH' => 'BELUM SEKOLAH', 'SD/SEDERAJAT' => 'SD/SEDERAJAT', 'SMP/SEDERAJAT' => 'SMP/SEDERAJAT', 'SMA/SEDERAJAT' => 'SMA/SEDERAJAT', 'DIPLOMA' => 'DIPLOMA', 'SARJANA' => 'SARJANA', 'TIDAK SEKOLAH' => 'TIDAK SEKOLAH', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'pekerjaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kewarganegaraan')->dropDownList([ 'WNI' => 'WNI', 'WNA' => 'WNA', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'nama_ibu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_ayah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telepon')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
