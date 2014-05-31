<?php
$this->breadcrumbs=array(
	'Tturmas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tturma', 'url'=>array('index')),
	array('label'=>'Manage tturma', 'url'=>array('admin')),
);
?>

<h1>Create tturma</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>