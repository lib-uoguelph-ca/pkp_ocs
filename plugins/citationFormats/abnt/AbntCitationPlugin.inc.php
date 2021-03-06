<?php

/**
 * @file AbntCitationPlugin.inc.php
 *
 * Copyright (c) 2000-2011 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class AbntCitationPlugin
 * @ingroup plugins_citationFormats_abnt
 *
 * @brief ABNT citation format plugin
 */

//$Id$

import('classes.plugins.CitationPlugin');

class AbntCitationPlugin extends CitationPlugin {
	function register($category, $path) {
		$success = parent::register($category, $path);
		$this->addLocaleData();
		return $success;
	}

	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'AbntCitationPlugin';
	}

	function getDisplayName() {
		return __('plugins.citationFormats.abnt.displayName');
	}

	function getCitationFormatName() {
		return __('plugins.citationFormats.abnt.citationFormatName');
	}

	function getDescription() {
		return __('plugins.citationFormats.abnt.description');
	}

}

?>
