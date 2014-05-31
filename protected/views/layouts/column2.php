<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>


<div class="span-5">
	<div id="content">
		<?php
			$tusuarios = $_SESSION['usuario'];
	
			$this->beginWidget('zii.widgets.CPortlet', array(
					'title'=>'Cadastros',
			));
			$this->widget('zii.widgets.CMenu', array(
					'items'=>array(
			array('label'=>'País', 'url'=>array('/tpaises/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'UF', 'url'=>array('/tufs/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Cidade', 'url'=>array('/tcidades/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Pessoa', 'url'=>array('/tpessoas/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Instituição', 'url'=>array('/tinstituicoes/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Usuário', 'url'=>array('/tusuarios/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Curso', 'url'=>array('/tcursos/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Disciplina', 'url'=>array('/tdisciplina/index'), 'visible'=>$tusuarios->tipo == '0'),
			array('label'=>'Turmas Ativas', 'url'=>array('/tturma/indexProAtivas'), 'visible'=>$tusuarios->tipo == '1'),
			array('label'=>'Turmas Encerradas', 'url'=>array('/tturma/indexProEnc'), 'visible'=>$tusuarios->tipo == '1'),
			),
					'htmlOptions'=>array('class'=>'operations'),
			));
			$this->endWidget();
		?>
	</div><!-- content -->
</div>



<div class="span-14">
	<div id="content">
		<?php echo $content; ?>
	</div><!-- content -->
</div>
<div class="span-5 last">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operações',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
</div>
<?php $this->endContent(); ?>