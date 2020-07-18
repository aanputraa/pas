<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\JenisSuratSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jenis Surat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-surat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Jenis Surat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama',
            'kode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
