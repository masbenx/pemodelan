<?php

/**
 * This is the model class for table "proyek_error_lapor".
 *
 * The followings are the available columns in table 'proyek_error_lapor':
 * @property integer $proyek_error_lapor_id
 * @property string $proyek_error_lapor_judul
 * @property string $proyek_error_lapor_tanggal
 * @property string $proyek_error_lapor_konten
 * @property string $proyek_error_lapor_status
 * @property integer $anggota_id
 * @property integer $proyek_sub_id
 *
 * The followings are the available model relations:
 * @property ProyekSub $proyekSub
 */
class ProyekErrorLapor extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekErrorLapor the static model class
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
		return 'proyek_error_lapor';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_error_lapor_judul, proyek_error_lapor_tanggal, proyek_error_lapor_konten, proyek_error_lapor_status, anggota_id, proyek_sub_id', 'required'),
			array('anggota_id, proyek_sub_id', 'numerical', 'integerOnly'=>true),
			array('proyek_error_lapor_judul, proyek_error_lapor_status', 'length', 'max'=>32),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_error_lapor_id, proyek_error_lapor_judul, proyek_error_lapor_tanggal, proyek_error_lapor_konten, proyek_error_lapor_status, anggota_id, proyek_sub_id', 'safe', 'on'=>'search'),
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
			'proyekSub' => array(self::BELONGS_TO, 'ProyekSub', 'proyek_sub_id'),
                        'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'proyek_error_lapor_id' => 'Proyek Error Lapor',
			'proyek_error_lapor_judul' => 'Proyek Error Lapor Judul',
			'proyek_error_lapor_tanggal' => 'Proyek Error Lapor Tanggal',
			'proyek_error_lapor_konten' => 'Proyek Error Lapor Konten',
			'proyek_error_lapor_status' => 'Proyek Error Lapor Status',
			'anggota_id' => 'Anggota',
			'proyek_sub_id' => 'Proyek Sub',
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

		$criteria->compare('proyek_error_lapor_id',$this->proyek_error_lapor_id);
		$criteria->compare('proyek_error_lapor_judul',$this->proyek_error_lapor_judul,true);
		$criteria->compare('proyek_error_lapor_tanggal',$this->proyek_error_lapor_tanggal,true);
		$criteria->compare('proyek_error_lapor_konten',$this->proyek_error_lapor_konten,true);
		$criteria->compare('proyek_error_lapor_status',$this->proyek_error_lapor_status,true);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,TRUE);
		$criteria->compare('proyekSub.proyek_sub_id',$this->proyek_sub_id,TRUE);

                $criteria->with = array('anggota','proyekSub');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}