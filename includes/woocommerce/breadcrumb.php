<?php 
function display_title()
{
  $banner_title = get_theme_mod('furnob_shop_banner_title');
  $queried_object = get_queried_object();

  if($banner_title){
    echo "<h1 class='entry-title'>" . esc_html($banner_title) . "</h1>";
  } else if(is_tax('product_tag')) {
    $current_tag = get_queried_object();
    $tag_name = $current_tag->name;

    echo "<h1 class='entry-title product-list__tag-name'>{$tag_name}</h1>";
  } else {
    $text = esc_html_e('Shop','furnob');

    echo "<h1 class='entry-title'>{$text}</h1>";
  }
}
?>

<div class="klb-shop-banner page-header">
	<div class="container">
		<?php display_title(); ?>
	</div>
</div>