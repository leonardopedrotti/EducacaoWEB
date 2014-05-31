<?php
$this->breadcrumbs=array(
	'Alunos',
);
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alunos-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
		'header'=>'Alunos', // give new column a header
		'type'=>'HTML', // set it to manual HTML
		'value'=>'$data->id_aluno0->id_pessoa0->nome' // here is where you call the new function
),
	),
)); ?>