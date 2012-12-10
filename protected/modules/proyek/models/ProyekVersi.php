<?php

/**
 * This is the model class for table "proyek_versi".
 *
 * The followings are the available columns in table 'proyek_versi':
 * @property integer $proyek_versi_id
 * @property string $proyek_versi_kode
 * @property integer $proyek_id
 * @property integer $anggota_id
 * @property integer $proyek_versi_status_id
 *
 * The followings are the available model relations:
 * @property Bpm[] $bpms
 * @property Erd[] $erds
 * @property ProyekSub[] $proyekSubs
 * @property Proyek $proyek
 * @property ProyekVersiStatus $proyekVersiStatus
 */
class ProyekVersi extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekVersi the static model class
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
		return 'proyek_versi';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_versi_kode, proyek_id, anggota_id, proyek_versi_status_id', 'required'),
			array('proyek_id, anggota_id, proyek_versi_status_id', 'numerical', 'integerOnly'=>true),
			array('proyek_versi_kode', 'length', 'max'=>8),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_versi_id, proyek_versi_kode, proyek_id, anggota_id, proyek_versi_status_id', 'safe', 'on'=>'search'),
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
			'bpms' => array(self::HAS_MANY, 'Bpm', 'proyek_versi_id'),
			'erds' => array(self::HAS_MANY, 'Erd', 'proyek_versi_id'),
			'proyekSubs' => array(self::HAS_MANY, 'ProyekSub', 'proyek_versi_id'),
			'proyek' => array(self::BELONGS_TO, 'Proyek', 'proyek_id'),
			'proyekVersiStatus' => array(self::BELONGS_TO, 'ProyekVersiStatus', 'proyek_versi_status_id'),
                        'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proyek_versi_id' => 'Proyek Versi',
			'proyek_versi_kode' => 'Proyek Versi Kode',
			'proyek_id' => 'Proyek',
			'anggota_id' => 'Anggota',
			'proyek_versi_status_id' => 'Proyek Versi Status',
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

		$criteria->compare('proyek_versi_id',$this->proyek_versi_id);
		$criteria->compare('proyek_versi_kode',$this->proyek_versi_kode,true);
		$criteria->compare('proyek.proyek_judul',$this->proyek_id,TRUE);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,TRUE);
		$criteria->compare('proyekVersiStatus.proyek_versi_status_nama',$this->proyek_versi_status_id,TRUE);

                $criteria->with = array('proyek','anggota','proyekVersiStatus');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}