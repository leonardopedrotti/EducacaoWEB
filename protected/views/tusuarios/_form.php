<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tusuarios-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> s�o obrigat�rios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'senha'); ?>
		<?php echo $form->textField($model,'senha',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'senha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ativo'); ?>
		<?php echo $form->textField($model,'ativo'); ?>
		<?php echo $form->error($model,'ativo'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_pessoa'); ?>
		<?php echo $form->dropDownList($model,'id_pessoa', CHtml::listData(Tpessoas::model()->findAll(), 'id', 'nome')); ?>
		<?php echo $form->error($model,'id_pessoa'); ?>
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