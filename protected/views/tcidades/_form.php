<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcidades-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sigla'); ?>
		<?php echo $form->textField($model,'sigla',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'sigla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_uf'); ?>
		<?php echo $form->textField($model,'id_uf'); ?>
		<?php echo $form->error($model,'id_uf'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->