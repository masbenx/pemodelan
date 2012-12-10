<?php

/**
 * This is the model class for table "bpm_diagram".
 *
 * The followings are the available columns in table 'bpm_diagram':
 * @property integer $bpm_diagram_id
 * @property string $bpm_diagram_alias
 * @property string $bpm_diagram_nama
 * @property string $bpm_diagram_judul
 * @property string $bpm_diagram_deskripsi
 * @property string $bpm_diagram_keterangan_sebelum
 * @property string $bpm_diagram_keterangan_sesudah
 * @property string $bpm_diagram_tanggal
 * @property integer $bpm_diagram_urutan
 * @property integer $anggota_id
 * @property integer $bpm_id
 *
 * The followings are the available model relations:
 * @property Bpm $bpm
 * @property BpmDivisiKeDiagram[] $bpmDivisiKeDiagrams
 * @property BpmEntitasKeDiagram[] $bpmEntitasKeDiagrams
 */
class BpmDiagram extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BpmDiagram the static model class
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
		return 'bpm_diagram';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('bpm_diagram_alias, bpm_diagram_nama, bpm_diagram_judul, bpm_diagram_deskripsi, bpm_diagram_keterangan_sebelum, bpm_diagram_keterangan_sesudah, bpm_diagram_tanggal, bpm_diagram_urutan, anggota_id, bpm_id', 'required'),
			array('bpm_diagram_urutan, anggota_id, bpm_id', 'numerical', 'integerOnly'=>true),
			array('bpm_diagram_alias, bpm_diagram_nama', 'length', 'max'=>32),
			array('bpm_diagram_judul', 'length', 'max'=>21),
			array('bpm_diagram_deskripsi', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('bpm_diagram_id, bpm_diagram_alias, bpm_diagram_nama, bpm_diagram_judul, bpm_diagram_deskripsi, bpm_diagram_keterangan_sebelum, bpm_diagram_keterangan_sesudah, bpm_diagram_tanggal, bpm_diagram_urutan, anggota_id, bpm_id', 'safe', 'on'=>'search'),
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
                        'anggota' => array(self::BELONGS_TO, 'Anggota', 'anggota_id'),
			'bpm' => array(self::BELONGS_TO, 'Bpm', 'bpm_id'),
			'bpmDivisiKeDiagrams' => array(self::HAS_MANY, 'BpmDivisiKeDiagram', 'bpm_diagram_id'),
			'bpmEntitasKeDiagrams' => array(self::HAS_MANY, 'BpmEntitasKeDiagram', 'bpm_diagram_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'bpm_diagram_id' => 'Bpm Diagram',
			'bpm_diagram_alias' => 'Bpm Diagram Alias',
			'bpm_diagram_nama' => 'Bpm Diagram Nama',
			'bpm_diagram_judul' => 'Bpm Diagram Judul',
			'bpm_diagram_deskripsi' => 'Bpm Diagram Deskripsi',
			'bpm_diagram_keterangan_sebelum' => 'Bpm Diagram Keterangan Sebelum',
			'bpm_diagram_keterangan_sesudah' => 'Bpm Diagram Keterangan Sesudah',
			'bpm_diagram_tanggal' => 'Bpm Diagram Tanggal',
			'bpm_diagram_urutan' => 'Bpm Diagram Urutan',
			'anggota_id' => 'Anggota',
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

		$criteria->compare('bpm_diagram_id',$this->bpm_diagram_id);
		$criteria->compare('bpm_diagram_alias',$this->bpm_diagram_alias,true);
		$criteria->compare('bpm_diagram_nama',$this->bpm_diagram_nama,true);
		$criteria->compare('bpm_diagram_judul',$this->bpm_diagram_judul,true);
		$criteria->compare('bpm_diagram_deskripsi',$this->bpm_diagram_deskripsi,true);
		$criteria->compare('bpm_diagram_keterangan_sebelum',$this->bpm_diagram_keterangan_sebelum,true);
		$criteria->compare('bpm_diagram_keterangan_sesudah',$this->bpm_diagram_keterangan_sesudah,true);
		$criteria->compare('bpm_diagram_tanggal',$this->bpm_diagram_tanggal,true);
		$criteria->compare('bpm_diagram_urutan',$this->bpm_diagram_urutan);
		$criteria->compare('anggota.anggota_realname',$this->anggota_id,TRUE);
		$criteria->compare('bpm.bpm_nama',$this->bpm_id,TRUE);
                
                $criteria->with = array('anggota','bpm');
                
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}