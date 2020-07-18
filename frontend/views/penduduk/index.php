<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PendudukSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penduduks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penduduk-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penduduk', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_penduduk',
            'no_kk',
            'nik',
            'nama',
            'tempat_lahir',
            //'tanggal_lahir',
            //'alamat:ntext',
            //'rt',
            //'rw',
            //'desa_kelurahan',
            //'kecamatan',
            //'kabupaten',
            //'kelamin',
            //'shdk',
            //'agama',
            //'status',
            //'pendidikan_terakhir',
            //'pekerjaan',
            //'kewarganegaraan',
            //'nama_ibu',
            //'nama_ayah',
            //'email:email',
            //'telepon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
