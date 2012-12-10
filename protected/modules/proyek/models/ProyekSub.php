<?php

/**
 * This is the model class for table "proyek_sub".
 *
 * The followings are the available columns in table 'proyek_sub':
 * @property integer $proyek_sub_id
 * @property string $proyek_sub_alias
 * @property string $proyek_sub_judul
 * @property string $proyek_sub_deskripsi
 * @property string $proyek_sub_abstrak
 * @property string $proyek_sub_tanggal_mulai
 * @property string $proyek_sub_tanggal_target
 * @property string $proyek_sub_tanggal_selesai
 * @property integer $proyek_versi_id
 * @property integer $anggota_id
 *
 * The followings are the available model relations:
 * @property ProyekErrorLapor[] $proyekErrorLapors
 * @property ProyekHasil[] $proyekHasils
 * @property ProyekVersi $proyekVersi
 */
class ProyekSub extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekSub the static model class
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
		return 'proyek_sub';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_sub_alias, proyek_sub_judul, proyek_sub_deskripsi, proyek_sub_abstrak, proyek_sub_tanggal_mulai, proyek_sub_tanggal_target, proyek_sub_tanggal_selesai, proyek_versi_id, anggota_id', 'required'),
			array('proyek_versi_id, anggota_id', 'numerical', 'integerOnly'=>true),
			array('proyek_sub_alias, proyek_sub_judul, proyek_sub_deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_sub_id, proyek_sub_alias, proyek_sub_judul, proyek_sub_deskripsi, proyek_sub_abstrak, proyek_sub_tanggal_mulai, proyek_sub_tanggal_target, proyek_sub_tanggal_selesai, proyek_versi_id, anggota_id', 'safe', 'on'=>'search'),
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
			'proyekErrorLapors' => array(self::HAS_MANY, 'ProyekErrorLapor', 'proyek_sub_id'),
			'proyekHasils' => array(self::HAS_MANY, 'ProyekHasil', 'proyek_sub_id'),
			'proyekVersi' => array(self::BELONGS_TO, 'ProyekVersi', 'proyek_versi_id'),
                        'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proyek_sub_id' => 'Proyek Sub',
			'proyek_sub_alias' => 'Proyek Sub Alias',
			'proyek_sub_judul' => 'Proyek Sub Judul',
			'proyek_sub_deskripsi' => 'Proyek Sub Deskripsi',
			'proyek_sub_abstrak' => 'Proyek Sub Abstrak',
			'proyek_sub_tanggal_mulai' => 'Proyek Sub Tanggal Mulai',
			'proyek_sub_tanggal_target' => 'Proyek Sub Tanggal Target',
			'proyek_sub_tanggal_selesai' => 'Proyek Sub Tanggal Selesai',
			'proyek_versi_id' => 'Proyek Versi',
			'anggota_id' => 'Anggota',
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

		$criteria->compare('proyek_sub_id',$this->proyek_sub_id);
		$criteria->compare('proyek_sub_alias',$this->proyek_sub_alias,true);
		$criteria->compare('proyek_sub_judul',$this->proyek_sub_judul,true);
		$criteria->compare('proyek_sub_deskripsi',$this->proyek_sub_deskripsi,true);
		$criteria->compare('proyek_sub_abstrak',$this->proyek_sub_abstrak,true);
		$criteria->compare('proyek_sub_tanggal_mulai',$this->proyek_sub_tanggal_mulai,true);
		$criteria->compare('proyek_sub_tanggal_target',$this->proyek_sub_tanggal_target,true);
		$criteria->compare('proyek_sub_tanggal_selesai',$this->proyek_sub_tanggal_selesai,true);
		$criteria->compare('proyekVersi.proyek_versi_kode',$this->proyek_versi_id,TRUE);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,TRUE);

                $criteria->with = array('proyekVersi','anggota');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}