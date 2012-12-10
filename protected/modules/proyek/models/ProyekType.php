<?php

/**
 * This is the model class for table "proyek_type".
 *
 * The followings are the available columns in table 'proyek_type':
 * @property integer $proyek_type_id
 * @property string $proyek_type_nama
 *
 * The followings are the available model relations:
 * @property Proyek[] $proyeks
 */
class ProyekType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekType the static model class
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
		return 'proyek_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_type_nama', 'required'),
			array('proyek_type_nama', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_type_id, proyek_type_nama', 'safe', 'on'=>'search'),
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
			'proyeks' => array(self::HAS_MANY, 'Proyek', 'proyek_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proyek_type_id' => 'Proyek Type',
			'proyek_type_nama' => 'Proyek Type Nama',
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

		$criteria->compare('proyek_type_id',$this->proyek_type_id);
		$criteria->compare('proyek_type_nama',$this->proyek_type_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}