<?php
$this->breadcrumbs=array(
	'Ttur Alunos',
);

$this->menu=array(
	array('label'=>'Create ttur_aluno', 'url'=>array('create')),
	array('label'=>'Manage ttur_aluno', 'url'=>array('admin')),
);
?>

<h1>Ttur Alunos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
