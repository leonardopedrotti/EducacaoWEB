<?php
$this->breadcrumbs=array(
	'Cidade'=>array('index'),
	'Novo',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Nova Cidade</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>