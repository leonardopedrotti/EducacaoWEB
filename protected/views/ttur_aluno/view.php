<?php
$this->breadcrumbs=array(
	'Ttur Alunos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ttur_aluno', 'url'=>array('index')),
	array('label'=>'Create ttur_aluno', 'url'=>array('create')),
	array('label'=>'Update ttur_aluno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ttur_aluno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ttur_aluno', 'url'=>array('admin')),
);
?>

<h1>View ttur_aluno #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_turma',
		'id_aluno',
	),
)); ?>
