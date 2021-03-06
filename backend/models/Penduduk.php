<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penduduk".
 *
 * @property int $id_penduduk
 * @property int $no_kk
 * @property int $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property int $rt
 * @property int $rw
 * @property string $desa_kelurahan
 * @property string $kecamatan
 * @property string $kabupaten
 * @property string $kelamin
 * @property string $shdk
 * @property string $agama
 * @property string $status
 * @property string $pendidikan_terakhir
 * @property string $pekerjaan
 * @property string $kewarganegaraan
 * @property string|null $nama_ibu
 * @property string|null $nama_ayah
 * @property string $email
 * @property int $telepon
 */
class Penduduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penduduk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_kk', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'rt', 'rw', 'desa_kelurahan', 'kecamatan', 'kabupaten', 'kelamin', 'shdk', 'agama', 'status', 'pendidikan_terakhir', 'pekerjaan', 'kewarganegaraan', 'email', 'telepon'], 'required'],
            [['no_kk', 'nik', 'rt', 'rw', 'telepon'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['alamat', 'kelamin', 'shdk', 'agama', 'status', 'pendidikan_terakhir', 'kewarganegaraan'], 'string'],
            [['nama', 'tempat_lahir', 'desa_kelurahan', 'kecamatan', 'kabupaten', 'pekerjaan', 'nama_ibu', 'nama_ayah', 'email'], 'string', 'max' => 100],
            [['nik'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            //'id_penduduk' => 'Id Penduduk',
            'no_kk' => 'NOMOR KK',
            'nik' => 'NIK',
            'nama' => 'NAMA',
            'tempat_lahir' => 'TEMPAT LAHIR',
            'tanggal_lahir' => 'TANGGAL LAHIR',
            'alamat' => 'ALAMAT',
            'rt' => 'RT',
            'rw' => 'RW',
            'desa_kelurahan' => 'DESA / KELURAHAN',
            'kecamatan' => 'KECAMATAN',
            'kabupaten' => 'KABUPATEN',
            'kelamin' => 'KELAMIN',
            'shdk' => 'STATUS DALAM KELUARGA',
            'agama' => 'AGAMA',
            'status' => 'STATUS PERNIKAHAN',
            'pendidikan_terakhir' => 'PENDIDIKAN TERAKHIR',
            'pekerjaan' => 'PEKERJAAN',
            'kewarganegaraan' => 'KEWARGANEGARAAN',
            'nama_ibu' => 'NAMA IBU',
            'nama_ayah' => 'NAMA AYAH',
            'email' => 'EMAIL',
            'telepon' => 'TELEPON',
        ];
    }
}
