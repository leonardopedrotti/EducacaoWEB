<?php

/**
 * This is the model class for table "tcursos".
 *
 * The followings are the available columns in table 'tcursos':
 * @property integer $ID
 * @property string $descricao
 * @property integer $id_instituicao
 */
class tcursos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tcursos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, id_instituicao', 'required'),
			array('id_instituicao', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, id_instituicao', 'safe', 'on'=>'search'),
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
			'tcur_discs' => array(self::HAS_MANY, 'TcurDisc', 'id_curso'),
			'id_instituicao0' => array(self::BELONGS_TO, 'Tinstituicoes', 'id_instituicao'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'C�digo',
			'descricao' => 'Descri��o',
			'id_instituicao' => 'Institui��o',
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

		$criteria->compare('id_instituicao',$this->id_instituicao);

		return new CActiveDataProvider('tcursos', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tcursos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}