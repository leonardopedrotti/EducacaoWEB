<?php

/**
 * This is the model class for table "tcur_disc".
 *
 * The followings are the available columns in table 'tcur_disc':
 * @property integer $ID
 * @property integer $id_curso
 * @property integer $id_disciplina
 */
class tcur_disc extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tcur_disc';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_curso, id_disciplina', 'required'),
			array('id_curso, id_disciplina', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, id_curso, id_disciplina', 'safe', 'on'=>'search'),
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
			'id_curso0' => array(self::BELONGS_TO, 'Tcursos', 'id_curso'),
			'id_disciplina0' => array(self::BELONGS_TO, 'Tdisciplina', 'id_disciplina'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Código',
			'id_curso' => 'Curso',
			'id_disciplina' => 'Disciplina',
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

		$criteria->compare('id_curso',$this->id_curso);

		$criteria->compare('id_disciplina',$this->id_disciplina);

		return new CActiveDataProvider('tcur_disc', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tcur_disc the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}