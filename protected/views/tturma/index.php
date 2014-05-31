<?php
$this->breadcrumbs=array(
	'Tturmas',
);

$this->menu=array(
	array('label'=>'Create tturma', 'url'=>array('create')),
	array('label'=>'Manage tturma', 'url'=>array('admin')),
);
?>

<h1>Tturmas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
