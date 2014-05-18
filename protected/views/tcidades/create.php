<?php
$this->breadcrumbs=array(
	'Tcidades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tcidades', 'url'=>array('index')),
);
?>

<h1>Create tcidades</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>