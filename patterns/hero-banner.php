<?php
/**
 * Title: Hero Banner
 * Slug: josephwp-fse/hero-banner
 * Categories: banner
 * Description: Hero banner with a big headline, intro text, CTA button & logos.
 *
 * @package josephwp-fse
 */

?>
<!-- wp:group -->
<div class="wp-block-group">
	<!-- wp:group -->
	<div class="wp-block-group">
		<!-- wp:group {
	"layout": {
		"type": "constrained",
		"contentSize": "1300px",
		"wideSize": "1300px"
	}
} -->
		<div class="wp-block-group">
			<!-- wp:group {
	"style": {
		"border": {
			"radius": "20px"
		},
		"color": {
			"background": "#141414"
		},
		"spacing": {
			"padding": {
				"top": "2.1rem",
				"bottom": "6.1rem",
				"left": "50px",
				"right": "50px"
			},
			"margin": {
				"top": "35px",
				"bottom": "8.2rem"
			},
			"blockGap": "0"
		},
		"shadow": "0px 0px 0px 5px rgba(0, 0, 0, 0.22)",
		"background": {
			"backgroundImage": {
				"url": "https://automatordev.local/wp-content/themes/josephwp-fse/assets/images/brush.png"
			},
			"backgroundSize": "657px",
			"backgroundPosition": "10% 20%",
			"backgroundRepeat": "no-repeat"
		}
	},
	"borderColor": "black",
	"layout": {
		"type": "flex",
		"flexWrap": "nowrap",
		"justifyContent": "left",
		"orientation": "vertical"
	}
} -->
			<div class="wp-block-group has-border-color has-black-border-color has-background" style="
				border-radius: 20px;
				background-color: #141414;
				margin-top: 35px;
				margin-bottom: 8.2rem;
				padding-top: 2.1rem;
				padding-right: 50px;
				padding-bottom: 6.1rem;
				padding-left: 50px;
				box-shadow: 0px 0px 0px 5px rgba(0,
0,
0,
0.22);
			">
				
				<!-- wp:image {
	"className": "size-full"
} -->
				<figure class="wp-block-image size-full">
					<img src="https://automatordev.local/wp-content/themes/josephwp-fse/assets/images/keycap.svg" alt="Image of a book" />
				</figure>
				<!-- /wp:image -->

				<!-- wp:columns {
	"style": {
		"spacing": {
			"margin": {
				"top": "var:preset|spacing|50",
				"bottom": "var:preset|spacing|50"
			}
		}
	}
} -->
				<div class="wp-block-columns" style="
					margin-top: var(--wp--preset--spacing--50);
					margin-bottom: var(--wp--preset--spacing--50);
				">
					
					<!-- wp:column -->
					<div class="wp-block-column">
						<!-- wp:heading -->
						<h2 class="wp-block-heading">WordPress Expert. Vendor Partner. Problem Solver.</h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {
	"style": {
		"typography": {
			"lineHeight": "1.6"
		}
	}
} -->
						<p style="line-height: 1.6;">
						When WordPress vendors need rock-solid plugins and themes, they call me. Elite-certified across three major platforms with a proven track record of delivering scalable solutions that handle real-world traffic and complexity. Your project deserves code that works the first time, and keeps working.
						</p>
						<!-- /wp:paragraph -->

						<!-- wp:spacer {
	"height": "10px"
} -->
						<div style="height: 10px;" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->
						
						<!-- wp:columns -->
						<div class="wp-block-columns">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:image {
	"id": 13428,
	"className": "size-full"
} -->
								<figure class="wp-block-image size-full">
									<img src="https://automatordev.local/wp-content/themes/josephwp-fse/assets/images/envato-elite.svg" alt="Envato Elite" class="wp-image-13428" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:image {
	"id": 13428,
	"className": "size-full"
} -->
								<figure class="wp-block-image size-full">
									<img src="https://automatordev.local/wp-content/themes/josephwp-fse/assets/images/logo-codeable.svg" alt="Codeable" class="wp-image-13428" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:image {
	"id": 13428,
	"width": "72px",
	"className": "size-full"
} -->
								<figure class="wp-block-image is-resized size-full">
									<img src="https://automatordev.local/wp-content/themes/josephwp-fse/assets/images/hrank.svg" alt="HackerRank" class="wp-image-13428" style="width: 72px;" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->

						<!-- wp:columns -->
						<div class="wp-block-columns">
							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph -->
								<p>Unlocked Envato Elite</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph -->
								<p>Codeable Certified Expert</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->

							<!-- wp:column -->
							<div class="wp-block-column">
								<!-- wp:paragraph -->
								<p>HackerRank Certified</p>
								<!-- /wp:paragraph -->
							</div>
							<!-- /wp:column -->
						</div>
						<!-- /wp:columns -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {
	"width": "110px"
} -->
					<div class="wp-block-column" style="flex-basis: 110px;"></div>
					<!-- /wp:column -->

					<!-- wp:column {
	"width": "200px",
	"style": {
		"border": {
			"radius": "0px"
		}
	}
} -->
					<div class="wp-block-column" style="
						border-radius: 0px;
						flex-basis: 200px;
					">
							<!-- wp:button {
								"className": "contact-button",
								"style": {
									"border": {
										"radius": "0px"
									},
									"color": {
										"background": "#5500FF"
									}
								}
							} -->
							<div class="wp-block-button contact-button">
								<a class="wp-block-button__link has-background wp-element-button" href="#contact-joseph" style="border-radius:0px;background-color:#5500FF">
									Contact Joseph
								</a>
							</div>
							<!-- /wp:button -->
					</div>
					<!-- /wp:column -->
					
				</div>
				<!-- /wp:columns -->
				
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->