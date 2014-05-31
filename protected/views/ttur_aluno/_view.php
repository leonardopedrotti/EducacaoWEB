<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_turma')); ?>:</b>
	<?php echo CHtml::encode($data->id_turma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_aluno')); ?>:</b>
	<?php echo CHtml::encode($data->id_aluno); ?>
	<br />


</div>