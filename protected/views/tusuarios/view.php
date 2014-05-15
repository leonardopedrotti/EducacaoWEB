<?php
$this->breadcrumbs=array(
	'Tusuarioses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tusuarios', 'url'=>array('index')),
	array('label'=>'Create tusuarios', 'url'=>array('create')),
	array('label'=>'Update tusuarios', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tusuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tusuarios', 'url'=>array('admin')),
);
?>

<h1>View tusuarios #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'login',
		'senha',
		'tipo',
		'ativo',
		'id_pessoa',
	),
)); ?>
