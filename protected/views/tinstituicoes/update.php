<?php
$this->breadcrumbs=array(
	'Tinstituicoes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tinstituicoes', 'url'=>array('index')),
	array('label'=>'Create tinstituicoes', 'url'=>array('create')),
	array('label'=>'View tinstituicoes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tinstituicoes', 'url'=>array('admin')),
);
?>

<h1>Update tinstituicoes <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>