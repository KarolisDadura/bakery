<?php


class Bun
{
	const OWNER = "Bakery Inc.";
	private $a = "A";
	protected $b = "B";
	public $c = "C";
}

print_r(Bun::OWNER);
die ();
$bun = new Bun();


print_r($bun);
print_r($bun ->c);
