<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dt_nasc')); ?>:</b>
	<?php echo CHtml::encode($data->dt_nasc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_cel')); ?>:</b>
	<?php echo CHtml::encode($data->tel_cel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tel_res')); ?>:</b>
	<?php echo CHtml::encode($data->tel_res); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cidade')); ?>:</b>
	<?php echo CHtml::encode($data->id_cidade0->id), (' - '), ($data->id_cidade0->descricao);?>
	<br />


</div>