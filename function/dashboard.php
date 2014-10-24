<?php
function custom_right_now($a){
	$pages = get_post_types(array('publicly_queryable'=>true,'_builtin'=>true),'object','and');
	//pre($pages);exit;
	$types = get_post_types(array('_builtin'=>false),'object','and');
	$posts = array_merge($pages,$types);
	echo '<div class="table table_content"><table><tbody><tr><td valign="top"><table>';
	foreach($posts as $k=>$v){
		if($v->name != 'post'){
			$num_posts = wp_count_posts($k);
			$num = number_format_i18n( $num_posts->publish );
			$text = _n( $v->labels->singular_name, $v->labels->name, intval($num_posts->publish) );
			if(current_user_can('edit_posts')){
				$num = "<a href='edit.php?post_type=$k'>$num</a>";
				$text = "<a href='edit.php?post_type=$k'>$text</a>";
			}
			echo '<td class="first b b-$k">' . $num . '</td>';
			echo '<td class="t $k">' . $text . '</td>';
			echo '</tr>';
			if ($num_posts->pending > 0) {
				$num = number_format_i18n( $num_posts->pending );

				$text = _n( $v->labels->singular_name.' Pending', $v->labels->name.' Pending', intval($num_posts->pending) );
				if ( current_user_can( 'edit_posts' ) ) {
					$num = "<a href='edit.php?post_status=pending&post_type=$k'>$num</a>";
					$text = "<a href='edit.php?post_status=pending&post_type=$k'>$text</a>";
				}
				echo '<td class="first b b-$k">' . $num . '</td>';
				echo '<td class="t $k">' . $text . '</td>';
				echo '</tr>';
			}
		}
	}
	echo '</table></td><td valign="top"><table>';
	$taxonomies = get_taxonomies( array('public'=>true,'_builtin'=>false),'object','and' );
	foreach( $taxonomies as $taxonomy ) {
		$num_terms  = wp_count_terms( $taxonomy->name );
		$num = number_format_i18n( $num_terms );
		$text = _n( $taxonomy->labels->singular_name, $taxonomy->labels->name , intval( $num_terms ) );
		if ( current_user_can( 'manage_categories' ) ) {
			$num = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$num</a>";
			$text = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$text</a>";
		}
		echo '<tr><td class="first b b-' . $taxonomy->name . '">' . $num . '</td>';
		echo '<td class="t ' . $taxonomy->name . '">' . $text . '</td></tr>';
	}
	echo '</table></td></tr></tbody></table></div>';
}

if(!function_exists('add_custom_dashboard_widget')){
	function add_custom_dashboard_widget() {
		global $wp_meta_boxes;
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['backwpup_dashboard_widget_logs']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['backwpup_dashboard_widget_activejobs']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
		unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
		unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
		wp_add_dashboard_widget('custom_right_now', 'Right Now', 'custom_right_now');
	}
	add_action('wp_dashboard_setup', 'add_custom_dashboard_widget');
}
?>