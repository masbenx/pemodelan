<?php

/**
 * This is the model class for table "erd_entitas_type".
 *
 * The followings are the available columns in table 'erd_entitas_type':
 * @property integer $erd_entitas_type_id
 * @property string $erd_entitas_type_nama
 *
 * The followings are the available model relations:
 * @property ErdEntitas[] $erdEntitases
 */
class ErdEntitasType extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ErdEntitasType the static model class
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
		return 'erd_entitas_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('erd_entitas_type_nama', 'required'),
			array('erd_entitas_type_nama', 'length', 'max'=>16),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('erd_entitas_type_id, erd_entitas_type_nama', 'safe', 'on'=>'search'),
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
			'erdEntitases' => array(self::HAS_MANY, 'ErdEntitas', 'erd_entitas_type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'erd_entitas_type_id' => 'Erd Entitas Type',
			'erd_entitas_type_nama' => 'Erd Entitas Type Nama',
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

		$criteria->compare('erd_entitas_type_id',$this->erd_entitas_type_id);
		$criteria->compare('erd_entitas_type_nama',$this->erd_entitas_type_nama,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}