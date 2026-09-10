<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cuti;

/**
 * CutiSearch represents the model behind the search form of `backend\models\Cuti`.
 */
class CutiSearch extends Cuti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_cuti'], 'integer'],
            [['nip', 'jenis_cuti', 'nomor_surat_cuti', 'tanggal_cuti', 'keterangan'], 'safe'],
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
        $query = Cuti::find();

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
            'id_cuti' => $this->id_cuti,
            'tanggal_cuti' => $this->tanggal_cuti,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'jenis_cuti', $this->jenis_cuti])
            ->andFilterWhere(['like', 'nomor_surat_cuti', $this->nomor_surat_cuti])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
