<?php
$this->breadcrumbs=array(
	'Usuário',
);

$this->menu=array(
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Usuário</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
