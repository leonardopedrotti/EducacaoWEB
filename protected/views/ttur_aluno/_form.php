<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ttur-aluno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_turma'); ?>
		<?php echo $form->textField($model,'id_turma'); ?>
		<?php echo $form->error($model,'id_turma'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_aluno'); ?>
		<?php echo $form->textField($model,'id_aluno'); ?>
		<?php echo $form->error($model,'id_aluno'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->