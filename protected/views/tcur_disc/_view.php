<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_curso')); ?>:</b>
	<?php echo CHtml::encode($data->id_curso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->id_disciplina); ?>
	<br />


</div>