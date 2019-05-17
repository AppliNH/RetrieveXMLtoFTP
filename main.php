<?php
header("Access-Control-Allow-Origin: *");
$toReturn = array();

require './retrieve.php';

$XMLfile = './content.xml';
$XMLMonthDate = date ("m",filemtime($XMLfile));
$XMLYearDate = date ("Y",filemtime($XMLfile));

$currentYearDate = date("Y");
$currentMonthDate = date("m");

if ($XMLYearDate < $currentYearDate )
{
	LoadXML(); 
}
if ($XMLYearDate == $currentYearDate )
{
	if ($XMLMonthDate < $currentMonthDate )
	{
  		LoadXML();
	}  
}

?>