<?php


class Bun
{
	const OWNER = "Bakery Inc.";
	public static $OWNER_TWO = "UAB Kepykla";
	private $a = "A";
	protected $b = "B";
	public $c = "C";
}

Bun::$OWNER_TWO = Bun::OWNER;
print_r(Bun::OWNER);
print_r(Bun::$OWNER_TWO);
die ();
$bun = new Bun();


print_r($bun);
print_r($bun ->c);
