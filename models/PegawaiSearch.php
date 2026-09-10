<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pegawai;

/**
 * PegawaiSearch represents the model behind the search form of `backend\models\Pegawai`.
 */
class PegawaiSearch extends Pegawai
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_pegawai', 'nama', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'alamat', 'no_telpon', 'email', 'jabatan', 'masa_kerja', 'kenaikan_pangkat', 'kenaikan_gaji', 'foto'], 'safe'],
            [['usia'], 'integer'],
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
        $query = Pegawai::find();

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
            'tgl_lahir' => $this->tgl_lahir,
            'usia' => $this->usia,
            'kenaikan_pangkat' => $this->kenaikan_pangkat,
            'kenaikan_gaji' => $this->kenaikan_gaji,
        ]);

        $query->andFilterWhere(['like', 'nip_pegawai', $this->nip_pegawai])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'agama', $this->agama])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_telpon', $this->no_telpon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'jabatan', $this->jabatan])
            ->andFilterWhere(['like', 'masa_kerja', $this->masa_kerja])
            ->andFilterWhere(['like', 'foto', $this->foto]);

        return $dataProvider;
    }
}
