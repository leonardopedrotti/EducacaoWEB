<?php
$this->breadcrumbs=array(
	'Curso'=>array('index'),
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
	$('#tcursos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisar Curso</h1>

<p>
Voc� pode, opcionalmente, digitar um operador de compara��o (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) no in�cio de cada um dos campos de pesquisa para especificar como a compara��o deve ser feita.
</p>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tcursos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'descricao',
		array('name'=>'id_instituicao', 'header'=>'Institui��o', 'value'=>'$data->id_instituicao0->nome_fan'),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
