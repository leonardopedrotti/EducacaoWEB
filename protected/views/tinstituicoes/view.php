<?php
$this->breadcrumbs=array(
	'Instituição'=>array('index'),
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

<h1>Instituição <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'razao_social',
		'nome_fan',
		array('label'=>'Cidade', 'value'=>$model->id_cidade0->descricao),
	),
)); ?>
