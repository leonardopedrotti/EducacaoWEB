<?php
$this->breadcrumbs=array(
		'Pa�s',
);

$this->menu=array(
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Pa�s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
