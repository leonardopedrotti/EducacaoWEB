<?php

class tturmaTest extends WebTestCase
{
	public $fixtures=array(
		'tturmas'=>'tturma',
	);

	public function testShow()
	{
		$this->open('?r=tturma/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tturma/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tturma/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tturma/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tturma/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tturma/admin');
	}
}
