<?php

class tpaisesTest extends WebTestCase
{
	public $fixtures=array(
		'tpaises'=>'tpaises',
	);

	public function testShow()
	{
		$this->open('?r=tpaises/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tpaises/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tpaises/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tpaises/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tpaises/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tpaises/admin');
	}
}
