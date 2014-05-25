<?php
$this->breadcrumbs=array(
	'Tcur Discs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tcur_disc', 'url'=>array('index')),
	array('label'=>'Create tcur_disc', 'url'=>array('create')),
	array('label'=>'View tcur_disc', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tcur_disc', 'url'=>array('admin')),
);
?>

<h1>Update tcur_disc <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>