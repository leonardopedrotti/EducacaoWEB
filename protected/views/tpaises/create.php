<?php
$this->breadcrumbs=array(
	'Tpaises'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tpaises', 'url'=>array('index')),
	array('label'=>'Manage tpaises', 'url'=>array('admin')),
);
?>

<h1>Create tpaises</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>