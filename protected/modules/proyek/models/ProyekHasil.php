<?php

/**
 * This is the model class for table "proyek_hasil".
 *
 * The followings are the available columns in table 'proyek_hasil':
 * @property integer $proyek_hasil_id
 * @property string $proyek_hasil_judul
 * @property string $proyek_hasil_catatan
 * @property string $proyek_hasil_pencapaian
 * @property string $proyek_hasil_tanggal
 * @property integer $anggota_id
 * @property integer $proyek_sub_id
 *
 * The followings are the available model relations:
 * @property ProyekSub $proyekSub
 */
class ProyekHasil extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProyekHasil the static model class
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
		return 'proyek_hasil';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('proyek_hasil_judul, proyek_hasil_catatan, proyek_hasil_pencapaian, proyek_hasil_tanggal, anggota_id, proyek_sub_id', 'required'),
			array('anggota_id, proyek_sub_id', 'numerical', 'integerOnly'=>true),
			array('proyek_hasil_judul', 'length', 'max'=>64),
			array('proyek_hasil_catatan, proyek_hasil_pencapaian', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('proyek_hasil_id, proyek_hasil_judul, proyek_hasil_catatan, proyek_hasil_pencapaian, proyek_hasil_tanggal, anggota_id, proyek_sub_id', 'safe', 'on'=>'search'),
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
			'proyek_hasil_id' => 'Proyek Hasil',
			'proyek_hasil_judul' => 'Proyek Hasil Judul',
			'proyek_hasil_catatan' => 'Proyek Hasil Catatan',
			'proyek_hasil_pencapaian' => 'Proyek Hasil Pencapaian',
			'proyek_hasil_tanggal' => 'Proyek Hasil Tanggal',
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

		$criteria->compare('proyek_hasil_id',$this->proyek_hasil_id);
		$criteria->compare('proyek_hasil_judul',$this->proyek_hasil_judul,true);
		$criteria->compare('proyek_hasil_catatan',$this->proyek_hasil_catatan,true);
		$criteria->compare('proyek_hasil_pencapaian',$this->proyek_hasil_pencapaian,true);
		$criteria->compare('proyek_hasil_tanggal',$this->proyek_hasil_tanggal,true);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,TRUE);
		$criteria->compare('proyekSub.proyek_sub_judul',$this->proyek_sub_id,TRUE);

                $criteria->with = array('anggota','proyekSub');

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}