<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property int $id_jabatan
 * @property string $nip
 * @property string $jabatan
 * @property string $eselon
 * @property string $tmt_jabatan
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'jabatan', 'eselon', 'tmt_jabatan'], 'required'],
            [['tmt_jabatan'], 'safe'],
            [['nip'], 'string', 'max' => 25],
            [['jabatan'], 'string', 'max' => 20],
            [['eselon'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jabatan' => 'Id Jabatan',
            'nip' => 'Nip',
            'jabatan' => 'Jabatan',
            'eselon' => 'Eselon',
            'tmt_jabatan' => 'Tamat Jabatan',
        ];
    }

    public function getJabatan0(){
        return $this->hasOne(Pegawai::className(),['nip_pegawai'=>'nip']);
    }
}
