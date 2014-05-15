<?php

/**
 * This is the model class for table "tinst_usu".
 *
 * The followings are the available columns in table 'tinst_usu':
 * @property integer $id
 * @property integer $id_usuario
 * @property integer $id_instituicao
 */
class tinst_usu extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tinst_usu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, id_usuario, id_instituicao', 'required'),
			array('id, id_usuario, id_instituicao', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_usuario, id_instituicao', 'safe', 'on'=>'search'),
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
			'id_instituicao0' => array(self::BELONGS_TO, 'Tinstituicoes', 'id_instituicao'),
			'id_usuario0' => array(self::BELONGS_TO, 'Tusuarios', 'id_usuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'id_usuario' => 'Id Usuario',
			'id_instituicao' => 'Id Instituicao',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('id_usuario',$this->id_usuario);

		$criteria->compare('id_instituicao',$this->id_instituicao);

		return new CActiveDataProvider('tinst_usu', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tinst_usu the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}