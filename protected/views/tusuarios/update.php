<?php
$this->breadcrumbs=array(
	'Tusuarioses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tusuarios', 'url'=>array('index')),
	array('label'=>'Create tusuarios', 'url'=>array('create')),
	array('label'=>'View tusuarios', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tusuarios', 'url'=>array('admin')),
);
?>

<h1>Update tusuarios <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>