<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pangkat".
 *
 * @property int $id_pangkat
 * @property string $nip
 * @property string $pangkat
 * @property string $golongan
 * @property string $tmt_pangkat
 */
class Pangkat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pangkat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'pangkat', 'golongan', 'tmt_pangkat'], 'required'],
            [['tmt_pangkat'], 'safe'],
            [['nip'], 'string', 'max' => 25],
            [['pangkat'], 'string', 'max' => 20],
            [['golongan'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pangkat' => 'Id Pangkat',
            'nip' => 'Nip',
            'pangkat' => 'Pangkat',
            'golongan' => 'Golongan',
            'tmt_pangkat' => 'Tmt Pangkat',
        ];
    }

     public function getPangkat0(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
