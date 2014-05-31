<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tturma-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ano'); ?>
		<?php echo $form->textField($model,'ano'); ?>
		<?php echo $form->error($model,'ano'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semestre'); ?>
		<?php echo $form->textField($model,'semestre'); ?>
		<?php echo $form->error($model,'semestre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'carga_horaria'); ?>
		<?php echo $form->textField($model,'carga_horaria'); ?>
		<?php echo $form->error($model,'carga_horaria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_tcur_disc'); ?>
		<?php echo $form->textField($model,'id_tcur_disc'); ?>
		<?php echo $form->error($model,'id_tcur_disc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_professor'); ?>
		<?php echo $form->textField($model,'id_professor'); ?>
		<?php echo $form->error($model,'id_professor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php echo $form->textField($model,'ativo'); ?>
		<?php echo $form->error($model,'ativo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->