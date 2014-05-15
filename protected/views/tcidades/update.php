<?php
$this->breadcrumbs=array(
	'Tcidades'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tcidades', 'url'=>array('index')),
	array('label'=>'Create tcidades', 'url'=>array('create')),
	array('label'=>'View tcidades', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tcidades', 'url'=>array('admin')),
);
?>

<h1>Update tcidades <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>