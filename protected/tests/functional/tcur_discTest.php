<?php

class tcur_discTest extends WebTestCase
{
	public $fixtures=array(
		'tcur_discs'=>'tcur_disc',
	);

	public function testShow()
	{
		$this->open('?r=tcur_disc/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=tcur_disc/create');
	}

	public function testUpdate()
	{
		$this->open('?r=tcur_disc/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=tcur_disc/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=tcur_disc/index');
	}

	public function testAdmin()
	{
		$this->open('?r=tcur_disc/admin');
	}
}
