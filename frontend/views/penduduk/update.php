<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penduduk */

$this->title = 'Update Penduduk: ' . $model->id_penduduk;
$this->params['breadcrumbs'][] = ['label' => 'Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_penduduk, 'url' => ['view', 'id' => $model->id_penduduk]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penduduk-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
