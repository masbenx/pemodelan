<?php

/**
 * This is the model class for table "erd_status".
 *
 * The followings are the available columns in table 'erd_status':
 * @property integer $erd_status_id
 * @property string $erd_status_nama
 *
 * The followings are the available model relations:
 * @property Erd[] $erds
 */
class ErdStatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ErdStatus the static model class
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
		return 'erd_status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('erd_status_id, erd_status_nama', 'required'),
			array('erd_status_id', 'numerical', 'integerOnly'=>true),
			array('erd_status_nama', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('erd_status_id, erd_status_nama', 'safe', 'on'=>'search'),
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
			'erds' => array(self::HAS_MANY, 'Erd', 'erd_status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'erd_status_id' => 'Erd Status',
			'erd_status_nama' => 'Erd Status Nama',
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

		$criteria->compare('erd_status_id',$this->erd_status_id);
		$criteria->compare('erd_status_nama',$this->erd_status_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}