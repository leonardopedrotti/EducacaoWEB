<?php
$this->breadcrumbs=array(
		'Pa�s'=>array('index'),
		$model->id=>array('view','id'=>$model->id),
		'Alterar',
);

$this->menu=array(
	array('label'=>'Listar', 'url'=>array('index')),
	array('label'=>'Novo', 'url'=>array('create')),
	array('label'=>'Exibir', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Pesquisar', 'url'=>array('admin')),
);
?>

<h1>Alterar Pa�s <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>