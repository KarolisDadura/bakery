<?php


class Bun
{
	private $a = "A";
	protected $b = "B";
	public $c = "C";
}

$bun = new Bun();

print_r($bun);
print_r($bun ->c);
