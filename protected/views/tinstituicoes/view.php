<?php
$this->breadcrumbs=array(
	'Tinstituicoes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tinstituicoes', 'url'=>array('index')),
	array('label'=>'Create tinstituicoes', 'url'=>array('create')),
	array('label'=>'Update tinstituicoes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tinstituicoes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tinstituicoes', 'url'=>array('admin')),
);
?>

<h1>View tinstituicoes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'razao_social',
		'nome_fan',
		'id_cidade',
	),
)); ?>
