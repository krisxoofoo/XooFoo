<?php
/**
 * Stop Spam Referer - Security system
 * =================================== 
 * @author 	Cyril Levert
 * @copyright	(c) 2009
 * 			http://www.php-minimus.org
 * 			dev@php-minimus.org
 *  @version	Release version 1.0.1
 * Release date : 12-17-2009
 *
 * @license		This program is free software
**/

if ( BAD_REFERER_ID === true ) {

	/** domains blacklist : domain.com */
	array_push( $ct_rules, '' );
	//array_push( $ct_rules, $spamreferer_domainsblacklist );

	/** keywords blacklist : poker */
	array_push( $ct_rules2, '' );
	//array_push( $ct_rules2, $spamreferer_keywordsblacklist );
}
?>