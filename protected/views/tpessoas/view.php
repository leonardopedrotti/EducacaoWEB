<?php
$this->breadcrumbs=array(
	'Tpessoases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tpessoas', 'url'=>array('index')),
	array('label'=>'Create tpessoas', 'url'=>array('create')),
	array('label'=>'Update tpessoas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tpessoas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tpessoas', 'url'=>array('admin')),
);
?>

<h1>View tpessoas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nome',
		'dt_nasc',
		'tel_cel',
		'tel_res',
		'endereco',
		'id_cidade',
	),
)); ?>
