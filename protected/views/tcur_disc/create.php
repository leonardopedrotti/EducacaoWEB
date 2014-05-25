<?php
$this->breadcrumbs=array(
	'Tcur Discs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List tcur_disc', 'url'=>array('index')),
	array('label'=>'Manage tcur_disc', 'url'=>array('admin')),
);
?>

<h1>Create tcur_disc</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>