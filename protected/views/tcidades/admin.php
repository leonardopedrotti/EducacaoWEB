<?php
$this->breadcrumbs=array(
	'Cidade'=>array('index'),
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
	$('#tcidades-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisar Cidade</h1>

<p>
Você pode, opcionalmente, digitar um operador de comparação (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no início de cada um dos campos de pesquisa para especificar como a comparação deve ser feita.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tcidades-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descricao',
		'sigla',
		array('name'=>'id_uf', 'header'=>'Uf', 'value'=>'$data->id_uf0->descricao'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
