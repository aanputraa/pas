<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SuratKeterangan;

/**
 * SuratKeteranganSearch represents the model behind the search form of `backend\models\SuratKeterangan`.
 */
class SuratKeteranganSearch extends SuratKeterangan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'is_penduduk'], 'integer'],
            [['jenis_surat', 'kode_surat', 'tahun', 'tanggal_pengajuan', 'keperluan'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = SuratKeterangan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'tahun' => $this->tahun,
            'tanggal_pengajuan' => $this->tanggal_pengajuan,
            'id_user' => $this->id_user,
            'is_penduduk' => $this->is_penduduk,
        ]);

        $query->andFilterWhere(['like', 'jenis_surat', $this->jenis_surat])
            ->andFilterWhere(['like', 'kode_surat', $this->kode_surat])
            ->andFilterWhere(['like', 'keperluan', $this->keperluan]);

        return $dataProvider;
    }
}
