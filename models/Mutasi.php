<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mutasi".
 *
 * @property int $id_mutasi
 * @property string $nip
 * @property string $jenis_mutasi
 * @property string $tanggal_mutasi
 * @property string $nomor_sk_mutasi
 */
class Mutasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mutasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'jenis_mutasi', 'tanggal_mutasi', 'nomor_sk_mutasi'], 'required'],
            [['tanggal_mutasi'], 'safe'],
            [['nip'], 'string', 'max' => 25],
            [['jenis_mutasi', 'nomor_sk_mutasi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_mutasi' => 'Id Mutasi',
            'nip' => 'Nip',
            'jenis_mutasi' => 'Jenis Mutasi',
            'tanggal_mutasi' => 'Tanggal Mutasi',
            'nomor_sk_mutasi' => 'Nomor Sk Mutasi',
        ];
    }

    public function getMutasi(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
