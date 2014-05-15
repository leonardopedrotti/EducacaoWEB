<?php
$this->breadcrumbs=array(
	'Tpaises',
);

$this->menu=array(
	array('label'=>'Create tpaises', 'url'=>array('create')),
	array('label'=>'Manage tpaises', 'url'=>array('admin')),
);
?>

<h1>Tpaises</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
