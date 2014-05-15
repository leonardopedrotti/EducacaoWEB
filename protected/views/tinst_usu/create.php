<?php
$this->breadcrumbs=array(
	'Tinst Usus'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tinst_usu', 'url'=>array('index')),
	array('label'=>'Manage tinst_usu', 'url'=>array('admin')),
);
?>

<h1>Create tinst_usu</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>