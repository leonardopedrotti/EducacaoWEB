<?php

/**
 * This is the model class for table "tpessoas".
 *
 * The followings are the available columns in table 'tpessoas':
 * @property integer $id
 * @property string $nome
 * @property string $dt_nasc
 * @property string $tel_cel
 * @property string $tel_res
 * @property string $endereco
 * @property integer $id_cidade
 */
class tpessoas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tpessoas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, nome, tel_cel, endereco, id_cidade', 'required'),
			array('id, id_cidade', 'numerical', 'integerOnly'=>true),
			array('nome, tel_cel, tel_res, endereco', 'length', 'max'=>45),
			array('dt_nasc', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nome, dt_nasc, tel_cel, tel_res, endereco, id_cidade', 'safe', 'on'=>'search'),
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
			'id_cidade0' => array(self::BELONGS_TO, 'Tcidades', 'id_cidade'),
			'tusuarioses' => array(self::HAS_MANY, 'Tusuarios', 'id_pessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'nome' => 'Nome',
			'dt_nasc' => 'Dt Nasc',
			'tel_cel' => 'Tel Cel',
			'tel_res' => 'Tel Res',
			'endereco' => 'Endereco',
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

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('dt_nasc',$this->dt_nasc,true);

		$criteria->compare('tel_cel',$this->tel_cel,true);

		$criteria->compare('tel_res',$this->tel_res,true);

		$criteria->compare('endereco',$this->endereco,true);

		$criteria->compare('id_cidade',$this->id_cidade);

		return new CActiveDataProvider('tpessoas', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return tpessoas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}