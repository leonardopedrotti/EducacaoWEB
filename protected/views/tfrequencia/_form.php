<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tfrequencia-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_aluno'); ?>
		<?php echo $form->textField($model,'id_aluno'); ?>
		<?php echo $form->error($model,'id_aluno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php echo $form->textField($model,'data'); ?>
		<?php echo $form->error($model,'data'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'frequencia'); ?>
		<?php echo $form->textField($model,'frequencia'); ?>
		<?php echo $form->error($model,'frequencia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->