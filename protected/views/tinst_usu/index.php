<?php
$this->breadcrumbs=array(
	'Tinst Usus',
);

$this->menu=array(
	array('label'=>'Create tinst_usu', 'url'=>array('create')),
	array('label'=>'Manage tinst_usu', 'url'=>array('admin')),
);
?>

<h1>Tinst Usus</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
