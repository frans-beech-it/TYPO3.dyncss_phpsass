<?php

$scssParserConfig = unserialize($TYPO3_CONF_VARS['EXT']['extConf'][$_EXTKEY]);


tx_DynCss_Configuration_BeRegistry::get()->registerFileHandler('sass', 'tx_DyncssPhpsass_ParserSass');
tx_DynCss_Configuration_BeRegistry::get()->registerFileHandler('scss', 'tx_DyncssPhpsass_ParserScss');


unset($scssParserConfig);
