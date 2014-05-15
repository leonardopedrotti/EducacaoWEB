<?php
$this->breadcrumbs=array(
	'Tufs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tufs', 'url'=>array('index')),
	array('label'=>'Create tufs', 'url'=>array('create')),
	array('label'=>'View tufs', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tufs', 'url'=>array('admin')),
);
?>

<h1>Update tufs <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>