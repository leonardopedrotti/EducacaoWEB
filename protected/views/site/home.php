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
	
	//session_start();	
	//$tusuarios = $_SESSION['usuario'];
	//echo $tusuarios->tipo;
	
	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Menu',
	));
	$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
	array('label'=>'Cadastro de Paises', 'url'=>array('/tpaises/index')),
	array('label'=>'Registrar Frequencia', 'url'=>array('/frequencia')),
	array('label'=>'Registrar Notas', 'url'=>array('/nota/index'))
	),
			'htmlOptions'=>array('class'=>'operations'),
	));
	$this->endWidget();
	?>
	</div>
	<!-- sidebar -->
</div>
