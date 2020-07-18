<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Penduduk */

$this->title = $model->id_penduduk;
$this->params['breadcrumbs'][] = ['label' => 'Penduduks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="penduduk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_penduduk], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_penduduk], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_penduduk',
            'no_kk',
            'nik',
            'nama',
            'tempat_lahir',
            'tanggal_lahir',
            'alamat:ntext',
            'rt',
            'rw',
            'desa_kelurahan',
            'kecamatan',
            'kabupaten',
            'kelamin',
            'shdk',
            'agama',
            'status',
            'pendidikan_terakhir',
            'pekerjaan',
            'kewarganegaraan',
            'nama_ibu',
            'nama_ayah',
            'email:email',
            'telepon',
        ],
    ]) ?>

</div>
