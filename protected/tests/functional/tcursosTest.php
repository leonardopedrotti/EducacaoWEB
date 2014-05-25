<?php

class tcursosTest extends WebTestCase
{
	public $fixtures=array(
		'tcursoses'=>'tcursos',
	);

	public function testShow()
	{
		$this->open('?r=tcursos/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tcursos/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tcursos/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tcursos/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tcursos/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tcursos/admin');
	}
}
