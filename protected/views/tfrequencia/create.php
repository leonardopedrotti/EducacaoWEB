<?php
$this->breadcrumbs=array(
	'Tfrequencias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tfrequencia', 'url'=>array('index')),
	array('label'=>'Manage tfrequencia', 'url'=>array('admin')),
);
?>

<h1>Create tfrequencia</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>