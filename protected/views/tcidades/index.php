<?php
$this->breadcrumbs=array(
	'Tcidades',
);

$this->menu=array(
	array('label'=>'Create tcidades', 'url'=>array('create')),
	array('label'=>'Manage tcidades', 'url'=>array('admin')),
);
?>

<h1>Tcidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
