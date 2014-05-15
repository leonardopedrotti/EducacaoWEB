<?php

class tpessoasTest extends WebTestCase
{
	public $fixtures=array(
		'tpessoases'=>'tpessoas',
	);

	public function testShow()
	{
		$this->open('?r=tpessoas/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tpessoas/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tpessoas/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tpessoas/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tpessoas/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tpessoas/admin');
	}
}
