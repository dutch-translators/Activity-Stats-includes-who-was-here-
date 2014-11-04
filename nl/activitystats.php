<?php
/**
*
* @package phpBB Extension - Activity Stats
* @copyright (c) 2014 Robet Heim
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

$lang = array_merge($lang, array(
// for the normal sites
	'ACTIVITY_STATS'					=> 'Actiteit Statistieken',
	'ACTIVITY_STATS_LATEST1'			=> 'laatst op',
	'ACTIVITY_STATS_LATEST2'			=> '',//used for parts like o'clock in the timedisplay (last at vw:xy "o'clock")

	'ACTIVITY_STATS_NEW_TOPICS'			=> 'Nieuwe onderwerpen <strong>%d</strong>',
	'ACTIVITY_STATS_NEW_POSTS'			=> 'Nieuwe berichten <strong>%d</strong>',
	'ACTIVITY_STATS_NEW_USERS'			=> 'Nieuwe leden <strong>%d</strong>',

	'ACTIVITY_STATS_TOTAL'				=> array(
		0		=> 'In totaal waren er <strong>0</strong> gebruikers online :: ',
		1		=> 'In totaal was er <strong>%d</strong> gebruiker online :: ',
		2		=> 'In totaal waren er <strong>%d</strong> gebruikers online :: ',
	),
	'ACTIVITY_STATS_REG_USERS'			=> array(
		0		=> '0 geregistreerde',
		1		=> '%d geregistreerde',
		2		=> '%d geregistreerde',
	),
	'ACTIVITY_STATS_HIDDEN'				=> array(
		0		=> '0 verborgen',
		1		=> '%d verborgen',
		2		=> '%d verborgen',
	),
	'ACTIVITY_STATS_BOTS'				=> array(
		0		=> '0 bots',
		1		=> '%d bot',
		2		=> '%d bots',
	),
	'ACTIVITY_STATS_GUESTS'				=> array(
		0		=> '0 gasten',
		1		=> '%d gast',
		2		=> '%d gasten',
	),

	'ACTIVITY_STATS_WORD'				=> ' en',
	'ACTIVITY_STATS_EXP'				=> 'De volgende gegevens zijn gebaseerd op actieve gebruikers vandaag',
	'ACTIVITY_STATS_EXP_TIME'			=> array(
		0		=> 'De volgende gegevens zijn gebaseerd op actieve gebruikers nu', // h=m=s=0 
		1		=> 'De volgende gegevens zijn gebaseerd op actieve gebruikers in het verleden ', // first non zero value is 1
		2		=> 'De volgende gegevens zijn gebaseerd op actieve gebruikers in het verleden ', // first non zero value is >1
	),
	'ACTIVITY_STATS_HOURS'				=> array(
		0		=> '',
		1		=> '%%s %1$s uur',
		2		=> '%%s %1$s uren',
	),
	'ACTIVITY_STATS_MINUTES'			=> array(
		0		=> '',
		1		=> '%%s %1$s minuut',
		2		=> '%%s %1$s minuten',
	),
	'ACTIVITY_STATS_SECONDS'			=> array(
		0		=> '',
		1		=> '%%s %1$s seconde',
		2		=> '%%s %1$s seconden',
	),
	'ACTIVITY_STATS_RECORD_DAY'			=> 'Meeste gebruikers ooit online waren <strong>%1$s</strong> gebruikers op %2$s',
	'ACTIVITY_STATS_RECORD_PERIOD'		=> 'Meeste gebruikers ooit online waren <strong>%1$s</strong> gebruikers tussen %2$s en %3$s',
));

