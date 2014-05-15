<?php

class tinst_usuTest extends WebTestCase
{
	public $fixtures=array(
		'tinst_usus'=>'tinst_usu',
	);

	public function testShow()
	{
		$this->open('?r=tinst_usu/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tinst_usu/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tinst_usu/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tinst_usu/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tinst_usu/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tinst_usu/admin');
	}
}
