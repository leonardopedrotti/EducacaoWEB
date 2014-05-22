<?php
$this->breadcrumbs=array(
		'País',
);

$this->menu=array(
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>País</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
