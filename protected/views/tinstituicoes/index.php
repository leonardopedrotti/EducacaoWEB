<?php
$this->breadcrumbs=array(
	'Tinstituicoes',
);

$this->menu=array(
	array('label'=>'Create tinstituicoes', 'url'=>array('create')),
	array('label'=>'Manage tinstituicoes', 'url'=>array('admin')),
);
?>

<h1>Tinstituicoes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
