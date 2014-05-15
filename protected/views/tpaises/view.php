<?php
$this->breadcrumbs=array(
	'Tpaises'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tpaises', 'url'=>array('index')),
	array('label'=>'Create tpaises', 'url'=>array('create')),
	array('label'=>'Update tpaises', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tpaises', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tpaises', 'url'=>array('admin')),
);
?>

<h1>View tpaises #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'descricao',
		'sigla',
	),
)); ?>
