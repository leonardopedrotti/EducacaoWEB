<?php

class tusuariosTest extends WebTestCase
{
	public $fixtures=array(
		'tusuarioses'=>'tusuarios',
	);

	public function testShow()
	{
		$this->open('?r=tusuarios/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tusuarios/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tusuarios/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tusuarios/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tusuarios/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tusuarios/admin');
	}
}
