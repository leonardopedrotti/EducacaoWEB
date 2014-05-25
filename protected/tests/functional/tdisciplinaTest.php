<?php

class tdisciplinaTest extends WebTestCase
{
	public $fixtures=array(
		'tdisciplinas'=>'tdisciplina',
	);

	public function testShow()
	{
		$this->open('?r=tdisciplina/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tdisciplina/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tdisciplina/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tdisciplina/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tdisciplina/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tdisciplina/admin');
	}
}
