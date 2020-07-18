<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SuratKeteranganSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="surat-keterangan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jenis_surat') ?>

    <?= $form->field($model, 'kode_surat') ?>

    <?= $form->field($model, 'tahun') ?>

    <?= $form->field($model, 'tanggal_pengajuan') ?>

    <?php // echo $form->field($model, 'keperluan') ?>

    <?php // echo $form->field($model, 'id_user') ?>

    <?php // echo $form->field($model, 'is_penduduk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
