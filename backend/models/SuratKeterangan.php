<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat_keterangan".
 *
 * @property int $id
 * @property string $jenis_surat
 * @property string $kode_surat
 * @property string $tahun
 * @property string $tanggal_pengajuan
 * @property string $keperluan
 * @property int $id_user
 * @property int $is_penduduk
 */
class SuratKeterangan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_keterangan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jenis_surat', 'kode_surat', 'tahun', 'keperluan', 'id_user', 'is_penduduk'], 'required'],
            [['jenis_surat', 'kode_surat', 'keperluan'], 'string'],
            [['tahun', 'tanggal_pengajuan'], 'safe'],
            [['id_user', 'is_penduduk'], 'integer'],
            [['jenis_surat'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jenis_surat' => 'Jenis Surat',
            'kode_surat' => 'Kode Surat',
            'tahun' => 'Tahun',
            'tanggal_pengajuan' => 'Tanggal Pengajuan',
            'keperluan' => 'Keperluan',
            'id_user' => 'Id User',
            'is_penduduk' => 'Is Penduduk',
        ];
    }
}
