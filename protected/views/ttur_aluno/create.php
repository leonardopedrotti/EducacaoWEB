<?php
$this->breadcrumbs=array(
	'Ttur Alunos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ttur_aluno', 'url'=>array('index')),
	array('label'=>'Manage ttur_aluno', 'url'=>array('admin')),
);
?>

<h1>Create ttur_aluno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>