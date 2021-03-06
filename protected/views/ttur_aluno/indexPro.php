<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ttur-aluno-form',
	'enableAjaxValidation'=>false,
	'method'=>'get',
	'action' => $this->createUrl('ttur_aluno/consultar&idTurma='.$model->id_turma)
)); ?>
	
	<?php echo $form->labelEx($model,'Data:'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data',
			'value' => $model->data,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton('Consultar', array('submit' => $this->createUrl('ttur_aluno/consultar'), 'idTurma'=>$model->id_turma, 'data'=>$model->data    )); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->




<?php
$this->breadcrumbs = array (
		'Alunos' 
);
?>



<?php

$this->widget ( 'zii.widgets.grid.CGridView', array (
		'id' => 'alunos-grid',
		'dataProvider' => $dataProvider,
		'columns' => array (
				array (
						'header' => 'Alunos', // give new column a header
						'type' => 'HTML', // set it to manual HTML
						'value' => '$data->id_aluno0->id_pessoa0->nome',  // here is where you call the new function
						'cssClassExpression' => '$data->frequencia ? "presente" : "ausente"'  //background-color: #00FF00 - verde FF0000 - vermelho
						
				),
				array (
						'class' => 'CButtonColumn',
						'htmlOptions' => array('style' => 'white-space: nowrap'),
						'template' => '{presente}{ausente}',
						'buttons' => array (
								'presente' => array (
										'label' => 'Presente',
										'imageUrl' => Yii::app ()->request->baseUrl . '/images/presente.png',
										'url'=>'Yii::app()->createUrl("ttur_aluno/confirmarPresenca", array("idAluno"=>$data->id,"idTurma"=>$data->id_turma0->id,"data"=>$data->data))'
								),
								'ausente' => array (
										'label' => 'Ausente',
										'imageUrl' => Yii::app ()->request->baseUrl . '/images/ausente.png',
										'url'=>'Yii::app()->createUrl("ttur_aluno/confirmarAusencia", array("idAluno"=>$data->id,"idTurma"=>$data->id_turma0->id,"data"=>$data->data))'								 
								) 
						) 
				) 
		) 
) );
?>
