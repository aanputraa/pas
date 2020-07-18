<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jenis_surat".
 *
 * @property int $id
 * @property string $nama
 * @property string $kode
 *
 * @property SuratKeterangan $suratKeterangan
 */
class JenisSurat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jenis_surat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kode'], 'required'],
            [['kode'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['nama'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'kode' => 'Kode',
        ];
    }

    /**
     * Gets query for [[SuratKeterangan]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuratKeterangan()
    {
        return $this->hasOne(SuratKeterangan::className(), ['id_jenissurat' => 'id']);
    }
}
