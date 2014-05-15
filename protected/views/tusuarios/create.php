<?php
$this->breadcrumbs=array(
	'Tusuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tusuarios', 'url'=>array('index')),
	array('label'=>'Manage tusuarios', 'url'=>array('admin')),
);
?>

<h1>Create tusuarios</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>