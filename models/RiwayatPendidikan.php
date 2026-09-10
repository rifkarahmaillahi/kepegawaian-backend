<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_pendidikan".
 *
 * @property int $id_pendidikan
 * @property string $nip
 * @property string $tingkat
 * @property string $nama_sekolah
 * @property string $jurusan
 * @property string $tahun_lulus
 */
class RiwayatPendidikan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pendidikan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'tingkat', 'nama_sekolah', 'jurusan', 'tahun_lulus'], 'required'],
            [['nip', 'tingkat'], 'string', 'max' => 20],
            [['nama_sekolah', 'jurusan'], 'string', 'max' => 50],
            [['tahun_lulus'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pendidikan' => 'Id Pendidikan',
            'nip' => 'Nip',
            'tingkat' => 'Tingkat',
            'nama_sekolah' => 'Nama Sekolah',
            'jurusan' => 'Jurusan',
            'tahun_lulus' => 'Tahun Lulus',
        ];
    }

    public function getPendidikan(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
