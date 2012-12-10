<?php

/**
 * This is the model class for table "alamat".
 *
 * The followings are the available columns in table 'alamat':
 * @property integer $alamat_id
 * @property string $alamat_perusahaan
 * @property string $alamat_nama
 * @property string $alamat_satu
 * @property string $alamat_dua
 * @property string $alamat_kota
 * @property integer $alamat_kodepos_id
 * @property integer $alamat_negara_id
 * @property integer $anggota_id
 * @property integer $alamat_propinsi_id
 *
 * The followings are the available model relations:
 * @property Anggota $anggota
 * @property AlamatKodepos $alamatKodepos
 * @property AlamatNegara $alamatNegara
 * @property AlamatPropinsi $alamatPropinsi
 * @property AlamatAnggota[] $alamatAnggotas
 */
class Alamat extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Alamat the static model class
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
		return 'alamat';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('alamat_id, alamat_perusahaan, alamat_nama, alamat_satu, alamat_dua, alamat_kota, alamat_kodepos_id, alamat_negara_id, anggota_id, alamat_propinsi_id', 'required'),
			array('alamat_id, alamat_kodepos_id, alamat_negara_id, anggota_id, alamat_propinsi_id', 'numerical', 'integerOnly'=>true),
			array('alamat_perusahaan', 'length', 'max'=>128),
			array('alamat_nama, alamat_kota', 'length', 'max'=>32),
			array('alamat_satu, alamat_dua', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('alamat_id, alamat_perusahaan, alamat_nama, alamat_satu, alamat_dua, alamat_kota, alamat_kodepos_id, alamat_negara_id, anggota_id, alamat_propinsi_id', 'safe', 'on'=>'search'),
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
			'alamatKodepos' => array(self::BELONGS_TO, 'AlamatKodepos', 'alamat_kodepos_id'),
			'alamatNegara' => array(self::BELONGS_TO, 'AlamatNegara', 'alamat_negara_id'),
			'alamatPropinsi' => array(self::BELONGS_TO, 'AlamatPropinsi', 'alamat_propinsi_id'),
			'alamatAnggotas' => array(self::HAS_MANY, 'AlamatAnggota', 'alamat_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'alamat_id' => 'Alamat',
			'alamat_perusahaan' => 'Alamat Perusahaan',
			'alamat_nama' => 'Alamat Nama',
			'alamat_satu' => 'Alamat Satu',
			'alamat_dua' => 'Alamat Dua',
			'alamat_kota' => 'Alamat Kota',
			'alamat_kodepos_id' => 'Alamat Kodepos',
			'alamat_negara_id' => 'Alamat Negara',
			'anggota_id' => 'Anggota',
			'alamat_propinsi_id' => 'Alamat Propinsi',
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

		$criteria->compare('alamat_id',$this->alamat_id);
		$criteria->compare('alamat_perusahaan',$this->alamat_perusahaan,true);
		$criteria->compare('alamat_nama',$this->alamat_nama,true);
		$criteria->compare('alamat_satu',$this->alamat_satu,true);
		$criteria->compare('alamat_dua',$this->alamat_dua,true);
		$criteria->compare('alamat_kota',$this->alamat_kota,true);
		$criteria->compare('alamat_kodepos_id',$this->alamat_kodepos_id);
		$criteria->compare('alamat_negara_id',$this->alamat_negara_id);
		$criteria->compare('anggota_id',$this->anggota_id);
		$criteria->compare('alamat_propinsi_id',$this->alamat_propinsi_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}