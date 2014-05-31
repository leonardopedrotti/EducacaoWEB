<div class="view">
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode('Curso'); ?>:</b>
	<?php echo CHtml::encode($data->id_tcur_disc0->id_curso0->descricao);?>
	<br />
	
	<b><?php echo CHtml::encode('Disciplina'); ?>:</b>
	<?php echo CHtml::encode($data->id_tcur_disc0->id_disciplina0->disciplina);?>
	<br />

	<b><?php echo CHtml::encode('Ano / Semestre'); ?>:</b>
	<?php echo CHtml::encode($data->ano.' / ' . $data->semestre); ?>
	<br />
	
	<b><?php echo CHtml::encode('Alunos'); ?>:</b>
	<?php echo CHtml::link(CHtml::encode('Exibir'), array('ttur_aluno/indexPro', 'idTurma'=>$data->id)); ?>
	<br />
</div>