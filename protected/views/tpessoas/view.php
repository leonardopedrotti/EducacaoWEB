<?php
$this->breadcrumbs=array(
	'Tpessoases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Alterar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Tem certeza que deseja excluir este registro?')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Pessoa <?php echo $model->id; ?></h1>

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
