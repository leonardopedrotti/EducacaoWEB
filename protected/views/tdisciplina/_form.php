<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tdisciplina-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'disciplina'); ?>
		<?php echo $form->textField($model,'disciplina',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'disciplina'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ementa'); ?>
		<?php echo $form->textField($model,'ementa',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ementa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bibliografia'); ?>
		<?php echo $form->textField($model,'bibliografia',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'bibliografia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->