<?php
$this->breadcrumbs=array(
	'Institui��o'=>array('index'),
	'Novo',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Nova Institui��o</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>