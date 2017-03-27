<?php

$htmlNav = <<<NAV
	$uNavFull
NAV;


$htmlFooter = <<<FOOTER
	$uFooterOpen
		$uVCard
	$uFooterClose
FOOTER;

		echo $uContentClosed.
				$uAsideOpen.
				$pageLevelAside.
				$uAsideClosed.
		$uMainClosed.
		$uSearch.
		$htmlNav.
		$htmlFooter.
		$uJSLocal.
	$uBodyClose.
$uHTMLClose;