<?php 

getTopIncludes();

$htmlHead =  <<<HTMLHEAD
	<head>
		$uMeta
		<meta content="" name="keywords"/>
		<meta content="" name="description"/>
		<title></title>
		$uHead		
	</head>
HTMLHEAD;

$htmlHeader = <<<HEADER
	$uHeaderOpen
		$uHeader
	$uHeaderClose
HEADER;

echo $uDoctype.
	$uHTMLOpen.
	$htmlHead;
	flush(); 

echo $uBodyOpen.
	$uSkipLinks.
	$htmlHeader.
	$uMainOpen.
	$uContentOpen.
	$uPageTitle.
	$pageContent;
?>     		