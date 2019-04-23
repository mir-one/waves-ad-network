<?php
require_once('vendor/autoload.php');

function decode_attachement($str){

	$base58 = new StephenHill\Base58();

	return $base58->decode($str);

}
