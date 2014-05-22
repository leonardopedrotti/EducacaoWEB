<?php
$this->breadcrumbs=array(
	'Pessoa'=>array('index'),
	'Pesquisar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Novo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tpessoas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisar Pessoa</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no início de cada um dos campos de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tpessoas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nome',
		'dt_nasc',
		'tel_cel',
		'tel_res',
		'endereco',
		array('name'=>'id_cidade', 'header'=>'Cidade', 'value'=>'$data->id_cidade0->descricao'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
