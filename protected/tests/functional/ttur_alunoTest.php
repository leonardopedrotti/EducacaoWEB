<?php

class ttur_alunoTest extends WebTestCase
{
	public $fixtures=array(
		'ttur_alunos'=>'ttur_aluno',
	);

	public function testShow()
	{
		$this->open('?r=ttur_aluno/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=ttur_aluno/create');
	}

	public function testUpdate()
	{
		$this->open('?r=ttur_aluno/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=ttur_aluno/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=ttur_aluno/index');
	}

	public function testAdmin()
	{
		$this->open('?r=ttur_aluno/admin');
	}
}
