<?php
$this->breadcrumbs=array(
	'Tufs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tufs', 'url'=>array('index')),
	array('label'=>'Manage tufs', 'url'=>array('admin')),
);
?>

<h1>Create tufs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>