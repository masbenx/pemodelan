<?php

/**
 * This is the model class for table "bpm_divisi".
 *
 * The followings are the available columns in table 'bpm_divisi':
 * @property integer $bpm_divisi_id
 * @property integer $bpm_divisi_upline
 * @property string $bpm_divisi_alias
 * @property string $bpm_divisi_nama
 * @property string $bpm_divisi_judul
 * @property integer $bpm_id
 *
 * The followings are the available model relations:
 * @property Bpm $bpm
 * @property BpmDivisiKeDiagram[] $bpmDivisiKeDiagrams
 * @property BpmEntitasKeDivisi[] $bpmEntitasKeDivisis
 */
class BpmDivisi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BpmDivisi the static model class
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
		return 'bpm_divisi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bpm_divisi_alias, bpm_divisi_nama, bpm_divisi_judul, bpm_id', 'required'),
			array('bpm_divisi_upline, bpm_id', 'numerical', 'integerOnly'=>true),
			array('bpm_divisi_alias, bpm_divisi_nama, bpm_divisi_judul', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bpm_divisi_id, bpm_divisi_upline, bpm_divisi_alias, bpm_divisi_nama, bpm_divisi_judul, bpm_id', 'safe', 'on'=>'search'),
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
			'bpm' => array(self::BELONGS_TO, 'Bpm', 'bpm_id'),
			'bpmDivisiKeDiagrams' => array(self::HAS_MANY, 'BpmDivisiKeDiagram', 'bpm_divisi_id'),
			'bpmEntitasKeDivisis' => array(self::HAS_MANY, 'BpmEntitasKeDivisi', 'bpm_divisi_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bpm_divisi_id' => 'Bpm Divisi',
			'bpm_divisi_upline' => 'Bpm Divisi Upline',
			'bpm_divisi_alias' => 'Bpm Divisi Alias',
			'bpm_divisi_nama' => 'Bpm Divisi Nama',
			'bpm_divisi_judul' => 'Bpm Divisi Judul',
			'bpm_id' => 'Bpm',
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

		$criteria->compare('bpm_divisi_id',$this->bpm_divisi_id);
		$criteria->compare('bpm_divisi_upline',$this->bpm_divisi_upline);
		$criteria->compare('bpm_divisi_alias',$this->bpm_divisi_alias,true);
		$criteria->compare('bpm_divisi_nama',$this->bpm_divisi_nama,true);
		$criteria->compare('bpm_divisi_judul',$this->bpm_divisi_judul,true);
		$criteria->compare('bpm.bpm_nama',$this->bpm_id,TRUE);
                
                $criteria->with = array('bpm');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}