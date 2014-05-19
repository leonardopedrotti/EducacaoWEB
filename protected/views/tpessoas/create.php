<?php
$this->breadcrumbs=array(
	'Tpessoases'=>array('index'),
	'Novo',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Nova Pessoa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>