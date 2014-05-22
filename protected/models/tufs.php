<?php

/**
 * This is the model class for table "tufs".
 *
 * The followings are the available columns in table 'tufs':
 * @property integer $id
 * @property string $descricao
 * @property string $uf
 * @property integer $id_pais
 */
class tufs extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tufs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, uf, id_pais', 'required'),
			array('id_pais', 'numerical', 'integerOnly'=>true),
			array('descricao, uf', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, descricao, uf, id_pais', 'safe', 'on'=>'search'),
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
			'tcidades' => array(self::HAS_MANY, 'Tcidades', 'id_uf'),
			'id_pais0' => array(self::BELONGS_TO, 'Tpaises', 'id_pais'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Código',
			'descricao' => 'Descrição',
			'uf' => 'Uf',
			'id_pais' => 'País',
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

		$criteria->compare('uf',$this->uf,true);

		$criteria->compare('id_pais',$this->id_pais);

		return new CActiveDataProvider('tufs', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tufs the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}