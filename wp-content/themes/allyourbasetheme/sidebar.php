<div id="sidebar1" class="sidebar" role="complementary">

	<?php 
	
	if ( is_category( 'blog' ) || in_category( 'blog' ) ) 
	{
		// tag list
		$tags = get_tags();
		$html = '<div class="show-for-medium-up"><br /><span class="normal bold">Tags</span><ul class="side-nav">';
		foreach ( $tags as $tag ) {
			$tag_link = get_tag_link( $tag->term_id );
			$html .= '<li><a href="' . $tag_link . '" title="' . $tag->name .' Tag">';
			$html .= $tag->name . '</a></li>';
		}
		$html .= '</ul></div>';

		$html .= '<div class="show-for-small-only">';
		$html .= '<select onChange="document.location.href=this.options[this.selectedIndex].value;">';
		$html .= '<option>Tags</option>';
		foreach ( $tags as $tag ) {
        	$html .= '<option value="' . $tag_link . '">' . $tag->name . '</option>';
		}
		$html .= '</select></div>';
		
		echo $html;
		
		// archive links - hard coded for now to include query string params used for filtering categories
		$html = '<br /><div class="show-for-medium-up"><span class="normal bold">Blog Archives</span><ul class="side-nav"><li><a href="/2015/?cat=blog">2015</a></li></ul></div>';
		$html .= '<div class="show-for-small-only">';
		$html .= '<select onChange="document.location.href=this.options[this.selectedIndex].value;">';
		$html .= '<option>Blog Archives</option><option value="/2015/?cat=blog">2015</option>';
		$html .= '</select></div>';
			
		echo $html;
		
		
		// WP_User_Query arguments
		$args = array (
			'role' => 'author',
			'order' => 'ASC',
			'orderby' => 'display_name',
		);
		
		// Create the WP_User_Query object
		$wp_user_query = new WP_User_Query($args);
		
		// Get the results
		$authors = $wp_user_query->get_results();
		
		// Check for results
		if (!empty($authors)) {
			$html = '<br /><div class="show-for-medium-up"><span class="normal bold">Authors</span><ul class="side-nav">';
			// loop trough each author
			foreach ($authors as $author)
			{
				// get all the user's data
				$author_info = get_userdata($author->ID);
				$html .= '<li><a href="' . get_author_posts_url( $author_info->ID, $author_info->user_nicename ) . '">'  . $author_info->first_name . ' ' . $author_info->last_name . '</a></li>';
			}
			$html .= '</ul></div>';
			
			$html .= '<div class="show-for-small-only">';
			$html .= '<select onChange="document.location.href=this.options[this.selectedIndex].value;">';
			$html .= '<option>Authors</option>';
			foreach ($authors as $author)
			{
				// get all the user's data
				$author_info = get_userdata($author->ID);
				$html .= '<option value="' . get_author_posts_url( $author_info->ID, $author_info->user_nicename ) . '">' . $author_info->first_name . ' ' . $author_info->last_name . '</option>';
			}
			$html .= '</select></div>';
			
			echo $html;
		} 
	}
	
	if ( is_category( 'news' ) || in_category( 'news' ) ) 
	{
		// archive links - hard coded for now to include query string params used for filtering categories
		$html = '<br /><div class="show-for-medium-up"><span class="normal bold">Blog Archives</span><ul class="side-nav"><li><a href="/2015/?cat=blog">2015</a></li></ul></div>';
		$html .= '<div class="show-for-small-only">';
		$html .= '<select onChange="document.location.href=this.options[this.selectedIndex].value;">';
		$html .= '<option>Blog Archives</option><option value="/2015/?cat=news">2015</option>';
		$html .= '</select></div>';
			
		echo $html;
	}
	
	
	
	?>
	

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
	
		<?php dynamic_sidebar( 'sidebar1' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e("Please activate some Widgets.", "jointstheme");  ?></p>
	</div>

	<?php endif; ?>

</div>