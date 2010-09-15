<?php
/*
 * $Id: seo.php
 * Module: mytube
 * Author: Nikita <http://www.aideordi.com>
 * Licence: GNU
 */
$seoOp = $_GET['seoOp'];
$seoArg = $_GET['seoArg'];
$seoOther = $_GET['seoOther'];

if (!empty($seoOther))
{
	$seoOther = explode("/",$seoOther);
}

$seoMap = array(
	'cat' => 'viewcat.php',
	'titre' => 'singlevideo.php'
);

if (! empty($seoOp) && ! empty($seoMap[$seoOp]))
{
	// module specific dispatching logic, other module must implement as
	// per their requirements.
	$newUrl = '/modules/mytube/' . $seoMap[$seoOp];

	$_ENV['PHP_SELF'] = $newUrl;
	$_SERVER['SCRIPT_NAME'] = $newUrl;
	$_SERVER['PHP_SELF'] = $newUrl;
	switch ($seoOp) {
		case 'cat':
			$_SERVER['REQUEST_URI'] = $newUrl . '?cid=' . $seoArg;
			$_GET['cid'] = $seoArg;
			break;
		case 'titre':
			$_SERVER['REQUEST_URI'] = $newUrl . '?lid=' . $seoArg;
			$_GET['lid'] = $seoArg;
			break;
	}

	include( $seoMap[$seoOp]);
}

exit;

?>