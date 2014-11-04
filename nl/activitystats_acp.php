<?php
/**
*
* @package phpBB Extension - Activity Stats
* @copyright (c) 2014 Robet Heim
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/


/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACTIVITY_STATS_INSTALLED'				=> 'Geïnstalleerde versie: v%s',

	'ACTIVITY_STATS_TITLE'					=> 'Activity Stats',
	'ACTIVITY_STATS_DISP_SET'				=> 'Toon instellingen',
	'ACTIVITY_STATS_OTHER'					=> 'Overige instellingen',

	// acp form
	'ACTIVITY_STATS_DISP_NEW_TOPICS'		=> 'Toon nieuwe onderwerpen',
	'ACTIVITY_STATS_DISP_NEW_TOPICS_EXP'	=> 'Toon de teller van nieuwe onderwerpen',
	'ACTIVITY_STATS_DISP_NEW_POSTS'			=> 'Toon nieuwe berichten',
	'ACTIVITY_STATS_DISP_NEW_POSTS_EXP'		=> 'Toon de teller van nieuwe berichten',
	'ACTIVITY_STATS_DISP_NEW_USERS'			=> 'Toon nieuwe gebruikes',
	'ACTIVITY_STATS_DISP_NEW_USERS_EXP'		=> 'Toon de teller van nieuwe gebruikers',

	'ACTIVITY_STATS_DISP_BOTS'				=> 'Toon bots',
	'ACTIVITY_STATS_DISP_BOTS_EXP'			=> 'Sommige gebruikers weten niet wat bots zijn en zullen weggaan.',
	'ACTIVITY_STATS_DISP_GUESTS'			=> 'Toon gasten',
	'ACTIVITY_STATS_DISP_GUESTS_EXP'		=> 'Toon gasten bij de teller?',
	'ACTIVITY_STATS_DISP_HIDDEN'			=> 'Toon verborgen gebruikers',
	'ACTIVITY_STATS_DISP_HIDDEN_EXP'		=> 'Verborgen gebrukers tonen in de lijst? (permissies benodigd)',
	'ACTIVITY_STATS_DISP_TIME'				=> 'Toon tijd',
	'ACTIVITY_STATS_DISP_TIME_EXP'			=> 'Alle gebruikers zien het of zien het niet.Er zijn geen speciale persmissies voor administrators.',
	'ACTIVITY_STATS_DISP_TIME_FORMAT'		=> 'Tijdsformaat',
	'ACTIVITY_STATS_DISP_HOVER'				=> 'Toon bij muisovergang',
	'ACTIVITY_STATS_DISP_IP'				=> 'Toon gebruikers-ip',
	'ACTIVITY_STATS_DISP_IP_EXP'			=> 'Alleen voor gebruikers met administrator permissies, net zoals op viewonline.php',

	'ACTIVITY_STATS_RECORD'					=> 'Record',
	'ACTIVITY_STATS_RECORD_EXP'				=> 'Toon en sla record op',
	'ACTIVITY_STATS_RECORD_TIMEFORMAT'		=> 'Datumformaat voor het record',
	'ACTIVITY_STATS_RESET'					=> 'Reset record',
	'ACTIVITY_STATS_RESET_EXP'				=> 'Reset de datum en teller voor het record.',
	'ACTIVITY_STATS_RESET_TRUE'				=> 'Indien je doorgaat, wordt het record gereset.',


	'ACTIVITY_STATS_SETTINGS_SAVED'			=> 'Instellingen succesvol opgeslagen.',
	'ACTIVITY_STATS_SORT_BY'				=> 'Sorteer gebruikers op',
	'ACTIVITY_STATS_SORT_BY_EXP'			=> 'In welke volgorde moeten gebruikers getoond worden?',
	'ACTIVITY_STATS_SORT_BY_0'				=> 'Gebruikersnaam A -> Z',
	'ACTIVITY_STATS_SORT_BY_1'				=> 'Gebruikersnaam Z -> A',
	'ACTIVITY_STATS_SORT_BY_2'				=> 'Tijd van bezoek oplopend',
	'ACTIVITY_STATS_SORT_BY_3'				=> 'Tijd van bezoek aflopend',
	'ACTIVITY_STATS_SORT_BY_4'				=> 'Gebruikers-ID oplopend',
	'ACTIVITY_STATS_SORT_BY_5'				=> 'Gebruikers-ID aflopend',

	'ACTIVITY_STATS_CACHE_TIME'				=> 'Cache tijd (seconden)',
	'ACTIVITY_STATS_CACHE_TIME_EXP'			=> 'Tijd waarin de statistieken niet verniewd worden (verbeterd prestatie)',

	'ACTIVITY_STATS_CHECK_PERMISSIONS'		=> 'Controleer permissies',
	'ACTIVITY_STATS_CHECK_PERMISSIONS_EXP'	=> 'nee=iedereen kan de statistieken bekijken (negeer permissies instellingen); ja=gebruik ingestelde permissies (b.v. alleen tonen voor geregistreerde gebruikers: ACP->permissies->globale permissies -> groepspermissies -> geregistreerde gebruikers -> Geavanceerde permissies -> Overig -> "Kan statistieken bekijken")',

	'ACTIVITY_STATS_MODE'					=> 'Toon gebruikers van ...',
	'ACTIVITY_STATS_MODE_EXP'				=> 'Toont gebruikers van vandaag (vanaf 00:00 forum-timezone), of van de periode (kan hieronder ingesteld worden).',
	'ACTIVITY_STATS_MODE_TODAY'				=> 'Vandaag',
	'ACTIVITY_STATS_MODE_PERIOD'			=> 'Periode',
	'ACTIVITY_STATS_MODE_PERIOD_EXP'		=> 'type 0, als je de gebruikers van de laatste 24 uur wil laten zien',
	'ACTIVITY_STATS_MODE_PERIOD_EXP2'		=> 'uitgeschakeld, als je "vandaag" gekozen hebt',
	'ACTIVITY_STATS_MODE_PERIOD_EXP3'		=> 'seconden',

));

