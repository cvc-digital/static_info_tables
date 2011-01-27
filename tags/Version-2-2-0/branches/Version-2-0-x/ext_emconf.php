<?php

########################################################################
# Extension Manager/Repository config file for ext: "static_info_tables"
#
# Auto generated 07-11-2008 12:14
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables',
	'description' => 'Some database tables with usefull informations about countries, languages and currencies.',
	'category' => 'misc',
	'shy' => 0,
	'dependencies' => '',
	'version' => '2.0.11',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'René Fritz',
	'author_email' => 'r.fritz@colorcube.de',
	'author_company' => 'Colorcube - digital media lab, www.colorcube.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.0-0.0.0',
			'php' => '4.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'patch1822' => '0.0.3-',
		),
	),
	'_md5_values_when_last_written' => 'a:23:{s:9:"ChangeLog";s:4:"954e";s:20:"class.ext_update.php";s:4:"09b5";s:33:"class.tx_staticinfotables_div.php";s:4:"2fb5";s:38:"class.tx_staticinfotables_encoding.php";s:4:"03fd";s:41:"class.tx_staticinfotables_syslanguage.php";s:4:"4f57";s:21:"ext_conf_template.txt";s:4:"ec5b";s:12:"ext_icon.gif";s:4:"639f";s:17:"ext_localconf.php";s:4:"ad1a";s:14:"ext_tables.php";s:4:"15fa";s:14:"ext_tables.sql";s:4:"4b95";s:25:"ext_tables_static+adt.sql";s:4:"c0ca";s:25:"icon_static_countries.gif";s:4:"2a46";s:26:"icon_static_currencies.gif";s:4:"a1e2";s:25:"icon_static_languages.gif";s:4:"639f";s:23:"icon_static_markets.gif";s:4:"bf06";s:27:"icon_static_territories.gif";s:4:"aab5";s:13:"locallang.xml";s:4:"f121";s:16:"locallang_db.xml";s:4:"158c";s:7:"tca.php";s:4:"3a72";s:14:"doc/manual.sxw";s:4:"b8c2";s:37:"pi1/class.tx_staticinfotables_pi1.php";s:4:"d123";s:39:"static/static_info_tables/constants.txt";s:4:"aaf6";s:35:"static/static_info_tables/setup.txt";s:4:"82b7";}',
	'suggests' => array(
	),
);

?>