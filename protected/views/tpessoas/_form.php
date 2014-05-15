<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tpessoas-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dt_nasc'); ?>
		<?php echo $form->textField($model,'dt_nasc'); ?>
		<?php echo $form->error($model,'dt_nasc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_cel'); ?>
		<?php echo $form->textField($model,'tel_cel',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tel_cel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tel_res'); ?>
		<?php echo $form->textField($model,'tel_res',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'tel_res'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_cidade'); ?>
		<?php echo $form->textField($model,'id_cidade'); ?>
		<?php echo $form->error($model,'id_cidade'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->