<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Penduduk */

$this->title = 'Update Data Penduduk : ' . $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Penduduk', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id_penduduk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penduduk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
