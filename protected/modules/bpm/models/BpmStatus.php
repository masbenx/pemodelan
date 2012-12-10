<?php

/**
 * This is the model class for table "bpm_status".
 *
 * The followings are the available columns in table 'bpm_status':
 * @property integer $bpm_status_id
 * @property string $bpm_status_nama
 *
 * The followings are the available model relations:
 * @property Bpm[] $bpms
 */
class BpmStatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BpmStatus the static model class
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
		return 'bpm_status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bpm_status_id, bpm_status_nama', 'required'),
			array('bpm_status_id', 'numerical', 'integerOnly'=>true),
			array('bpm_status_nama', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bpm_status_id, bpm_status_nama', 'safe', 'on'=>'search'),
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
			'bpms' => array(self::HAS_MANY, 'Bpm', 'bpm_status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bpm_status_id' => 'Bpm Status',
			'bpm_status_nama' => 'Bpm Status Nama',
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

		$criteria->compare('bpm_status_id',$this->bpm_status_id);
		$criteria->compare('bpm_status_nama',$this->bpm_status_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}