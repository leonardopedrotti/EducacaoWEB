<?php
$this->breadcrumbs=array(
	'Tpaises'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tpaises', 'url'=>array('index')),
	array('label'=>'Create tpaises', 'url'=>array('create')),
	array('label'=>'View tpaises', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tpaises', 'url'=>array('admin')),
);
?>

<h1>Update tpaises <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>