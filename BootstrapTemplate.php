<?php
/**
 * BaseTemplate class for the Example skin
 *
 * @ingroup Skins
 */
class BootstrapTemplate extends BaseTemplate {
	/**
	 * Outputs the entire contents of the page
	 */
	public function execute() {
		$this->html( 'headelement' );
			$body = $this->data['bodycontent'];
			// Use DeToc class to extract the TOC from the body
		  	$new_body = DeToc::ExtractToc($body, $extracted_toc);
		?>
		<nav class="navbar navbar-expand flex-column flex-md-row bd-navbar">
			<?php echo $this->getLogo(); ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php


					// echo $this->getSiteLinks();

					?>
				</ul>
				<div>

					<ul class="navbar-nav">
						<?php
						$content_navigation_views =  $this->data['content_navigation']['views'];

						if ( is_array($content_navigation_views) ) {
							foreach ( $content_navigation_views as $key => $item ) {

								$item['class'] = 'nav-item';
								$nav_ .= $this->makeListItem( $key, $item , array('tag' => 'li', 'link-class' => 'nav-link'));
							}
							echo $nav_;
						}
						echo $this->getPageLinks();
						?>

						<li class="nav-item">
							<?php



							echo $this->getUserLinks();
							?>
						</li>
					</ul>
					<?php if ( $this->data['loggedin'] ) { ?>
					<?php }?>
				</div>
			</div>
		</nav>
		<div id="mw-wrapper" class="container-fluid">
			<div class="row flex-xl-nowrap">
				<div class="col-12 col-md-3 col-xl-2 bd-sidebar">
					<?php echo $this->getSearch(); ?>
					<?php
					foreach ( $this->getSidebar() as $boxName => $box ) {

						// We ignore some navigation sections. They need to exist in the first place
						// because they are accessed from $sidebar and they populate the navigation.
						$ignored_navigation_sections = array('TOOLBOX', 'navigation');
						if (in_array($boxName, $ignored_navigation_sections)) {
							continue;
						}
					 ?>
					<div id="<?php echo Sanitizer::escapeId( $box['id'] ) ?>"<?php echo Linker::tooltip( $box['id'] ) ?>>
						<h5><?php echo htmlspecialchars( $box['header'] ); ?></h5>
						 <!-- If you do not want the words "Navigation" or "Tools" to appear, you can safely remove the line above. -->

					<?php
						if ( is_array( $box['content'] ) ) { ?>
						<ul>
					<?php
							foreach ( $box['content'] as $key => $item ) {
								echo $this->makeListItem( $key, $item );
							}
					?>
						</ul>
					<?php
						} else {
							echo $box['content'];
						}
					?>
					</div>
					<?php } ?>
				</div>

				<?php
				// Only if $extracted_toc is available, create the column
				if ( $extracted_toc ) { ?>
				<div class="d-none d-xl-block col-xl-2 bd-toc">
					<?php echo $extracted_toc; ?>
				</div>
				<?php } ?>

				<?php
					// Define the width of bd_content (the main container) depending if the TOC is
					// available or not. In particular set the col-xl size, since it's the only case
					// where we display the TOC.
					if ( $extracted_toc ) {
						$bd_content_col_xl_width = 'col-xl-8';
					} else {
						$bd_content_col_xl_width = 'col-xl-10';
					}
				?>
				<div class="col-12 col-md-9 <?php echo $bd_content_col_xl_width; ?> py-md-3 pl-md-5 bd-content" role="main">
					<?php
					if ( $this->data['sitenotice'] ) {
						echo Html::rawElement(
							'div',
							array( 'id' => 'siteNotice' ),
							$this->get( 'sitenotice' )
						);
					}
					if ( $this->data['newtalk'] ) {
						echo Html::rawElement(
							'div',
							array( 'class' => 'usermessage' ),
							$this->get( 'newtalk' )
						);
					}
					echo $this->getIndicators();

					// Automatic page title from URL
					echo Html::rawElement(
						'h1',
						array(
							'class' => 'firstHeading',
							'lang' => $this->get( 'pageLanguage' )
						),
						$this->get( 'title' )
					);

					// Do not display tagline

					// echo Html::rawElement(
					// 	'div',
					// 	array( 'id' => 'siteSub' ),
					// 	$this->getMsg( 'tagline' )->parse()
					// );
					?>

					<div class="mw-body-content">
						<?php
						echo Html::openElement(
							'div',
							array( 'id' => 'contentSub' )
						);
						if ( $this->data['subtitle'] ) {
							echo Html::rawelement (
								'p',
								[],
								$this->get( 'subtitle' )
							);
						}
						echo Html::rawelement (
							'p',
							[],
							$this->get( 'undelete' )
						);
						echo Html::closeElement( 'div' );

						// $this->html( 'bodycontent' );

						echo $new_body;

						$this->clear();

						echo Html::rawElement(
							'div',
							array( 'class' => 'printfooter' ),
							$this->get( 'printfooter' )
						);
						$this->html( 'catlinks' );
						$this->html( 'dataAfterContent' );
						?>
					</div>
					<pre>
						<?php
						?>
					</pre>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<footer class="footer pt-4">

			<!-- Footer Links -->
			<div class="container-fluid text-md-left">

				<!-- Grid row -->
				<div class="row">
					<?php

					foreach ( $this->getFooterLinks() as $category => $links ) {

						if ( $category == 'info' ) {
							$divClasses = 'col-md-3 mt-md-0 mt-3';
							$linkElement = 'p';
						} else {
							$divClasses = 'col-md-3 mt-md-0 mt-3';
							$linkElement = 'li';
						}

						echo Html::openElement(
							'div',
							array(
								'class' => $divClasses
							)
						);
						echo Html::element(
							'h5',
							array(
								'class' => 'text-uppercase'
							),
							$category
						);

						if ( $category != 'info' ) {
							echo Html::openElement(
								'ul',
								array(
									'id' => 'footer-' . Sanitizer::escapeId( $category ),
									'role' => 'contentinfo'
								)
							);
						}

						foreach ( $links as $key ) {
							echo Html::rawElement(
								$linkElement,
								array(
									'id' => 'footer-' . Sanitizer::escapeId( $category . '-' . $key )
								),
								$this->get( $key )
							);
						}

						if ( $category != 'info' ) {
							echo Html::closeElement( 'ul' );
						}

						echo Html::closeElement( 'div' );
					}


					// Third footer column
					echo Html::openElement('div', array('class' => 'col-md-3 mt-md-0 mt-3',));
					echo Html::element('h5', array('class' => 'text-uppercase'), 'Tools');
					$sidebar = $this->getSidebar();
					echo $this->getFooterMenu($sidebar['TOOLBOX']);
					echo Html::closeElement( 'div' );

					// Fourth footer column
					echo Html::openElement('div', array('class' => 'col-md-3 mt-md-0 mt-3',));
					echo Html::element('h5', array('class' => 'text-uppercase'), 'Navigation');
					echo $this->getFooterMenu($sidebar['navigation']);
					echo Html::closeElement( 'div' );


					?>

				</div>
				<!-- Grid row -->

				<!-- Grid row -->
				<div class="row pt-4 pb-4">
					<div class="col">
						<!-- Copyright -->
						<div class="text-center">Creative freedom starts with Blender – The Free and Open Source 3D Creation Suite
						</div>
						<!-- Copyright -->
					</div>
				</div>
				<!-- Grid row -->

			</div>
			<!-- Footer Links -->
		</footer>
		<!-- Footer -->


		<?php $this->printTrail() ?>
		</body>
		</html>

		<?php
	}

	/**
	 * Generates the content of a dropdown menu
	 * @return string html
	 */
	private function getNavDropDownContent( $links, $appendDivider = false) {
		if ( !is_array( $links ) || empty( $links ) ) {
			return;
		}

		foreach ( $links as $key => $item ) {
			$html .= $this->makeListItem( $key, $item , array('tag' => 'span', 'link-class' => 'dropdown-item'));
			// $html .= $this->makeLink( $key, $item['links'][0], array('link-class' => 'dropdown-item') );
		}

		if ( $appendDivider ) {
			$html .= Html::element('div', array('class' => 'dropdown-divider'));
		}
		return $html;
	}
	/**
	 * Generates a dropdown menu
	 * @return string html
	 */
	private function getNavDropDown( $box ) {
		if ( !$box['content'] ) {
			return;
		}
		$html = Html::openElement(
			'li',
			array(
				'class' => 'nav-item dropdown',
				'id' => Sanitizer::escapeId( $box['id'] )
			) + Linker::tooltipAndAccesskeyAttribs( $box['id'] )
		);
		$html .= Html::element(
			'a',
			array(
				'class' => 'nav-link dropdown-toggle',
				'role' => 'button',
				'data-toggle' => 'dropdown' ),
			isset( $box['headerMessage'] ) ? $this->getMsg( $box['headerMessage'] )->text() : $box['header'] );
		if ( is_array( $box['content'] ) ) {
			$html .= Html::openElement( 'div', array('class' => 'dropdown-menu dropdown-menu-right') );
			foreach ( $box['content'] as $key => $item ) {
				$html .= $this->makeListItem( $key, $item , array('tag' => 'span', 'link-class' => 'dropdown-item'));
				// $html .= $this->makeLink( $key, $item['links'][0], array('link-class' => 'dropdown-item') );
			}
			$html .= Html::closeElement( 'div' );
		} else {
			$html .= $box['content'];
		}
		$html .= Html::closeElement( 'li' );
		return $html;
	}


	private function getFooterMenu( $box ) {
		if ( !$box['content'] ) {
			return;
		}
		$html = Html::openElement(
			'ul',
			array(
				'id' => Sanitizer::escapeId( $box['id'] )
			) + Linker::tooltipAndAccesskeyAttribs( $box['id'] )
		);

		if ( is_array( $box['content'] ) ) {
			foreach ( $box['content'] as $key => $item ) {
				$html .= $this->makeListItem( $key, $item , array('tag' => 'li'));
				// $html .= $this->makeLink( $key, $item['links'][0], array('link-class' => 'dropdown-item') );
			}
		} else {
			$html .= $box['content'];
		}
		$html .= Html::closeElement( 'ul' );
		return $html;
	}

	/**
	 * Generates the logo and (optionally) site title
	 * @return string html
	 */
	private function getLogo( $id = 'p-logo', $imageOnly = false ) {
		$html = Html::openElement(
			'a',
			array(
				'href' => $this->data['nav_urls']['mainpage']['href'],
				'class' => 'navbar-brand',
			) + Linker::tooltipAndAccesskeyAttribs( 'p-logo' )
		);
		if ( $imageOnly ) {
			$html .= $this->getMsg( 'sitetitle' )->escaped();
		} else {
			$html .= Html::element(
				'img',
				array(
					'src' => $this->data['logopath'],
					'height' => '30',
					'alt' => 'Portal logo'
				)
			);
		}
		$html .= Html::closeElement( 'a' );
		return $html;
	}
	/**
	 * Generates the search form
	 * @return string html
	 */
	private function getSearch() {
		$html = Html::openElement(
			'form',
			array(
				'action' => htmlspecialchars( $this->get( 'wgScript' ) ),
				'role' => 'search',
				'class' => 'bd-search d-flex align-items-center',
				'id' => 'p-search'
			)
		);
		$html .= Html::hidden( 'title', htmlspecialchars( $this->get( 'searchtitle' ) ) );
		$html .= $this->makeSearchInput( array(
			'id' => 'searchInput',
			'class' => 'form-control ds-input',
			'placeholder' => 'Search...',
			'autocomplete' => 'off',
			) );
		// $html .= $this->makeSearchButton( 'go', array(
		// 	'id' => 'searchGoButton',
		// 	'class' => 'btn btn-outline-success my-2 my-sm-0'
		// ) );
		$html .= Html::closeElement( 'form' );
		return $html;
	}
	/**
	 * Generates page-related tools/links
	 * @return string html
	 */
	private function getPageLinks() {
		$content_navigation_actions =  $this->data['content_navigation']['actions'];
		if (empty($content_navigation_actions)) {
			return;
		}

		$html = Html::openElement(
			'li',
			array(
				'role' => 'navigation',
				'class' => 'nav-item dropdown',
				'id' => 'page-links'
		) );
		$html .= Html::element(
			'a',
			array(
				'class' => 'nav-link dropdown-toggle',
				'id' => 'page-links-dd',
				'role' => 'button',
				'data-toggle' => 'dropdown' ),
			'Actions');
		$html .= Html::openElement( 'div', array('class' => 'dropdown-menu dropdown-menu-right') );
		$html .= $this->getNavDropDownContent( $content_navigation_actions );
		$html .= Html::closeElement( 'div' );
		$html .= Html::closeElement( 'li' );
		return $html;
	}
	/**
	 * Generates user tools menu
	 * @return string html
	 */
	private function getUserLinks() {
		return $this->getNavDropDown( array(
			'id' => 'p-personal',
			'headerMessage' => 'personaltools',
			'content' => $this->getPersonalTools(),
		) );
	}
	/**
	 * Generates site navigation menu
	 * @return string html
	 */
	private function getSiteLinks() {
		$sidebar = $this->getSidebar();
		return $this->getNavDropDown( $sidebar['navigation'] );
	}
	/**
	 * Generates site toolbox menu
	 * @return string html
	 */
	private function getSiteToolbox() {
		$sidebar = $this->getSidebar();
		return $this->getNavDropDown( $sidebar['TOOLBOX'] );
	}
	/**
	 * Outputs a css clear using the core visualClear class
	 */
	private function clear() {
		echo '<div class="clearfix"></div>';
	}
}