<?php

/**
 * This is the model class for table "tusuarios".
 *
 * The followings are the available columns in table 'tusuarios':
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property string $tipo
 * @property integer $ativo
 * @property integer $id_pessoa
 * @property integer $id_instituicao
 */
class tusuarios extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tusuarios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, senha, tipo, ativo, id_pessoa, id_instituicao', 'required'),
			array('ativo, id_pessoa, id_instituicao', 'numerical', 'integerOnly'=>true),
			array('login, senha', 'length', 'max'=>45),
			array('tipo', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, login, senha, tipo, ativo, id_pessoa, id_instituicao', 'safe', 'on'=>'search'),
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
			'id_pessoa0' => array(self::BELONGS_TO, 'Tpessoas', 'id_pessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Código',
			'login' => 'Login',
			'senha' => 'Senha',
			'tipo' => 'Tipo',
			'ativo' => 'Ativo',
			'id_pessoa' => 'Pessoa',
			'id_instituicao' => 'Instituição',
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

		$criteria->compare('login',$this->login,true);

		$criteria->compare('senha',$this->senha,true);

		$criteria->compare('tipo',$this->tipo,true);

		$criteria->compare('ativo',$this->ativo);

		$criteria->compare('id_pessoa',$this->id_pessoa);

		$criteria->compare('id_instituicao',$this->id_instituicao);

		return new CActiveDataProvider('tusuarios', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tusuarios the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}