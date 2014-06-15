<?php
$this->breadcrumbs=array(
	'Tfrequencias',
);

$this->menu=array(
	array('label'=>'Create tfrequencia', 'url'=>array('create')),
	array('label'=>'Manage tfrequencia', 'url'=>array('admin')),
);
?>

<h1>Tfrequencias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
