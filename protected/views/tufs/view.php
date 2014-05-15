<?php
$this->breadcrumbs=array(
	'Tufs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tufs', 'url'=>array('index')),
	array('label'=>'Create tufs', 'url'=>array('create')),
	array('label'=>'Update tufs', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tufs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tufs', 'url'=>array('admin')),
);
?>

<h1>View tufs #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'uf',
		'id_pais',
	),
)); ?>
