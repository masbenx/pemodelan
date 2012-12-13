<?php

/**
 * This is the model class for table "anggota".
 *
 * The followings are the available columns in table 'anggota':
 * @property integer $anggota_id
 * @property integer $anggota_pengarah_id
 * @property integer $anggota_presenter_id
 * @property string $anggota_alias
 * @property string $anggota_username
 * @property string $anggota_password
 * @property string $anggota_email
 * @property string $anggota_handphone
 * @property string $anggota_tanggal_daftar
 * @property string $anggota_tanggal_aktif
 * @property string $anggota_tanggal_login
 * @property string $anggota_callname
 * @property string $anggota_realname
 * @property string $anggota_kelamin
 * @property string $anggota_tanggal_lahir
 * @property integer $anggota_poin
 * @property integer $anggota_saldo
 * @property integer $anggota_level_id
 * @property integer $anggota_type_id
 * @property integer $anggota_status_id
 *
 * The followings are the available model relations:
 * @property Alamat[] $alamats
 * @property AlamatAnggota[] $alamatAnggotas
 * @property AnggotaLevel $anggotaLevel
 * @property AnggotaType $anggotaType
 * @property AnggotaStatus $anggotaStatus
 */
class Anggota extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Anggota the static model class
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
		return 'anggota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('anggota_pengarah_id, anggota_presenter_id, anggota_alias, anggota_username, anggota_password, anggota_email, anggota_handphone, anggota_tanggal_daftar, anggota_tanggal_aktif, anggota_tanggal_login, anggota_callname, anggota_realname, anggota_kelamin, anggota_tanggal_lahir, anggota_poin, anggota_saldo, anggota_level_id, anggota_type_id, anggota_status_id', 'required'),
			array('anggota_pengarah_id, anggota_presenter_id, anggota_poin, anggota_saldo, anggota_level_id, anggota_type_id, anggota_status_id', 'numerical', 'integerOnly'=>true),
			array('anggota_alias, anggota_username, anggota_password, anggota_email, anggota_handphone, anggota_callname, anggota_realname', 'length', 'max'=>255),
			array('anggota_kelamin', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('anggota_id, anggota_pengarah_id, anggota_presenter_id, anggota_alias, anggota_username, anggota_password, anggota_email, anggota_handphone, anggota_tanggal_daftar, anggota_tanggal_aktif, anggota_tanggal_login, anggota_callname, anggota_realname, anggota_kelamin, anggota_tanggal_lahir, anggota_poin, anggota_saldo, anggota_level_id, anggota_type_id, anggota_status_id', 'safe', 'on'=>'search'),
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
			'alamats' => array(self::HAS_MANY, 'Alamat', 'anggota_id'),
			'alamatAnggotas' => array(self::HAS_MANY, 'AlamatAnggota', 'anggota_id'),
			'anggotaLevel' => array(self::BELONGS_TO, 'AnggotaLevel', 'anggota_level_id'),
			'anggotaType' => array(self::BELONGS_TO, 'AnggotaType', 'anggota_type_id'),
			'anggotaStatus' => array(self::BELONGS_TO, 'AnggotaStatus', 'anggota_status_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'anggota_id' => 'Anggota',
			'anggota_pengarah_id' => 'Anggota Pengarah',
			'anggota_presenter_id' => 'Anggota Presenter',
			'anggota_alias' => 'Anggota Alias',
			'anggota_username' => 'Anggota Username',
			'anggota_password' => 'Anggota Password',
			'anggota_email' => 'Anggota Email',
			'anggota_handphone' => 'Anggota Handphone',
			'anggota_tanggal_daftar' => 'Anggota Tanggal Daftar',
			'anggota_tanggal_aktif' => 'Anggota Tanggal Aktif',
			'anggota_tanggal_login' => 'Anggota Tanggal Login',
			'anggota_callname' => 'Anggota Callname',
			'anggota_realname' => 'Anggota Realname',
			'anggota_kelamin' => 'Anggota Kelamin',
			'anggota_tanggal_lahir' => 'Anggota Tanggal Lahir',
			'anggota_poin' => 'Anggota Poin',
			'anggota_saldo' => 'Anggota Saldo',
			'anggota_level_id' => 'Anggota Level',
			'anggota_type_id' => 'Anggota Type',
			'anggota_status_id' => 'Anggota Status',
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

		$criteria->compare('anggota_id',$this->anggota_id);
		$criteria->compare('anggota_pengarah_id',$this->anggota_pengarah_id);
		$criteria->compare('anggota_presenter_id',$this->anggota_presenter_id);
		$criteria->compare('anggota_alias',$this->anggota_alias,true);
		$criteria->compare('anggota_username',$this->anggota_username,true);
		$criteria->compare('anggota_password',$this->anggota_password,true);
		$criteria->compare('anggota_email',$this->anggota_email,true);
		$criteria->compare('anggota_handphone',$this->anggota_handphone,true);
		$criteria->compare('anggota_tanggal_daftar',$this->anggota_tanggal_daftar,true);
		$criteria->compare('anggota_tanggal_aktif',$this->anggota_tanggal_aktif,true);
		$criteria->compare('anggota_tanggal_login',$this->anggota_tanggal_login,true);
		$criteria->compare('anggota_callname',$this->anggota_callname,true);
		$criteria->compare('anggota_realname',$this->anggota_realname,true);
		$criteria->compare('anggota_kelamin',$this->anggota_kelamin,true);
		$criteria->compare('anggota_tanggal_lahir',$this->anggota_tanggal_lahir,true);
		$criteria->compare('anggota_poin',$this->anggota_poin);
		$criteria->compare('anggota_saldo',$this->anggota_saldo);
		$criteria->compare('anggota_level_id',$this->anggota_level_id);
		$criteria->compare('anggota_type_id',$this->anggota_type_id);
		$criteria->compare('anggota_status_id',$this->anggota_status_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function validatePassword($password){
            return $this->hashPassword($password) == $this->anggota_password;
        }
        
        public function hashPassword($password){
            //return md5($password);
            return $password;
        }
}