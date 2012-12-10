<?php

/**
 * This is the model class for table "bpm_divisi_ke_diagram".
 *
 * The followings are the available columns in table 'bpm_divisi_ke_diagram':
 * @property integer $bpm_divisi_ke_diagram_id
 * @property integer $bpm_divisi_ke_diagram_urutan
 * @property integer $bpm_diagram_id
 * @property integer $bpm_divisi_id
 *
 * The followings are the available model relations:
 * @property BpmDiagram $bpmDiagram
 * @property BpmDivisi $bpmDivisi
 */
class BpmDivisiKeDiagram extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BpmDivisiKeDiagram the static model class
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
		return 'bpm_divisi_ke_diagram';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bpm_divisi_ke_diagram_urutan, bpm_diagram_id, bpm_divisi_id', 'required'),
			array('bpm_divisi_ke_diagram_urutan, bpm_diagram_id, bpm_divisi_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bpm_divisi_ke_diagram_id, bpm_divisi_ke_diagram_urutan, bpm_diagram_id, bpm_divisi_id', 'safe', 'on'=>'search'),
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
			'bpmDiagram' => array(self::BELONGS_TO, 'BpmDiagram', 'bpm_diagram_id'),
			'bpmDivisi' => array(self::BELONGS_TO, 'BpmDivisi', 'bpm_divisi_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bpm_divisi_ke_diagram_id' => 'Bpm Divisi Ke Diagram',
			'bpm_divisi_ke_diagram_urutan' => 'Bpm Divisi Ke Diagram Urutan',
			'bpm_diagram_id' => 'Bpm Diagram',
			'bpm_divisi_id' => 'Bpm Divisi',
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

		$criteria->compare('bpm_divisi_ke_diagram_id',$this->bpm_divisi_ke_diagram_id);
		$criteria->compare('bpm_divisi_ke_diagram_urutan',$this->bpm_divisi_ke_diagram_urutan);
		$criteria->compare('bpmDiagram.bpm_diagram_nama',$this->bpm_diagram_id,TRUE);
		$criteria->compare('bpmDivisi.bpm_divisi_nama',$this->bpm_divisi_id,TRUE);
                
                $criteria->with = array('bpmDiagram','bpmDivisi');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}