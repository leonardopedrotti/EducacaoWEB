<?php

/**
 * This is the model class for table "tinstituicoes".
 *
 * The followings are the available columns in table 'tinstituicoes':
 * @property integer $id
 * @property string $razao_social
 * @property string $nome_fan
 * @property integer $id_cidade
 */
class tinstituicoes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tinstituicoes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, razao_social, nome_fan, id_cidade', 'required'),
			array('id, id_cidade', 'numerical', 'integerOnly'=>true),
			array('razao_social, nome_fan', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, razao_social, nome_fan, id_cidade', 'safe', 'on'=>'search'),
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
			'tinst_usus' => array(self::HAS_MANY, 'TinstUsu', 'id_instituicao'),
			'id_cidade0' => array(self::BELONGS_TO, 'Tcidades', 'id_cidade'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'razao_social' => 'Razao Social',
			'nome_fan' => 'Nome Fan',
			'id_cidade' => 'Id Cidade',
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

		$criteria->compare('razao_social',$this->razao_social,true);

		$criteria->compare('nome_fan',$this->nome_fan,true);

		$criteria->compare('id_cidade',$this->id_cidade);

		return new CActiveDataProvider('tinstituicoes', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tinstituicoes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}