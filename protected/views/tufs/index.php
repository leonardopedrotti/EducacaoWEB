<?php
$this->breadcrumbs=array(
	'UF',
);

$this->menu=array(
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>UF</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
