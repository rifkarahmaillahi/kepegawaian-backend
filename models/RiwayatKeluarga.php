<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_keluarga".
 *
 * @property int $id_keluarga
 * @property string $nip
 * @property string $nik
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $pendidikan
 * @property string $pekerjaan
 * @property string $status_hubungan
 */
class RiwayatKeluarga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_keluarga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nik', 'nama_keluarga', 'tempat_lahir', 'tgl_lahir', 'pendidikan', 'pekerjaan', 'status_hubungan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nip', 'status_hubungan'], 'string', 'max' => 20],
            [['nik', 'nama_keluarga', 'tempat_lahir'], 'string', 'max' => 50],
            [['pendidikan', 'pekerjaan'], 'string', 'max' => 30],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_keluarga' => 'Id Keluarga',
            'nip' => 'Nip',
            'nik' => 'Nik',
            'nama_keluarga' => 'Nama Keluarga',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'pendidikan' => 'Pendidikan',
            'pekerjaan' => 'Pekerjaan',
            'status_hubungan' => 'Status Hubungan',
        ];
    }

    public function getKeluarga(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
