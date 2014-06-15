<?php

class tfrequenciaTest extends WebTestCase
{
	public $fixtures=array(
		'tfrequencias'=>'tfrequencia',
	);

	public function testShow()
	{
		$this->open('?r=tfrequencia/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tfrequencia/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tfrequencia/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tfrequencia/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tfrequencia/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tfrequencia/admin');
	}
}
