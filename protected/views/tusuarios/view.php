<?php
$this->breadcrumbs=array(
	'Usu�rio'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Alterar', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Excluir', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Usu�rio <?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'login',
		'senha',
		'tipo',
		'ativo',
		array('label'=>'Pessoa', 'value'=>$model->id_pessoa0->nome),
		array('label'=>'Institui��o', 'value'=>$model->id_instituicao0->nome_fan),
	),
)); ?>
