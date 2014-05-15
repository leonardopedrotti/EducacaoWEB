<?php
$this->breadcrumbs=array(
	'Tpessoases',
);

$this->menu=array(
	array('label'=>'Create tpessoas', 'url'=>array('create')),
	array('label'=>'Manage tpessoas', 'url'=>array('admin')),
);
?>

<h1>Tpessoases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
