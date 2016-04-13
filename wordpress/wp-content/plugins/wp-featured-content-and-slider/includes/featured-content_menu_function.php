<?php
add_action('admin_menu', 'add_wpfcas_page');
function add_wpfcas_page()
    {
       add_submenu_page( 'edit.php?post_type=featured_post', 'Featured Content Designs', 'Featured Content Designs', 'manage_options', 'wpfcas-submenu-page', 'wpfcas_page_callback' ); 
       
    }

function wpfcas_page_callback() {	
	
	$result ='<div class="wrap"><div id="icon-tools" class="icon32"></div><h2>Featured Content Designs</h2></div>
	<div class="medium-12 wpcolumns"><p><h4>Added 2 shortcode</h4><p><code>[featured-content]  and [featured-content-slider] </code></p><h4>Complete shortcode with parameters</h4><code>[featured-content design="design-1" limit="5" post_type="featured_post" cat_id="category_id" grid="2" fa_icon_color="#000000" image_style="square" display_read_more="true" content_words_limit="50" show_content="true"]</code></p>
	<p><code>[featured-content-slider design="design-1" slides_column="2" slides_scroll="2" dots="false" arrows="false" autoplay="true" autoplay_interval="100" speed="3000" limit="5" post_type="featured_post" cat_id="category_id" fa_icon_color="#000000" image_style="square" display_read_more="true" content_words_limit="50" show_content="true"]</code></p></div>
				<div class="medium-6 wpcolumns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'designs/design-1.jpg"><p><code>[featured-content design="design-1"] and [featured-content-slider design="design-1"]</code></p></div></div>
				<div class="medium-6 wpcolumns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'designs/design-2.jpg"><p><code>[featured-content design="design-2"] and [featured-content-slider design="design-2"]</code></p></div></div>
				<div class="medium-6 wpcolumns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'designs/design-3.jpg"><p><code>[featured-content design="design-3"] and [featured-content-slider design="design-3"]</code></p></div></div>
				<div class="medium-6 wpcolumns"><div class="postdesigns"><img  src="'.plugin_dir_url( __FILE__ ).'designs/design-4.jpg"><p><code>[featured-content design="design-4"] and [featured-content-slider design="design-4" image_style="circle" slides_column="2"]</code></p></div></div>';
		
	echo $result;
}
function wpfcas_post_admin_style(){
	?>
	<style type="text/css">
	.postdesigns{-moz-box-shadow: 0 0 5px #ddd;-webkit-box-shadow: 0 0 5px#ddd;box-shadow: 0 0 5px #ddd; background:#fff; padding:10px;  margin-bottom:15px;}
	.wpcolumn, .wpcolumns {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;  box-sizing: border-box;}
.postdesigns img{width:100%; height:auto;}
@media only screen and (min-width: 40.0625em) {  
  .wpcolumn,
  .wpcolumns {position: relative;padding-left:10px;padding-right:10px;float: left; }
  .medium-1 {    width: 8.33333%; }
  .medium-2 {    width: 16.66667%; }
  .medium-3 {    width: 25%; }
  .medium-4 {    width: 33.33333%; }
  .medium-5 {    width: 41.66667%; }
  .medium-6 {    width: 50%; }
  .medium-7 {    width: 58.33333%; }
  .medium-8 {    width: 66.66667%; }
  .medium-9 {    width: 75%; }
  .medium-10 {    width: 83.33333%; }
  .medium-11 {    width: 91.66667%; }
  .medium-12 {    width: 100%; } 
   }
	</style>
<?php }

add_action('admin_head', 'wpfcas_post_admin_style');


