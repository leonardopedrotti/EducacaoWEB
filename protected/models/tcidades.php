<?php

/**
 * This is the model class for table "tcidades".
 *
 * The followings are the available columns in table 'tcidades':
 * @property integer $id
 * @property string $descricao
 * @property string $sigla
 * @property integer $id_uf
 */
class tcidades extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tcidades';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, sigla, id_uf', 'required'),
			array('id_uf', 'numerical', 'integerOnly'=>true),
			array('descricao, sigla', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, sigla, id_uf', 'safe', 'on'=>'search'),
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
			'id_uf0' => array(self::BELONGS_TO, 'Tufs', 'id_uf'),
			'tinstituicoes' => array(self::HAS_MANY, 'Tinstituicoes', 'id_cidade'),
			'tpessoases' => array(self::HAS_MANY, 'Tpessoas', 'id_cidade'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'descricao' => 'Descricao',
			'sigla' => 'Sigla',
			'id_uf' => 'Id Uf',
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

		$criteria->compare('descricao',$this->descricao,true);

		$criteria->compare('sigla',$this->sigla,true);

		$criteria->compare('id_uf',$this->id_uf);

		return new CActiveDataProvider('tcidades', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tcidades the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}