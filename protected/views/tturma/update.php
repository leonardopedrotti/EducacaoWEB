<?php
$this->breadcrumbs=array(
	'Tturmas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tturma', 'url'=>array('index')),
	array('label'=>'Create tturma', 'url'=>array('create')),
	array('label'=>'View tturma', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tturma', 'url'=>array('admin')),
);
?>

<h1>Update tturma <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>