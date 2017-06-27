<?php
/**
*
* @package phpBB Extension - LMDI My Topics
* @copyright (c) 2015-2017 Pierre Duhem - LMDI
* Nederlandse vertaling @ Solidjeuh <https://www.froddelpower.be>  
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// Some characters you may want to copy&paste:
// ’ » “ ” …

$lang = array_merge($lang, array(
	'ACP_MYTOP_TITLE'		=> 'Mijn onderwerpen',
	'ACP_MYTOP_CONFIG'		=> 'Extensie instellingen',
	'ACP_MYTOP_UPDATED'		=> 'De configuratie werd succesvol geupdate.',
	'ACP_MYTOP_TOP'		=> 'Boven',
	'ACP_MYTOP_BOTTOM'		=> 'Onder',
	'MY_TOPICS'			=> 'Je onderwerpen',
	'MYTOP_POS'			=> '“Je onderwerpen” als eerste item',
	'MYTOP_POS_EXPLAIN'		=> 'Selecteer “Boven” om het nieuwe menu item bovenaan in het “Snelle links” dropdown menu te plaatsen. Selecteer “Onderaan” om het beneden te plaatsen.',
	'MYPOST_NO'			=> 'Verberg het “Je berichten” item',
	'MYPOST_NO_EXPLAIN'		=> 'U kunt misschien best het “Je berichten” item in het “Snelle links” menu verbergen aangezien beide heel erg vergelijkbaar zijn.',
));
