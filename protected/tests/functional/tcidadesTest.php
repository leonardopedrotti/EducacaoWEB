<?php

class tcidadesTest extends WebTestCase
{
	public $fixtures=array(
		'tcidades'=>'tcidades',
	);

	public function testShow()
	{
		$this->open('?r=tcidades/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tcidades/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tcidades/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tcidades/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tcidades/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tcidades/admin');
	}
}
