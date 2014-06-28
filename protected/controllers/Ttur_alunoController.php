<?php

class Ttur_alunoController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @var CActiveRecord the currently loaded data model instance.
	 */
	private $_model;
	
	public $_data;

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','confirmarPresenca','confirmarAusencia','consultar','buscarPresenca'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','indexPro','admin','delete'),
				'users'=>array('@'),
			),
			/*array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ttur_aluno;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ttur_aluno']))
		{
			$model->attributes=$_POST['ttur_aluno'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ttur_aluno']))
		{
			$model->attributes=$_POST['ttur_aluno'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(array('index'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ttur_aluno');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionIndexPro()
	{
		$data = new DateTime();
		$model=new ttur_aluno;
		$model->id_turma = $_GET['idTurma'];
		$model->data = $data->format('Y-m-d');		
		
		$dataProvider=new CActiveDataProvider('ttur_aluno', array(
				'criteria'=>array(
						'select'=>array(
								't.id',
								't.id_turma',
								't.id_aluno',
						),
						'condition'=>'t.id_turma = '.$model->id_turma,
						'limit'=>100,
						'together'=>false,
						'with'=>array()
				),
				'pagination'=>false,
		));
		
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $ttur_aluno) {
			
			$dataProviderFreq=new CActiveDataProvider('tfrequencia', array(
				'criteria'=>array(
						'select'=>array(
								't.frequencia',
						),
						'condition'=>'t.id_aluno = '.$ttur_aluno->id.'  and t.data = \''.$data->format('Y-m-d').'\'',
						'limit'=>100,
						'together'=>false,
						'with'=>array()
				),
				'pagination'=>false,
			));
			
			$iteratorFreq = new CDataProviderIterator($dataProviderFreq);
			foreach($iteratorFreq as $tfrequencia) {
				$ttur_aluno->frequencia = $tfrequencia->frequencia;
			}			
		}		
		
		$this->render('indexPro',array(
				'dataProvider'=>$dataProvider,
				'model'=>$model,
		));
	}
	
	public function actionConsultar()
	{		
		$model=new ttur_aluno;
		$model->id_turma = $_GET['idTurma'];
		$model->data = $_GET['ttur_aluno']['data'];
	
		$dataProvider=new CActiveDataProvider('ttur_aluno', array(
				'criteria'=>array(
						'select'=>array(
								't.id',
								't.id_turma',
								't.id_aluno',
						),
						'condition'=>'t.id_turma = '.$model->id_turma,
						'limit'=>100,
						'together'=>false,
						'with'=>array()
				),
				'pagination'=>false,
		));
		
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $ttur_aluno) {
			$ttur_aluno->data = $model->data;
			$dataProviderFreq=new CActiveDataProvider('tfrequencia', array(
					'criteria'=>array(
							'select'=>array(
									't.frequencia',
							),
							'condition'=>'t.id_aluno = '.$ttur_aluno->id.'  and t.data = \''.$model->data.'\'',
							'limit'=>100,
							'together'=>false,
							'with'=>array()
					),
					'pagination'=>false,
			));
				
			$iteratorFreq = new CDataProviderIterator($dataProviderFreq);
			foreach($iteratorFreq as $tfrequencia) {				
				$ttur_aluno->frequencia = $tfrequencia->frequencia;
			}
		}
		
		$this->render('indexPro',array(
				'dataProvider'=>$dataProvider,
				'model'=>$model,
		));
	}
	
	
	public function actionConfirmarPresenca()
	{
		$model=new ttur_aluno;
		$model->id_turma = $_GET['idTurma'];
		$model->data = $_GET['data'];	
		$model->id_aluno = $_GET['idAluno'];	
		
		$encontrou = false;
		$data = new DateTime();
		
		$dataProvider=new CActiveDataProvider('tfrequencia', array(
				'criteria'=>array(
						'condition'=>'data = \''.$model->data.'\' AND id_aluno='.$model->id_aluno,
				)
		));
		
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $tfrequencia) {
			$tfrequencia->frequencia = 1;
			$tfrequencia->save();
			$encontrou = true;
		}
		
		if(!$encontrou){
			$modelFreq=new tfrequencia;
			$modelFreq->id_aluno = $model->id_aluno;
			$modelFreq->frequencia = 1;
			$modelFreq->data = $model->data;
			$modelFreq->save();
		}		
		
		$dataProvider=new CActiveDataProvider('ttur_aluno', array(
				'criteria'=>array(
						'select'=>array(
								't.id',
								't.id_turma',
								't.id_aluno',
						),
						'condition'=>'t.id_turma = '.$model->id_turma,
						'limit'=>100,
						'together'=>false,
						'with'=>array()
				),
				'pagination'=>false,
		));
		
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $ttur_aluno) {
			$ttur_aluno->data = $model->data;
			$dataProviderFreq=new CActiveDataProvider('tfrequencia', array(
					'criteria'=>array(
							'select'=>array(
									't.frequencia',
							),
							'condition'=>'t.id_aluno = '.$ttur_aluno->id.'  and t.data = \''.$model->data.'\'',
							'limit'=>100,
							'together'=>false,
							'with'=>array()
					),
					'pagination'=>false,
			));
		
			$iteratorFreq = new CDataProviderIterator($dataProviderFreq);
			foreach($iteratorFreq as $tfrequencia) {
				$ttur_aluno->frequencia = $tfrequencia->frequencia;
			}
		}
		
		$this->render('indexPro',array(
				'dataProvider'=>$dataProvider,
				'model'=>$model,
		));		
	}
	
	public function actionConfirmarAusencia()
	{
		$model=new ttur_aluno;
		$model->id_turma = $_GET['idTurma'];
		$model->data = $_GET['data'];
		$model->id_aluno = $_GET['idAluno'];
		
		$encontrou = false;
		$data = new DateTime();
		
		$dataProvider=new CActiveDataProvider('tfrequencia', array(
				'criteria'=>array(
						'condition'=>'data = \''.$model->data.'\' AND id_aluno='.$model->id_aluno,
				)
		));
		
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $tfrequencia) {
			$tfrequencia->frequencia = 0;
			$tfrequencia->save();
			$encontrou = true;
		}
		
		if(!$encontrou){
			$modelFreq=new tfrequencia;
			$modelFreq->id_aluno = $_GET['idAluno'];
			$modelFreq->frequencia = 0;
			$modelFreq->data = $model->data;
			$modelFreq->save();
		}
		
		$dataProvider=new CActiveDataProvider('ttur_aluno', array(
				'criteria'=>array(
						'select'=>array(
								't.id',
								't.id_turma',
								't.id_aluno',
						),
						'condition'=>'t.id_turma = '.$model->id_turma,
						'limit'=>100,
						'together'=>false,
						'with'=>array()
				),
				'pagination'=>false,
		));
		
		$iterator = new CDataProviderIterator($dataProvider);
		foreach($iterator as $ttur_aluno) {
			$ttur_aluno->data = $model->data;
			$dataProviderFreq=new CActiveDataProvider('tfrequencia', array(
					'criteria'=>array(
							'select'=>array(
									't.frequencia',
							),
							'condition'=>'t.id_aluno = '.$ttur_aluno->id.'  and t.data = \''.$model->data.'\'',
							'limit'=>100,
							'together'=>false,
							'with'=>array()
					),
					'pagination'=>false,
			));
		
			$iteratorFreq = new CDataProviderIterator($dataProviderFreq);
			foreach($iteratorFreq as $tfrequencia) {
				$ttur_aluno->frequencia = $tfrequencia->frequencia;
			}
		}
		
		$this->render('indexPro',array(
				'dataProvider'=>$dataProvider,
				'model'=>$model,
		));
	}


	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ttur_aluno('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ttur_aluno']))
			$model->attributes=$_GET['ttur_aluno'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=ttur_aluno::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='ttur-aluno-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
