<?php

class tinstituicoesTest extends WebTestCase
{
	public $fixtures=array(
		'tinstituicoes'=>'tinstituicoes',
	);

	public function testShow()
	{
		$this->open('?r=tinstituicoes/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tinstituicoes/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tinstituicoes/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tinstituicoes/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tinstituicoes/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tinstituicoes/admin');
	}
}
