<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SuratKeteranganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Surat Keterangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="surat-keterangan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Surat Keterangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jenis_surat',
            'kode_surat',
            'tahun',
            'tanggal_pengajuan',
            //'keperluan:ntext',
            //'id_user',
            //'is_penduduk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
