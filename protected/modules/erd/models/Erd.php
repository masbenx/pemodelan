<?php

/**
 * This is the model class for table "erd".
 *
 * The followings are the available columns in table 'erd':
 * @property integer $erd_id
 * @property string $erd_alias
 * @property string $erd_nama
 * @property string $erd_judul
 * @property string $erd_deskripsi
 * @property string $erd_tanggal
 * @property integer $anggota_id
 * @property integer $erd_status_id
 * @property integer $proyek_versi_id
 *
 * The followings are the available model relations:
 * @property ErdStatus $erdStatus
 * @property ProyekVersi $proyekVersi
 * @property ErdDiagram[] $erdDiagrams
 * @property ErdEntitas[] $erdEntitases
 * @property ErdEntitasKeDiagram[] $erdEntitasKeDiagrams
 * @property ErdResource[] $erdResources
 * @property ErdResourceKeDiagram[] $erdResourceKeDiagrams
 */
class Erd extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Erd the static model class
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
		return 'erd';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('erd_alias, erd_nama, erd_judul, erd_deskripsi, erd_tanggal, anggota_id, erd_status_id, proyek_versi_id', 'required'),
			array('anggota_id, erd_status_id, proyek_versi_id', 'numerical', 'integerOnly'=>true),
			array('erd_alias, erd_nama, erd_judul', 'length', 'max'=>32),
			array('erd_deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('erd_id, erd_alias, erd_nama, erd_judul, erd_deskripsi, erd_tanggal, anggota_id, erd_status_id, proyek_versi_id', 'safe', 'on'=>'search'),
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
                        'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
			'erdStatus' => array(self::BELONGS_TO, 'ErdStatus', 'erd_status_id'),
			'proyekVersi' => array(self::BELONGS_TO, 'ProyekVersi', 'proyek_versi_id'),
			'erdDiagrams' => array(self::HAS_MANY, 'ErdDiagram', 'erd_id'),
			'erdEntitases' => array(self::HAS_MANY, 'ErdEntitas', 'erd_id'),
			'erdEntitasKeDiagrams' => array(self::HAS_MANY, 'ErdEntitasKeDiagram', 'erd_id'),
			'erdResources' => array(self::HAS_MANY, 'ErdResource', 'erd_id'),
			'erdResourceKeDiagrams' => array(self::HAS_MANY, 'ErdResourceKeDiagram', 'erd_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'erd_id' => 'Erd',
			'erd_alias' => 'Erd Alias',
			'erd_nama' => 'Erd Nama',
			'erd_judul' => 'Erd Judul',
			'erd_deskripsi' => 'Erd Deskripsi',
			'erd_tanggal' => 'Erd Tanggal',
			'anggota_id' => 'Anggota',
			'erd_status_id' => 'Erd Status',
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

		$criteria->compare('erd_id',$this->erd_id);
		$criteria->compare('erd_alias',$this->erd_alias,true);
		$criteria->compare('erd_nama',$this->erd_nama,true);
		$criteria->compare('erd_judul',$this->erd_judul,true);
		$criteria->compare('erd_deskripsi',$this->erd_deskripsi,true);
		$criteria->compare('erd_tanggal',$this->erd_tanggal,true);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,true);
		$criteria->compare('erd_status.erd_status_nama',$this->erd_status_id,true);
		$criteria->compare('proyek_versi.proyek_versi_kode',$this->proyek_versi_id,true);
                
                $criteria->with = array('anggota','erdStatus','proyekVersi');
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}