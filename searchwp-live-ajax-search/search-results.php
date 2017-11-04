<?php

	/**
	 * Return SearchWP AJAX results in a specified manner
	 *
	 * Search results are contained within a div.searchwp-live-search-results
	 * which you can style accordingly as you would any other element on your site
	 *
	 * Some base styles are output in wp_footer that do nothing but position the
	 * results container and apply a default transition, you can disable that by
	 * adding the following to your theme's functions.php:
	 *
	 * add_filter( 'searchwp_live_search_base_styles', '__return_false' );
	 *
	 * There is a separate stylesheet that is also enqueued that applies the default
	 * results theme (the visual styles) but you can disable that too by adding
	 * the following to your theme's functions.php:
	 *
	 * wp_dequeue_style( 'searchwp-live-search' );
	 *
	 * You can use ~/searchwp-live-search/assets/styles/style.css as a guide to customize
	 */
	

	/**
	 * If we have results returned, lets loop through them 
	 * and create some arrays from said data
	 *
	 * [1]	Set up defaults
	 * [2]	Loop through returned results
	 * [3]	
	 */
	

	/**
	 * [1]	Set up defaults
	 * 
	 * 		We need to set up some empty arrays that will be populated later with titles
	 * 		and posts that will be outputted even later!
	 *
	 * 		[a]	for populating later with data
	 * 		[b]	for portfolio and case studies that are returned in the results
	 * 		[c]	for resources that are returned in the results
	 * 		[d]	for posts that are neither portfolios or resources
	 * 		[e]	for pages that are children of "What we do"
	 */
	
	if (have_posts()) :
		$post_data = array();			// [1][a]
		
		$posts__portfolio = array(
			'title'	=> 'Our work',
			'posts'	=> array(),
		);	// [1][b]
		
		$posts__resources = array(
			'title'	=> 'Useful resources',
			'posts'	=> array(),
		);	// [1][c]
		
		$posts__other = array(
			'title'	=> 'Other results',
			'posts'	=> array(),
		);	// [1][d]
		
		$posts__services = array(
			'title'	=> 'What we do',
			'posts'	=> array(),
		);	// [1][e]





		/**
		 * [2]	Loop through returned results
		 * 
		 * 		We need to find out the post type for each post and set up 
		 * 		some data that will be looped through at a later stage.
		 *
		 * 		[a]	Find the post type for the returned result
		 * 		[b]	If the post is a portfolio item, set up the data
		 * 		[c]	Otherwise if the post is a resource, set up the data
		 * 			[i]		Get the type of resource (documented | links)
		 * 			[ii]	If the resource is a link, set the URL as a custom field otherwise use the default options
		 * 		[d]	If no other conditions are met, set up the data as another post
		 */
		
		while (have_posts()) : the_post();
			$post_type = get_post_type();			// [2][a]
			$parent_id = $post->post_parent;


			if ($post_type == 'portfolio') :		// [2][b]
				$post_data = array(
					'title'	=> get_the_title(),
					'url'	=> get_permalink(),
				);

				array_push($posts__portfolio['posts'], $post_data);


			elseif ($post_type == 'resources') :	// [2][c]
				$get_resource_type = wp_get_post_terms($post->ID, 'resource__types'); 	// [2][c][i]
				$resource_url = ($get_resource_type[0]->slug == 'links') ? get_field('url') . '" target="_blank' : get_permalink(); // [2][c][ii]


				$post_data = array(
					'title'	=> get_the_title(),
					'url'	=> $resource_url,
				);


				array_push($posts__resources['posts'], $post_data);


			elseif ($post_type == 'page' && $parent_id == 260 || $parent_id == 639  || $parent_id == 643 || $parent_id == 647) :	// [2][c]
				$post_data = array(
					'title'	=> get_the_title(),
					'url'	=> get_permalink(),
				);


				array_push($posts__services['posts'], $post_data);


			else :									// [2][d]
				$post_data = array(
					'title'	=> get_the_title(),
					'url'	=> get_permalink(),
				);

				array_push($posts__other['posts'], $post_data);


			endif;
		endwhile;





		/**
		 * [3]	Output our results
		 */
		
		$result__types = array();
		if ($posts__services['posts'] != array()) 	{ array_push($result__types, $posts__services); }
		if ($posts__portfolio['posts'] != array()) 	{ array_push($result__types, $posts__portfolio); }
		if ($posts__resources['posts'] != array()) 	{ array_push($result__types, $posts__resources); }
		if ($posts__other['posts'] != array()) 		{ array_push($result__types, $posts__other); }
		

		foreach ($result__types as $result__type) : ?>


			<nav class="o-nav  o-nav--collections  o-nav--search-results">
				<h3 class="o-nav__title">
					<span class="o-nav__title-overflow">
						<?php echo $result__type['title']; ?>
					</span>
				</h3>


				<ul class="o-nav__list">
					<?php foreach ($result__type['posts'] as $link) : ?>
						<li class="o-nav__item"><a href="<?php echo $link['url']; ?>" class="o-nav__link"><?php echo $link['title']; ?></a></li>
					<?php endforeach; ?>
				</ul>
			</nav>


<?php endforeach; ?>





<?php else : ?>
	<p class="searchwp-live-search-no-results">
		<strong>Sorry!</strong>
		<br>
		We couldn't match any results to your search. Please try again with a different search query.
	</p>



<?php endif; ?>