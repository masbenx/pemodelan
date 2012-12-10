<?php

/**
 * This is the model class for table "erd_entitas".
 *
 * The followings are the available columns in table 'erd_entitas':
 * @property integer $erd_entitas_id
 * @property integer $erd_entitas_upline
 * @property string $erd_entitas_nama
 * @property string $erd_entitas_judul
 * @property integer $erd_id
 * @property integer $erd_entitas_type_id
 * @property integer $erd_entitas_status_id
 *
 * The followings are the available model relations:
 * @property Erd $erd
 * @property ErdEntitasStatus $erdEntitasStatus
 * @property ErdEntitasType $erdEntitasType
 * @property ErdEntitasKeDiagram[] $erdEntitasKeDiagrams
 * @property ErdResource[] $erdResources
 */
class ErdEntitas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ErdEntitas the static model class
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
		return 'erd_entitas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('erd_entitas_nama, erd_entitas_judul, erd_id, erd_entitas_type_id, erd_entitas_status_id', 'required'),
			array('erd_entitas_upline, erd_id, erd_entitas_type_id, erd_entitas_status_id', 'numerical', 'integerOnly'=>true),
			array('erd_entitas_nama', 'length', 'max'=>32),
			array('erd_entitas_judul', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('erd_entitas_id, erd_entitas_upline, erd_entitas_nama, erd_entitas_judul, erd_id, erd_entitas_type_id, erd_entitas_status_id', 'safe', 'on'=>'search'),
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
			'erd' => array(self::BELONGS_TO, 'Erd', 'erd_id'),
			'erdEntitasStatus' => array(self::BELONGS_TO, 'ErdEntitasStatus', 'erd_entitas_status_id'),
			'erdEntitasType' => array(self::BELONGS_TO, 'ErdEntitasType', 'erd_entitas_type_id'),
			'erdEntitasKeDiagrams' => array(self::HAS_MANY, 'ErdEntitasKeDiagram', 'erd_entitas_id'),
			'erdResources' => array(self::HAS_MANY, 'ErdResource', 'erd_entitas_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'erd_entitas_id' => 'Erd Entitas',
			'erd_entitas_upline' => 'Erd Entitas Upline',
			'erd_entitas_nama' => 'Erd Entitas Nama',
			'erd_entitas_judul' => 'Erd Entitas Judul',
			'erd_id' => 'Erd',
			'erd_entitas_type_id' => 'Erd Entitas Type',
			'erd_entitas_status_id' => 'Erd Entitas Status',
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

		$criteria->compare('erd_entitas_id',$this->erd_entitas_id);
		$criteria->compare('erd_entitas_upline',$this->erd_entitas_upline);
		$criteria->compare('erd_entitas_nama',$this->erd_entitas_nama,true);
		$criteria->compare('erd_entitas_judul',$this->erd_entitas_judul,true);
		$criteria->compare('erd.erd_nama',$this->erd_id,TRUE);
		$criteria->compare('erd_entitas_type.erd_entitas_type_nama',$this->erd_entitas_type_id,TRUE);
		$criteria->compare('erd_entitas_status.erd_entitas_status_nama',$this->erd_entitas_status_id,TRUE);
                
                $criteria->with = array('erd','erdEntitasType','erdEntitasStatus');
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}