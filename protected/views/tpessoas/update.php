<?php
$this->breadcrumbs=array(
	'Tpessoases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List tpessoas', 'url'=>array('index')),
	array('label'=>'Create tpessoas', 'url'=>array('create')),
	array('label'=>'View tpessoas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage tpessoas', 'url'=>array('admin')),
);
?>

<h1>Update tpessoas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>