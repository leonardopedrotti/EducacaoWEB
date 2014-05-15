<?php
$this->breadcrumbs=array(
	'Tpessoases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tpessoas', 'url'=>array('index')),
	array('label'=>'Manage tpessoas', 'url'=>array('admin')),
);
?>

<h1>Create tpessoas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>