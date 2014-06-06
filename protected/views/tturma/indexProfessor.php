<?php
$this->breadcrumbs=array(
	'Turma',
);


?>

<h1>Turmas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewProfessor',
)); ?>
