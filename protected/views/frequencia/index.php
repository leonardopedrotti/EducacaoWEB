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
	$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Menu',
	));
	$this->widget('zii.widgets.CMenu', array(
			'items'=>array(
	array('label'=>'Registrar Frequencia', 'url'=>array('/site/index')),
	array('label'=>'Registrar notas', 'url'=>array('/site/index'))
	),
			'htmlOptions'=>array('class'=>'operations'),
	));
	$this->endWidget();
	?>
	</div>
	<!-- sidebar -->
</div>
