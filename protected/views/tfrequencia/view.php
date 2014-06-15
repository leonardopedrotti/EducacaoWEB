<?php
$this->breadcrumbs=array(
	'Tfrequencias'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tfrequencia', 'url'=>array('index')),
	array('label'=>'Create tfrequencia', 'url'=>array('create')),
	array('label'=>'Update tfrequencia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tfrequencia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tfrequencia', 'url'=>array('admin')),
);
?>

<h1>View tfrequencia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_aluno',
		'data',
		'frequencia',
	),
)); ?>
