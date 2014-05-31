<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano')); ?>:</b>
	<?php echo CHtml::encode($data->ano); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('semestre')); ?>:</b>
	<?php echo CHtml::encode($data->semestre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carga_horaria')); ?>:</b>
	<?php echo CHtml::encode($data->carga_horaria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tcur_disc')); ?>:</b>
	<?php echo CHtml::encode($data->id_tcur_disc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_professor')); ?>:</b>
	<?php echo CHtml::encode($data->id_professor); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('ativo')); ?>:</b>
	<?php echo CHtml::encode($data->ativo); ?>
	<br />

</div>