<?php
$this->breadcrumbs=array(
	'Tinstituicoes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tinstituicoes', 'url'=>array('index')),
	array('label'=>'Manage tinstituicoes', 'url'=>array('admin')),
);
?>

<h1>Create tinstituicoes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>