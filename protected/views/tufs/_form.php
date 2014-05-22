<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tufs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> s�o obrigat�rios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uf'); ?>
		<?php echo $form->textField($model,'uf',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'uf'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'id_pais'); ?>
		<?php echo $form->dropDownList($model,'id_pais', CHtml::listData(Tpaises::model()->findAll(), 'id', 'descricao')); ?>
		<?php echo $form->error($model,'id_pais'); ?>
	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Criar' : 'Salvar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->