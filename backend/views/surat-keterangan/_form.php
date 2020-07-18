<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratKeterangan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jenis_surat')->dropDownList([ 'PINDAH' => 'PINDAH', 'SKPD' => 'SKPD', 'KELAHIRAN' => 'KELAHIRAN', 'KEMATIAN' => 'KEMATIAN', 'KTP SEMENTARA' => 'KTP SEMENTARA', 'USAHA' => 'USAHA', 'DOMISILI' => 'DOMISILI', 'TIDAK MAMPU' => 'TIDAK MAMPU', 'AHLI WARIS' => 'AHLI WARIS', 'IJIN KERAMAIAN' => 'IJIN KERAMAIAN', 'KUASA' => 'KUASA', 'PENGANTAR SKCK' => 'PENGANTAR SKCK', 'LAIN-LAIN' => 'LAIN-LAIN', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'kode_surat')->dropDownList([ 470 => '470', 580 => '580', 330 => '330', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tahun')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pengajuan')->textInput() ?>

    <?= $form->field($model, 'keperluan')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_user')->textInput() ?>

    <?= $form->field($model, 'is_penduduk')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
