<?php

/**
 * This is the model class for table "erd_diagram".
 *
 * The followings are the available columns in table 'erd_diagram':
 * @property integer $erd_diagram_id
 * @property string $erd_diagram_alias
 * @property string $erd_diagram_nama
 * @property string $erd_diagram_judul
 * @property string $erd_diagram_deskrispsi
 * @property string $erd_diagram_keterangan_sebelum
 * @property string $erd_diagram_keterangan_sesudah
 * @property integer $erd_id
 *
 * The followings are the available model relations:
 * @property Erd $erd
 * @property ErdEntitasKeDiagram[] $erdEntitasKeDiagrams
 * @property ErdResourceKeDiagram[] $erdResourceKeDiagrams
 */
class ErdDiagram extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ErdDiagram the static model class
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
		return 'erd_diagram';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('erd_diagram_alias, erd_diagram_nama, erd_diagram_judul, erd_diagram_deskrispsi, erd_diagram_keterangan_sebelum, erd_diagram_keterangan_sesudah, erd_id', 'required'),
			array('erd_id', 'numerical', 'integerOnly'=>true),
			array('erd_diagram_alias, erd_diagram_nama, erd_diagram_judul', 'length', 'max'=>64),
			array('erd_diagram_deskrispsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('erd_diagram_id, erd_diagram_alias, erd_diagram_nama, erd_diagram_judul, erd_diagram_deskrispsi, erd_diagram_keterangan_sebelum, erd_diagram_keterangan_sesudah, erd_id', 'safe', 'on'=>'search'),
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
			'erdEntitasKeDiagrams' => array(self::HAS_MANY, 'ErdEntitasKeDiagram', 'erd_diagram_id'),
			'erdResourceKeDiagrams' => array(self::HAS_MANY, 'ErdResourceKeDiagram', 'erd_diagram_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'erd_diagram_id' => 'Erd Diagram',
			'erd_diagram_alias' => 'Erd Diagram Alias',
			'erd_diagram_nama' => 'Erd Diagram Nama',
			'erd_diagram_judul' => 'Erd Diagram Judul',
			'erd_diagram_deskrispsi' => 'Erd Diagram Deskrispsi',
			'erd_diagram_keterangan_sebelum' => 'Erd Diagram Keterangan Sebelum',
			'erd_diagram_keterangan_sesudah' => 'Erd Diagram Keterangan Sesudah',
			'erd_id' => 'Erd',
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

		$criteria->compare('erd_diagram_id',$this->erd_diagram_id);
		$criteria->compare('erd_diagram_alias',$this->erd_diagram_alias,true);
		$criteria->compare('erd_diagram_nama',$this->erd_diagram_nama,true);
		$criteria->compare('erd_diagram_judul',$this->erd_diagram_judul,true);
		$criteria->compare('erd_diagram_deskrispsi',$this->erd_diagram_deskrispsi,true);
		$criteria->compare('erd_diagram_keterangan_sebelum',$this->erd_diagram_keterangan_sebelum,true);
		$criteria->compare('erd_diagram_keterangan_sesudah',$this->erd_diagram_keterangan_sesudah,true);
		$criteria->compare('erd.erd_nama',$this->erd_id,TRUE);
                
                $criteria->with = array('erd');
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}