<?php
$this->breadcrumbs=array(
	'Tusuarioses',
);

$this->menu=array(
	array('label'=>'Create tusuarios', 'url'=>array('create')),
	array('label'=>'Manage tusuarios', 'url'=>array('admin')),
);
?>

<h1>Tusuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
