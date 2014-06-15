<?php
$this->breadcrumbs=array(
	'Tfrequencias'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tfrequencia', 'url'=>array('index')),
	array('label'=>'Create tfrequencia', 'url'=>array('create')),
	array('label'=>'View tfrequencia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tfrequencia', 'url'=>array('admin')),
);
?>

<h1>Update tfrequencia <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>