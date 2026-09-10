<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Riwayatkeluarga;

/**
 * RiwayatkeluargaSearch represents the model behind the search form of `backend\models\Riwayatkeluarga`.
 */
class RiwayatkeluargaSearch extends Riwayatkeluarga
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_keluarga'], 'integer'],
            [['nip', 'nik', 'nama_keluarga', 'tempat_lahir', 'tgl_lahir', 'pendidikan', 'pekerjaan', 'status_hubungan'], 'safe'],
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
        $query = Riwayatkeluarga::find();

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
            'id_keluarga' => $this->id_keluarga,
            'tgl_lahir' => $this->tgl_lahir,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'nik', $this->nik])
            ->andFilterWhere(['like', 'nama_keluarga', $this->nama_keluarga])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['like', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['like', 'status_hubungan', $this->status_hubungan]);

        return $dataProvider;
    }
}
