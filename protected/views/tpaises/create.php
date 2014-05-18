<?php
$this->breadcrumbs=array(
		'Tpaises'=>array('index'),
		'Novo',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Novo País</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>