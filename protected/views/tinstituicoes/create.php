<?php
$this->breadcrumbs=array(
	'Tinstituicoes'=>array('index'),
	'Novo',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Nova Institui��o</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>