<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cuti".
 *
 * @property int $id_cuti
 * @property string $nip
 * @property string $jenis_cuti
 * @property string $nomor_surat_cuti
 * @property string $tanggal_cuti
 * @property string $keterangan
 */
class Cuti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'jenis_cuti', 'nomor_surat_cuti', 'tanggal_cuti', 'keterangan'], 'required'],
            [['tanggal_cuti'], 'safe'],
            [['keterangan'], 'string'],
            [['nip'], 'string', 'max' => 25],
            [['jenis_cuti', 'nomor_surat_cuti'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_cuti' => 'Id Cuti',
            'nip' => 'Nip',
            'jenis_cuti' => 'Jenis Cuti',
            'nomor_surat_cuti' => 'Nomor Surat Cuti',
            'tanggal_cuti' => 'Tanggal Cuti',
            'keterangan' => 'Keterangan',
        ];
    }

    public function getCuti(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
