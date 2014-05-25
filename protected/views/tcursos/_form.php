<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tcursos-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_instituicao'); ?>
		<?php echo $form->dropDownList($model,'id_instituicao', CHtml::listData(Tinstituicoes::model()->findAll(), 'id', 'nome_fan')); ?>
		<?php echo $form->error($model,'id_instituicao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->