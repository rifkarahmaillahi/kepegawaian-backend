<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Riwayatpendidikan;

/**
 * RiwayatpendidikanSearch represents the model behind the search form of `backend\models\Riwayatpendidikan`.
 */
class RiwayatpendidikanSearch extends Riwayatpendidikan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pendidikan'], 'integer'],
            [['nip', 'tingkat', 'nama_sekolah', 'jurusan', 'tahun_lulus'], 'safe'],
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
        $query = Riwayatpendidikan::find();

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
            'id_pendidikan' => $this->id_pendidikan,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'tingkat', $this->tingkat])
            ->andFilterWhere(['like', 'nama_sekolah', $this->nama_sekolah])
            ->andFilterWhere(['like', 'jurusan', $this->jurusan])
            ->andFilterWhere(['like', 'tahun_lulus', $this->tahun_lulus]);

        return $dataProvider;
    }
}
