<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - Contact Us';

$this->menu=array(
array('label'=>'Create tpaises', 'url'=>array('create')),
array('label'=>'Manage tpaises', 'url'=>array('admin')),
);
?>
<div class="span-5 last">
	<div id="menu">
	<?php
	
	session_start();	
	$tusuarios = $_SESSION['usuario'];
	//echo $tusuarios->tipo;
	
	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'',
	));
	$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
	array('label'=>'Cadastro de País', 'url'=>array('/tpaises/index'), 'visible'=>$tusuarios->tipo == '0'),
	array('label'=>'Cadastro de UF', 'url'=>array('/tufs/index'), 'visible'=>$tusuarios->tipo == '0'),
	array('label'=>'Cadastro de Cidade', 'url'=>array('/tcidades/index'), 'visible'=>$tusuarios->tipo == '0'),
	array('label'=>'Cadastro de Pessoa', 'url'=>array('/tpessoas/index'), 'visible'=>$tusuarios->tipo == '0'),
	array('label'=>'Cadastro de Instituição', 'url'=>array('/tinstituicoes/index'), 'visible'=>$tusuarios->tipo == '0'),
	array('label'=>'Registrar Frequencia', 'url'=>array('/frequencia'), 'visible'=>$tusuarios->tipo == '1'),
	array('label'=>'Registrar Notas', 'url'=>array('/nota/index'), 'visible'=>$tusuarios->tipo == '1')
	),
			'htmlOptions'=>array('class'=>'operations'),
	));
	$this->endWidget();
	?>
	</div>
	<!-- sidebar -->
</div>
