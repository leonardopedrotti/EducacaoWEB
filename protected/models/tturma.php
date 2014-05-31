<?php

/**
 * This is the model class for table "tturma".
 *
 * The followings are the available columns in table 'tturma':
 * @property integer $id
 * @property integer $ano
 * @property integer $semestre
 * @property integer $carga_horaria
 * @property string $nome
 * @property integer $id_tcur_disc
 * @property integer $id_professor
 * @property integer $ativo
 */
class tturma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tturma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ano, semestre, carga_horaria, nome, id_tcur_disc, id_professor, ativo', 'required'),
			array('ano, semestre, carga_horaria, id_tcur_disc, id_professor, ativo', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, ano, semestre, carga_horaria, nome, id_tcur_disc, id_professor, ativo', 'safe', 'on'=>'search'),
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
			'ttur_alunos' => array(self::HAS_MANY, 'Ttur_Aluno', 'id_turma'),
			'id_tcur_disc0' => array(self::BELONGS_TO, 'Tcur_Disc', 'id_tcur_disc'),
			'id_professor0' => array(self::BELONGS_TO, 'Tusuarios', 'id_professor'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Código',
			'ano' => 'Ano',
			'semestre' => 'Semestre',
			'carga_horaria' => 'Carga Horaria',
			'nome' => 'Nome',
			'id_tcur_disc' => 'Curso - Disciplina',
			'id_professor' => 'Professor',
			'ativo' => 'Ativo',
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

		$criteria->compare('ano',$this->ano);

		$criteria->compare('semestre',$this->semestre);

		$criteria->compare('carga_horaria',$this->carga_horaria);

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('id_tcur_disc',$this->id_tcur_disc);

		$criteria->compare('id_professor',$this->id_professor);

		$criteria->compare('ativo',$this->ativo);

		return new CActiveDataProvider('tturma', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tturma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}