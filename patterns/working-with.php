<?php
/**
 * Title: Working With
 * Slug: josephwp-fse/working-with
 * Categories: text
 * Description: Working with.
 */

$companies = array(
	array(
		'logo'        => get_template_directory_uri() . '/assets/images/uncanny-automator.svg',
		'name'        => 'Uncanny Automator',
		'description' => 'Core contributor to the world\'s most popular WordPress automation plugin, helping reduce development costs and replace dozens of single-purpose plugins.',
		'tags'        => array( '#IndependentContractor', '#Remote' ),
	),
	array(
		'logo'        => get_template_directory_uri() . '/assets/images/uncanny-owl-logo.svg',
		'name'        => 'Uncanny Owl',
		'description' => 'Developed enterprise-class plugins and integrations that scale LearnDash sites to handle complex learning management requirements.',
		'tags'        => array( '#IndependentContractor', '#Remote' ),
	),
	array(
		'logo'        => get_template_directory_uri() . '/assets/images/cloudways.svg',
		'name'        => 'Cloudways',
		'description' => 'Featured as a trusted WordPress expert in their developer showcase, recognized for expertise in BuddyPress, membership sites, and performance optimization.',
		'tags'        => array( '#Featured', '#Developer' ),
	),
	array(
		'logo'        => get_template_directory_uri() . '/assets/images/re7-header-logo.svg',
		'name'        => 'Contempo Themes / Real Estate 7',
		'description' => 'Built comprehensive real estate solutions combining custom post types, advanced search, and property management workflows.',
		'tags'        => array( '#Codeable', '#Remote' ),
	),
	array(
		'logo'        => get_template_directory_uri() . '/assets/images/lovefestjourney.png',
		'name'        => 'LoveFestJourney',
		'description' => 'A beautifully designed wellness platform where I transformed the client\'s creative vision into pixel-perfect reality. Sometimes the best projects are when great design meets precise execution.',
		'tags'        => array( '#Codeable', '#Remote' ),
	),
);
?>

<!-- wp:heading -->
<h2 class="wp-block-heading">
	Trusted by Great Software Companies
</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>
Building WordPress solutions for industry leaders. As an independent contractor, I've delivered enterprise-grade plugins, themes, and custom solutions that power thousands of sites worldwide.
<br/><br/>
<small>16 years in WordPress development means this is just the highlights reel. Some of my best work like Thrive Intranet and Klein BuddyPress Theme aren't even listed here. Both are recommended by popular companies like LearnDash</small>
</p>
<!-- /wp:paragraph -->

<?php foreach ( $companies as $company ) : ?>
<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column {
		"width": "15%"
	} -->
	<div class="wp-block-column" style="flex-basis: 15%;">
		<!-- wp:image {
			"width": "60px",
			"height": "auto"
		} -->
		<figure class="wp-block-image is-resized">
			<img src="<?php echo esc_url( $company['logo'] ); ?>" 
				alt="<?php echo esc_attr( $company['name'] ); ?>" 
				style="width: 60px; height: auto;" />
		</figure>
		<!-- /wp:image -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:heading {
			"level": 3,
			"style": {
				"layout": {
					"columnSpan": 2,
					"rowSpan": 1
				},
				"spacing": {
					"margin": {
						"top": "0",
						"bottom": "-1em"
					}
				}
			}
		} -->
		<h3 class="wp-block-heading" style="margin-top: 0; margin-bottom: -1em;">
			<?php echo esc_html( $company['name'] ); ?>
		</h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><small><?php echo esc_html( $company['description'] ); ?></small></p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html( implode( ' ', $company['tags'] ) ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
<?php endforeach; ?>