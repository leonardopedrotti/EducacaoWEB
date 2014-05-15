<?php
$this->breadcrumbs=array(
	'Tcidades'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tcidades', 'url'=>array('index')),
	array('label'=>'Create tcidades', 'url'=>array('create')),
	array('label'=>'Update tcidades', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tcidades', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tcidades', 'url'=>array('admin')),
);
?>

<h1>View tcidades #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'sigla',
		'id_uf',
	),
)); ?>
