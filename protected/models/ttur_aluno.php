<?php

/**
 * This is the model class for table "ttur_aluno".
 *
 * The followings are the available columns in table 'ttur_aluno':
 * @property integer $id
 * @property integer $id_turma
 * @property integer $id_aluno
 */
class ttur_aluno extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ttur_aluno';
	}
	
	public $frequencia;
	public $data;

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_turma, id_aluno', 'required'),
			array('id_turma, id_aluno', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_turma, id_aluno', 'safe', 'on'=>'search'),
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
			'id_turma0' => array(self::BELONGS_TO, 'Tturma', 'id_turma'),
			'id_aluno0' => array(self::BELONGS_TO, 'Tusuarios', 'id_aluno'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'id_turma' => 'Id Turma',
			'id_aluno' => 'Id Aluno',
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

		$criteria->compare('id_turma',$this->id_turma);

		$criteria->compare('id_aluno',$this->id_aluno);

		return new CActiveDataProvider('ttur_aluno', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return ttur_aluno the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}