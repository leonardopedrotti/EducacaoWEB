<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tinstituicoes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'razao_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_fan'); ?>
		<?php echo $form->textField($model,'nome_fan',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nome_fan'); ?>
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