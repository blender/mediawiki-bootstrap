<?php
/**
 * Skin file for skin Bootstrap.
 *
 * @file
 * @ingroup Skins
 */

/**
 * SkinTemplate class for Bootstrap skin
 * @ingroup Skins
 */
class SkinBootstrap extends SkinTemplate {
	var $skinname = 'bootstrap', $stylename = 'Bootstrap',
		$template = 'BootstrapTemplate', $useHeadElement = true;

	/**
	 * This function adds JavaScript via ResourceLoader
	 *
	 * Use this function if your skin has a JS file(s).
	 * Otherwise you won't need this function and you can safely delete it.
	 *
	 * @param OutputPage $out
	 */

	public function initPage( OutputPage $out ) {
		parent::initPage( $out );
		$out->addMeta( 'viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no' );
		$out->addModules( 'skins.bootstrap.js' );
		/* 'skins.bootstrap.js' is the name you used in your skin.json file */
		$out->addHeadItem( 'analytics', '<script defer data-domain="wiki.blender.org" src="https://analytics.blender.org/js/script.js"></script>');
	}

	/**
	 * Add CSS via ResourceLoader
	 *
	 * @param $out OutputPage
	 */
	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
			/* mediawiki.skinning.interface is the default interface theme*/
			// 'mediawiki.skinning.interface',
			/* 'skins.bootstrap' is the name you used in your skin.json file */
			'skins.bootstrap'
		) );
	}
}

