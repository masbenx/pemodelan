<?php

/**
 * This is the model class for table "proyek_versi_status".
 *
 * The followings are the available columns in table 'proyek_versi_status':
 * @property integer $proyek_versi_status_id
 * @property string $proyek_versi_status_nama
 *
 * The followings are the available model relations:
 * @property ProyekVersi[] $proyekVersis
 */
class ProyekVersiStatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekVersiStatus the static model class
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
		return 'proyek_versi_status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_versi_status_nama', 'required'),
			array('proyek_versi_status_nama', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_versi_status_id, proyek_versi_status_nama', 'safe', 'on'=>'search'),
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
			'proyekVersis' => array(self::HAS_MANY, 'ProyekVersi', 'proyek_versi_status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proyek_versi_status_id' => 'Proyek Versi Status',
			'proyek_versi_status_nama' => 'Proyek Versi Status Nama',
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

		$criteria->compare('proyek_versi_status_id',$this->proyek_versi_status_id);
		$criteria->compare('proyek_versi_status_nama',$this->proyek_versi_status_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}