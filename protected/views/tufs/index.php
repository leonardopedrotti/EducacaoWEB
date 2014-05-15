<?php
$this->breadcrumbs=array(
	'Tufs',
);

$this->menu=array(
	array('label'=>'Create tufs', 'url'=>array('create')),
	array('label'=>'Manage tufs', 'url'=>array('admin')),
);
?>

<h1>Tufs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
