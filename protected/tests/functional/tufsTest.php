<?php

class tufsTest extends WebTestCase
{
	public $fixtures=array(
		'tufs'=>'tufs',
	);

	public function testShow()
	{
		$this->open('?r=tufs/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tufs/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tufs/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tufs/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tufs/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tufs/admin');
	}
}
