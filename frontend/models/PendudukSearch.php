<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Penduduk;

/**
 * PendudukSearch represents the model behind the search form of `frontend\models\Penduduk`.
 */
class PendudukSearch extends Penduduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_penduduk', 'no_kk', 'nik', 'rt', 'rw', 'telepon'], 'integer'],
            [['nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'desa_kelurahan', 'kecamatan', 'kabupaten', 'kelamin', 'shdk', 'agama', 'status', 'pendidikan_terakhir', 'pekerjaan', 'kewarganegaraan', 'nama_ibu', 'nama_ayah', 'email'], 'safe'],
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
        $query = Penduduk::find();

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
            'id_penduduk' => $this->id_penduduk,
            'no_kk' => $this->no_kk,
            'nik' => $this->nik,
            'tanggal_lahir' => $this->tanggal_lahir,
            'rt' => $this->rt,
            'rw' => $this->rw,
            'telepon' => $this->telepon,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'desa_kelurahan', $this->desa_kelurahan])
            ->andFilterWhere(['like', 'kecamatan', $this->kecamatan])
            ->andFilterWhere(['like', 'kabupaten', $this->kabupaten])
            ->andFilterWhere(['like', 'kelamin', $this->kelamin])
            ->andFilterWhere(['like', 'shdk', $this->shdk])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'pendidikan_terakhir', $this->pendidikan_terakhir])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'nama_ayah', $this->nama_ayah])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
