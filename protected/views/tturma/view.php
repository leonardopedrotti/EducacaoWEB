<?php
$this->breadcrumbs=array(
	'Turma'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Create tturma', 'url'=>array('create')),
	array('label'=>'Update tturma', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tturma', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tturma', 'url'=>array('admin')),
);
?>

<h1>View tturma #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'ano',
		'semestre',
		'carga_horaria',
		'nome',
		'id_tcur_disc',
		'id_professor',
		'ativo',
	),
)); ?>
