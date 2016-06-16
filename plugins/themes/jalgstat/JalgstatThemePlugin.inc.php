<?php

/**
 * @file plugins/themes/redbar/RedbarThemePlugin.inc.php
 *
 * Copyright (c) 2013-2015 Simon Fraser University Library
 * Copyright (c) 2003-2015 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class RedbarThemePlugin
 * @ingroup plugins_themes_redbar
 *
 * @brief "Redbar" theme plugin
 */

import('classes.plugins.ThemePlugin');

class JalgstatThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'JalgstatThemePlugin';
	}

	function getDisplayName() {
		return 'Jalgstat';
	}

	function getDescription() {
		return 'Jalgstat layout';
	}

	function getStylesheetFilename() {
		return 'jalgstat.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
