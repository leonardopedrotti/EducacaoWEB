<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disciplina')); ?>:</b>
	<?php echo CHtml::encode($data->disciplina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ementa')); ?>:</b>
	<?php echo CHtml::encode($data->ementa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bibliografia')); ?>:</b>
	<?php echo CHtml::encode($data->bibliografia); ?>
	<br />


</div>