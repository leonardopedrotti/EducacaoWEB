<?php
$this->breadcrumbs=array(
	'Tcur Discs',
);

$this->menu=array(
	array('label'=>'Create tcur_disc', 'url'=>array('create')),
	array('label'=>'Manage tcur_disc', 'url'=>array('admin')),
);
?>

<h1>Tcur Discs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
