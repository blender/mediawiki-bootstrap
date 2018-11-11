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
		include_once 'DeToc.php';
		$this->html( 'headelement' );
			$body = $this->data['bodycontent'];
		  	$new_body = DeToc::ExtractToc($body, $extracted_toc);
		?>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<?php echo $this->getLogo(); ?>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php
					echo $this->getPageLinks();

					echo $this->getSiteLinks();
					echo $this->getSiteToolbox();
					?>
				</ul>
				<div class="navbar-nav">
					<?php echo $this->getSearch(); ?>
					<?php if ( $this->data['loggedin'] ) { ?>
					<li class="nav-item">
						<?php echo $this->getUserLinks(); ?>
					</li>
					<?php }?>
				</div>
			</div>
		</nav>
		<div id="mw-wrapper" class="container-fluid">
			<div class="row flex-xl-nowrap">
				<div class="col-9" role="main">
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
					// echo Html::rawElement(
					// 	'h1',
					// 	array(
					// 		'class' => 'firstHeading',
					// 		'lang' => $this->get( 'pageLanguage' )
					// 	),
					// 	$this->get( 'title' )
					// );
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

				<div class="col-3" id="mw-navigation">
					<?php if ($extracted_toc) {
						echo $extracted_toc;
					} ?>
				</div>
			</div>

			<div id="mw-footer">
				<?php

				// $this->clear();
				?>
			</div>

		</div>

		<!-- Footer -->
		<footer class="footer pt-4 mt-4">

			<!-- Footer Links -->
			<div class="container-fluid text-md-left">

				<!-- Grid row -->
				<div class="row">
					<?php

					foreach ( $this->getFooterLinks() as $category => $links ) {

						if ( $category == 'info' ) {
							$divClasses = 'col-md-6 mt-md-0 mt-3';
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

					?>



				</div>
				<!-- Grid row -->

				<!-- Grid row -->
				<div class="row">
					<div class="col">
						<!-- Copyright -->
						<div class="text-center">Creative freedom starts with Blender – The Free and Open Source 3D Creation Suite blender.org:
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
	 * Generates a single sidebar portlet of any kind
	 * @return string html
	 */
	private function getNavDropDown( $box ) {
		if ( !$box['content'] ) {
			return;
		}
		$html = Html::openElement(
			'li',
			array(
				'role' => 'navigation',
				'class' => 'nav-item dropdown',
				'id' => Sanitizer::escapeId( $box['id'] )
			) + Linker::tooltipAndAccesskeyAttribs( $box['id'] )
		);
		$html .= Html::element(
			'a',
			array(
				'class' => 'nav-link dropdown-toggle',
				'id' => 'dd',
				'role' => 'button',
				'data-toggle' => 'dropdown' ),
			isset( $box['headerMessage'] ) ? $this->getMsg( $box['headerMessage'] )->text() : $box['header'] );
		if ( is_array( $box['content'] ) ) {
			$html .= Html::openElement( 'div', array('class' => 'dropdown-menu') );
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
	/**
	 * Generates a single sidebar portlet of any kind
	 * @return string html
	 */
	private function getPortlet( $box ) {
		if ( !$box['content'] ) {
			return;
		}
		$html = Html::openElement(
			'div',
			array(
				'role' => 'navigation',
				'class' => 'mw-portlet',
				'id' => Sanitizer::escapeId( $box['id'] )
			) + Linker::tooltipAndAccesskeyAttribs( $box['id'] )
		);
		$html .= Html::element(
			'h3',
			[],
			isset( $box['headerMessage'] ) ? $this->getMsg( $box['headerMessage'] )->text() : $box['header'] );
		if ( is_array( $box['content'] ) ) {
			$html .= Html::openElement( 'ul' );
			foreach ( $box['content'] as $key => $item ) {
				$html .= $this->makeListItem( $key, $item );
			}
			$html .= Html::closeElement( 'ul' );
		} else {
			$html .= $box['content'];
		}
		$html .= Html::closeElement( 'div' );
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
				'class' => 'form-inline my-2 my-lg-0',
				'id' => 'p-search'
			)
		);
		$html .= Html::hidden( 'title', htmlspecialchars( $this->get( 'searchtitle' ) ) );
		$html .= $this->makeSearchInput( array(
			'id' => 'searchInput',
			'class' => 'form-control mr-sm-2',
			'placeholder' => 'Search',
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
			'Page Links');
		$html .= Html::openElement( 'div', array('class' => 'dropdown-menu') );
		$html .= $this->getNavDropDownContent( $this->data['content_navigation']['namespaces'], true );
		$html .= $this->getNavDropDownContent( $this->data['content_navigation']['variants'], true );
		$html .= $this->getNavDropDownContent( $this->data['content_navigation']['views'], true );
		$html .= $this->getNavDropDownContent( $this->data['content_navigation']['actions'] );
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