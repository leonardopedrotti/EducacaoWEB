<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razao_social')); ?>:</b>
	<?php echo CHtml::encode($data->razao_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_fan')); ?>:</b>
	<?php echo CHtml::encode($data->nome_fan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cidade')); ?>:</b>
	<?php echo CHtml::encode($data->id_cidade); ?>
	<br />


</div>