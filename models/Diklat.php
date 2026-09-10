<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "diklat".
 *
 * @property int $id_diklat
 * @property string $nip
 * @property string $nama_diklat
 * @property string $jam
 * @property string $tanggal_diklat
 * @property string $penyelenggara
 * @property string $tempat
 */
class Diklat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'diklat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'nama_diklat', 'jam', 'tanggal_diklat', 'penyelenggara', 'tempat'], 'required'],
            [['tanggal_diklat'], 'safe'],
            [['nip'], 'string', 'max' => 25],
            [['nama_diklat'], 'string', 'max' => 20],
            [['jam'], 'string', 'max' => 5],
            [['penyelenggara', 'tempat'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_diklat' => 'Id Diklat',
            'nip' => 'Nip',
            'nama_diklat' => 'Nama Diklat',
            'jam' => 'Jam',
            'tanggal_diklat' => 'Tanggal Diklat',
            'penyelenggara' => 'Penyelenggara',
            'tempat' => 'Tempat',
        ];
    }

    public function getDiklat(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
