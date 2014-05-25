<?php
$this->breadcrumbs=array(
	'Tcur Discs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List tcur_disc', 'url'=>array('index')),
	array('label'=>'Create tcur_disc', 'url'=>array('create')),
	array('label'=>'Update tcur_disc', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete tcur_disc', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage tcur_disc', 'url'=>array('admin')),
);
?>

<h1>View tcur_disc #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_curso',
		'id_disciplina',
	),
)); ?>
