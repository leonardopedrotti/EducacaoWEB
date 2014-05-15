<?php
$this->breadcrumbs=array(
	'Tinst Usus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tinst_usu', 'url'=>array('index')),
	array('label'=>'Create tinst_usu', 'url'=>array('create')),
	array('label'=>'View tinst_usu', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tinst_usu', 'url'=>array('admin')),
);
?>

<h1>Update tinst_usu <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>