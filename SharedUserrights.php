<?php
/**
* SharedUserrights -- manage global rights stored in shared database
*
* @package MediaWiki
* @subpackage Extensions
*
* @author: Lucas 'TOR' Garczewski <tor@wikia.com>
* @author: Maciej Błaszkowski (Marooned) <marooned at wikia-inc.com>
*
* @copyright Copyright (C) 2008 Lucas 'TOR' Garczewski, Wikia, Inc.
* @copyright Copyright (C) 2010 Maciej Błaszkowski (Marooned), Wikia, Inc.
* @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
*
* @todo: display global rights in Listusers
*
*/

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'SharedUserrights' );
	
	$wgMessagesDirs['SharedUserrights'] = __DIR__ . '/i18n';
	
	wfWarn(
		'Deprecated PHP entry point used for SharedUserrights extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	
	return true;
} else {
	die( 'This version of the SharedUserrights extension requires MediaWiki 1.25+' );
}
