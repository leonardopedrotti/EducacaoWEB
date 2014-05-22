<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tinstituicoes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> são obrigatórios.</p>

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
		<?php echo $form->dropDownList($model,'id_cidade', CHtml::listData(Tcidades::model()->findAll(), 'id', 'descricao')); ?>
		<?php echo $form->error($model,'id_cidade'); ?>
	</div>
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->