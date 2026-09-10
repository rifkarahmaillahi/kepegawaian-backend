<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property string $nip
 * @property string $nama
 * @property string $tempat_lahir
 * @property string $tgl_lahir
 * @property string $agama
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $no_telpon
 * @property string $email
 * @property int $usia
 * @property string $jabatan
 * @property string $masa_kerja
 * @property string $kenaikan_pangkat
 * @property string $kenaikan_gaji
 * @property string $foto
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip_pegawai', 'nama', 'tempat_lahir', 'tgl_lahir', 'agama', 'jenis_kelamin', 'alamat', 'no_telpon', 'email', 'usia', 'jabatan', 'masa_kerja', /*'kenaikan_pangkat', 'kenaikan_gaji',*/ 'foto'], 'required'],
            [['tgl_lahir', 'kenaikan_pangkat', 'kenaikan_gaji'], 'safe'],
            [['alamat'], 'string'],
            [['usia'], 'integer'],
            [['nip_pegawai', 'agama', 'masa_kerja'], 'string', 'max' => 20],
            [['nama', 'tempat_lahir', 'email', 'jabatan'], 'string', 'max' => 50],
            [['jenis_kelamin'], 'string', 'max' => 25],
            [['no_telpon'], 'string', 'max' => 13],
            [['foto'], 'string', 'max' => 100],
              [['file'],'file'],
            [['nip_pegawai'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nip_pegawai' => 'Nip',
            'nama' => 'Nama',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tanggal Lahir',
            'agama' => 'Agama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'no_telpon' => 'No Telpon',
            'email' => 'Email',
            'usia' => 'Usia',
            'jabatan' => 'Jabatan',
            'masa_kerja' => 'Masa Kerja',
            'kenaikan_pangkat' => 'Tanggal Kenaikan Pangkat',
            'kenaikan_gaji' => 'Tanggal Kenaikan Gaji',
            'file' => 'Foto',
        ];
    }
}
