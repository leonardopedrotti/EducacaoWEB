<?php
$this->breadcrumbs=array(
	'Tinst Usus'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tinst_usu', 'url'=>array('index')),
	array('label'=>'Create tinst_usu', 'url'=>array('create')),
	array('label'=>'Update tinst_usu', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tinst_usu', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tinst_usu', 'url'=>array('admin')),
);
?>

<h1>View tinst_usu #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_usuario',
		'id_instituicao',
	),
)); ?>
