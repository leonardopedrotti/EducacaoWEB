<?php
$this->breadcrumbs=array(
	'Ttur Alunos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ttur_aluno', 'url'=>array('index')),
	array('label'=>'Create ttur_aluno', 'url'=>array('create')),
	array('label'=>'View ttur_aluno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ttur_aluno', 'url'=>array('admin')),
);
?>

<h1>Update ttur_aluno <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>