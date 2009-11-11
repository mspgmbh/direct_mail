<?php

########################################################################
# Extension Manager/Repository config file for ext: "direct_mail"
#
# Auto generated 14-07-2009 22:15
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Direct Mail',
	'description' => 'Advanced Direct Mail/Newsletter mailer system with sophisticated options for personalization of emails including response statistics.',
	'category' => 'module',
	'shy' => 0,
	'version' => '2.6.3',
	'dependencies' => 'cms,tt_address',
	'conflicts' => 'sr_direct_mail_ext,it_dmail_fix,plugin_mgm,direct_mail_123',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1,mod2,mod3,mod4,mod5,mod6',
	'state' => 'stable',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => 'tt_content,tt_address,fe_users',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Ivan Kartolo',
	'author_email' => 'ivan.kartolo@dkd.de',
	'author_company' => 'd.k.d Internet Service GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'tt_address' => '',
			'php' => '5.0.0-0.0.0',
			'typo3' => '4.0.0-0.0.0',
		),
		'conflicts' => array(
			'sr_direct_mail_ext' => '',
			'it_dmail_fix' => '',
			'plugin_mgm' => '',
			'direct_mail_123' => '',
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:94:{s:9:"ChangeLog";s:4:"8fdd";s:20:"class.ext_update.php";s:4:"5ce8";s:31:"class.tx_directmail_gabriel.php";s:4:"910a";s:21:"ext_conf_template.txt";s:4:"4054";s:12:"ext_icon.gif";s:4:"a143";s:17:"ext_localconf.php";s:4:"b0ff";s:15:"ext_php_api.dat";s:4:"18c0";s:14:"ext_tables.php";s:4:"0ebc";s:14:"ext_tables.sql";s:4:"a2b2";s:17:"locallang_tca.xml";s:4:"0115";s:7:"tca.php";s:4:"133f";s:14:"doc/manual.sxw";s:4:"1c9f";s:36:"locallang/locallang_csh_sysdmail.xml";s:4:"f4a1";s:39:"locallang/locallang_csh_sysdmailcat.xml";s:4:"a2b1";s:37:"locallang/locallang_csh_sysdmailg.xml";s:4:"0ecd";s:42:"locallang/locallang_csh_txdirectmailM2.xml";s:4:"b8c3";s:42:"locallang/locallang_csh_txdirectmailM3.xml";s:4:"3846";s:42:"locallang/locallang_csh_txdirectmailM4.xml";s:4:"761f";s:42:"locallang/locallang_csh_txdirectmailM5.xml";s:4:"e511";s:42:"locallang/locallang_csh_txdirectmailM6.xml";s:4:"3f6d";s:44:"locallang/locallang_csh_web_txdirectmail.xml";s:4:"c796";s:30:"locallang/locallang_mod2-6.xml";s:4:"1e50";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"f25a";s:14:"mod1/index.php";s:4:"0cc0";s:22:"mod1/locallang_mod.xml";s:4:"88ac";s:17:"mod1/mod_icon.gif";s:4:"a143";s:34:"mod2/class.tx_directmail_dmail.php";s:4:"a33a";s:13:"mod2/conf.php";s:4:"f24c";s:14:"mod2/index.php";s:4:"4d54";s:22:"mod2/locallang_mod.xml";s:4:"6088";s:17:"mod2/mod_icon.gif";s:4:"a143";s:43:"mod3/class.tx_directmail_recipient_list.php";s:4:"a4c3";s:14:"mod3/clear.gif";s:4:"cc11";s:13:"mod3/conf.php";s:4:"ba64";s:14:"mod3/index.php";s:4:"3ea3";s:22:"mod3/locallang_mod.xml";s:4:"c2ce";s:17:"mod3/mod_icon.gif";s:4:"a143";s:39:"mod4/class.tx_directmail_statistics.php";s:4:"a30b";s:14:"mod4/clear.gif";s:4:"cc11";s:13:"mod4/conf.php";s:4:"2c51";s:14:"mod4/index.php";s:4:"556b";s:22:"mod4/locallang_mod.xml";s:4:"fc77";s:17:"mod4/mod_icon.gif";s:4:"a143";s:42:"mod5/class.tx_directmail_mailer_engine.php";s:4:"2d4f";s:14:"mod5/clear.gif";s:4:"cc11";s:13:"mod5/conf.php";s:4:"1fab";s:14:"mod5/index.php";s:4:"e367";s:22:"mod5/locallang_mod.xml";s:4:"a0d7";s:17:"mod5/mod_icon.gif";s:4:"a143";s:42:"mod6/class.tx_directmail_configuration.php";s:4:"7f8f";s:14:"mod6/clear.gif";s:4:"cc11";s:13:"mod6/conf.php";s:4:"db88";s:14:"mod6/index.php";s:4:"f2ca";s:22:"mod6/locallang_mod.xml";s:4:"87d6";s:17:"mod6/mod_icon.gif";s:4:"a143";s:31:"pi1/class.tx_directmail_pi1.php";s:4:"3d34";s:17:"pi1/locallang.php";s:4:"ff9e";s:17:"pi1/locallang.xml";s:4:"2d6b";s:36:"pi1/tx_directmail_pi1_plaintext.tmpl";s:4:"2027";s:18:"res/gfx/attach.gif";s:4:"5559";s:17:"res/gfx/dmail.gif";s:4:"4d4f";s:22:"res/gfx/dmail_list.gif";s:4:"8d58";s:23:"res/gfx/dmailerping.gif";s:4:"cc11";s:39:"res/gfx/icon_tx_directmail_category.gif";s:4:"9398";s:16:"res/gfx/mail.gif";s:4:"4174";s:21:"res/gfx/mailgroup.gif";s:4:"1cc5";s:25:"res/gfx/modules_dmail.gif";s:4:"a143";s:28:"res/gfx/modules_dmail__h.gif";s:4:"040c";s:19:"res/gfx/newmail.gif";s:4:"ffa9";s:24:"res/gfx/preview_html.gif";s:4:"1e65";s:23:"res/gfx/preview_txt.gif";s:4:"4d9a";s:29:"res/scripts/class.dmailer.php";s:4:"d418";s:32:"res/scripts/class.mailselect.php";s:4:"ed2e";s:30:"res/scripts/class.readmail.php";s:4:"7334";s:48:"res/scripts/class.tx_directmail_checkjumpurl.php";s:4:"b935";s:45:"res/scripts/class.tx_directmail_container.php";s:4:"481e";s:44:"res/scripts/class.tx_directmail_importer.php";s:4:"fa71";s:53:"res/scripts/class.tx_directmail_select_categories.php";s:4:"483b";s:42:"res/scripts/class.tx_directmail_static.php";s:4:"e372";s:52:"res/scripts/class.tx_directmail_ttnews_plaintext.php";s:4:"ec44";s:28:"res/scripts/dmailerd.phpcron";s:4:"8ef4";s:28:"res/scripts/returnmail.phpsh";s:4:"98b2";s:40:"res/scripts/calendar/calendar-system.css";s:4:"70b5";s:38:"res/scripts/calendar/calendar-typo3.js";s:4:"d354";s:56:"res/scripts/calendar/class.tx_directmail_calendarlib.php";s:4:"a369";s:34:"res/scripts/calendar/locallang.php";s:4:"9fca";s:50:"res/scripts/calendar/typoscript_setup_calendar.txt";s:4:"5071";s:27:"static/boundaries/setup.txt";s:4:"2661";s:30:"static/plaintext/constants.txt";s:4:"59ce";s:26:"static/plaintext/setup.txt";s:4:"f4ba";s:34:"static/tt_news_plaintext/setup.txt";s:4:"1a31";s:23:"cli/cli_direct_mail.php";s:4:"4b8c";s:16:"cli/conf.php.old";s:4:"e65b";}',
);

?>