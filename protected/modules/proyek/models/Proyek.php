<?php

/**
 * This is the model class for table "proyek".
 *
 * The followings are the available columns in table 'proyek':
 * @property integer $proyek_id
 * @property string $proyek_alias
 * @property string $proyek_judul
 * @property string $proyek_deskripsi
 * @property string $proyek_abstrak
 * @property string $proyek_tanggal
 * @property string $proyek_tanggal_mulai
 * @property string $proyek_tanggal_target
 * @property string $proyek_tanggal_selesai
 * @property integer $proyek_type_id
 * @property integer $proyek_status_id
 * @property integer $anggota_id
 *
 * The followings are the available model relations:
 * @property ProyekStatus $proyekStatus
 * @property ProyekType $proyekType
 * @property ProyekVersi[] $proyekVersis
 */
class Proyek extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Proyek the static model class
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
		return 'proyek';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_alias, proyek_judul, proyek_deskripsi, proyek_abstrak, proyek_tanggal, proyek_tanggal_mulai, proyek_tanggal_target, proyek_tanggal_selesai, proyek_type_id, proyek_status_id, anggota_id', 'required'),
			array('proyek_type_id, proyek_status_id, anggota_id', 'numerical', 'integerOnly'=>true),
			array('proyek_alias, proyek_judul', 'length', 'max'=>32),
			array('proyek_deskripsi', 'length', 'max'=>255),
			array('proyek_abstrak', 'length', 'max'=>2000),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_id, proyek_alias, proyek_judul, proyek_deskripsi, proyek_abstrak, proyek_tanggal, proyek_tanggal_mulai, proyek_tanggal_target, proyek_tanggal_selesai, proyek_type_id, proyek_status_id, anggota_id', 'safe', 'on'=>'search'),
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
                        'anggotas' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
			'proyekStatus' => array(self::BELONGS_TO, 'ProyekStatus', 'proyek_status_id'),
			'proyekType' => array(self::BELONGS_TO, 'ProyekType', 'proyek_type_id'),
			'proyekVersis' => array(self::HAS_MANY, 'ProyekVersi', 'proyek_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proyek_id' => 'Proyek',
			'proyek_alias' => 'Proyek Alias',
			'proyek_judul' => 'Proyek Judul',
			'proyek_deskripsi' => 'Proyek Deskripsi',
			'proyek_abstrak' => 'Proyek Abstrak',
			'proyek_tanggal' => 'Proyek Tanggal',
			'proyek_tanggal_mulai' => 'Proyek Tanggal Mulai',
			'proyek_tanggal_target' => 'Proyek Tanggal Target',
			'proyek_tanggal_selesai' => 'Proyek Tanggal Selesai',
			'proyek_type_id' => 'Proyek Type',
			'proyek_status_id' => 'Proyek Status',
			'anggota_id' => 'Anggota',
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

		$criteria->compare('t.proyek_id',$this->proyek_id);
		$criteria->compare('t.proyek_alias',$this->proyek_alias,true);
		$criteria->compare('t.proyek_judul',$this->proyek_judul,true);
		$criteria->compare('t.proyek_deskripsi',$this->proyek_deskripsi,true);
		$criteria->compare('t.proyek_abstrak',$this->proyek_abstrak,true);
		$criteria->compare('t.proyek_tanggal',$this->proyek_tanggal,true);
		$criteria->compare('t.proyek_tanggal_mulai',$this->proyek_tanggal_mulai,true);
		$criteria->compare('t.proyek_tanggal_target',$this->proyek_tanggal_target,true);
		$criteria->compare('t.proyek_tanggal_selesai',$this->proyek_tanggal_selesai,true);
		$criteria->compare('proyekType.proyek_type_nama',$this->proyek_type_id,TRUE);
		$criteria->compare('proyekStatus.proyek_status_nama',$this->proyek_status_id,TRUE);
		$criteria->compare('anggotas.anggota_realname',$this->anggota_id,TRUE);
                
                $criteria->with = array('proyekType','proyekStatus','anggotas');
                

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}