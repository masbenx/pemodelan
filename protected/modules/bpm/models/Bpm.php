<?php

/**
 * This is the model class for table "bpm".
 *
 * The followings are the available columns in table 'bpm':
 * @property integer $bpm_id
 * @property string $bpm_alias
 * @property string $bpm_nama
 * @property string $bpm_judul
 * @property string $bpm_deskripsi
 * @property string $bpm_tanggal
 * @property integer $anggota_id
 * @property integer $bpm_status_id
 * @property integer $proyek_versi_id
 *
 * The followings are the available model relations:
 * @property BpmStatus $bpmStatus
 * @property ProyekVersi $proyekVersi
 * @property BpmDiagram[] $bpmDiagrams
 * @property BpmDivisi[] $bpmDivisis
 * @property BpmEntitas[] $bpmEntitases
 * @property BpmProses[] $bpmProses
 * @property BpmProsesKeProses[] $bpmProsesKeProses
 * @property BpmResource[] $bpmResources
 */
class Bpm extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Bpm the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'bpm';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bpm_alias, bpm_nama, bpm_judul, bpm_deskripsi, bpm_tanggal, anggota_id, bpm_status_id, proyek_versi_id', 'required'),
			array('anggota_id, bpm_status_id, proyek_versi_id', 'numerical', 'integerOnly'=>true),
			array('bpm_alias, bpm_nama, bpm_judul', 'length', 'max'=>32),
			array('bpm_deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bpm_id, bpm_alias, bpm_nama, bpm_judul, bpm_deskripsi, bpm_tanggal, anggota_id, bpm_status_id, proyek_versi_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'bpmStatus' => array(self::BELONGS_TO, 'BpmStatus', 'bpm_status_id'),
			'proyekVersi' => array(self::BELONGS_TO, 'ProyekVersi', 'proyek_versi_id'),
			'bpmDiagrams' => array(self::HAS_MANY, 'BpmDiagram', 'bpm_id'),
			'bpmDivisis' => array(self::HAS_MANY, 'BpmDivisi', 'bpm_id'),
			'bpmEntitases' => array(self::HAS_MANY, 'BpmEntitas', 'bpm_id'),
			'bpmProses' => array(self::HAS_MANY, 'BpmProses', 'bpm_id'),
			'bpmProsesKeProses' => array(self::HAS_MANY, 'BpmProsesKeProses', 'bpm_id'),
			'bpmResources' => array(self::HAS_MANY, 'BpmResource', 'bpm_id'),
			'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bpm_id' => 'Bpm',
			'bpm_alias' => 'Bpm Alias',
			'bpm_nama' => 'Bpm Nama',
			'bpm_judul' => 'Bpm Judul',
			'bpm_deskripsi' => 'Bpm Deskripsi',
			'bpm_tanggal' => 'Bpm Tanggal',
			'anggota_id' => 'Anggota',
			'bpm_status_id' => 'Bpm Status',
			'proyek_versi_id' => 'Proyek Versi',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('bpm_id',$this->bpm_id);
		$criteria->compare('bpm_alias',$this->bpm_alias,true);
		$criteria->compare('bpm_nama',$this->bpm_nama,true);
		$criteria->compare('bpm_judul',$this->bpm_judul,true);
		$criteria->compare('bpm_deskripsi',$this->bpm_deskripsi,true);
		$criteria->compare('bpm_tanggal',$this->bpm_tanggal,true);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,TRUE);
		$criteria->compare('BpmStatus.bpm_status_nama',$this->bpm_status_id,TRUE);
		$criteria->compare('ProyekVersi.proyek_versi_kode',$this->proyek_versi_id,TRUE);
		
                $criteria->with = array('anggota','bpmStatus','proyekVersi');
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}