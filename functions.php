<?php

function theme_assets() {
  wp_enqueue_script('js-file', get_theme_file_uri('/js/app.js'), NULL, '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'theme_assets' );

function get_free_shipping_minimum($zone_name = 'Polska') {
  if ( ! isset( $zone_name ) ) return null;

  $result = null;
  $zone = null;

  $zones = WC_Shipping_Zones::get_zones();
  
  foreach ( $zones as $z ) {
    if ( $z['zone_name'] == $zone_name ) {
      $zone = $z;
    }
  }

  if ( $zone ) {
    $shipping_methods_nl = $zone['shipping_methods'];
    $free_shipping_method = null;

    foreach ( $shipping_methods_nl as $method ) {
      if ( $method->id == 'free_shipping' ) {
        $free_shipping_method = $method;
        break;
      }
    }

    if ( $free_shipping_method ) {
      $result = $free_shipping_method->min_amount;
    }
  }

  return $result;
}

function furnob_child_enqueue_styles()
{
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
  wp_enqueue_style('furnob-child-style', get_stylesheet_directory_uri() . '/style.css', array(
    'furnob-style'
  ) , wp_get_theme()->get('Version'));
}
add_action('wp_enqueue_scripts', 'furnob_child_enqueue_styles', 99);

function add_comfino_payments()
{
   echo '<div id="comfino-payments-container"></div>';
}
add_action('wp', 'init_comfino_container');

function init_comfino_container()
{
    if (is_product())
    {
        add_action('woocommerce_before_add_to_cart_button', 'add_comfino_payments', 60);
    }
}

function init_own_widgets()
{
    register_sidebar(array(
        'name' => esc_html__('Questions and answers', 'furnob') ,
        'id' => 'questions-and-answers',
        'description' => esc_html__('', 'furnob') ,
        'before_widget' => '<div class="klbfooterwidget widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'init_own_widgets');

function add_text_below_product_title()
{
    global $post;
    global $product;

    $shipping_class_id = $product->get_shipping_class_id();
    $shipping_class = $product->get_shipping_class();
    $product_price = intval($product->get_price());

    $taxonomy_prefix = 'brands';
    $term_id = wp_get_post_terms( $post->ID, 'brands', array( 'fields' => 'ids' ))[0];
    $term_id_prefixed = $taxonomy_prefix .'_'. $term_id;
    $delivery_time = get_field( 'delivery_time', $term_id_prefixed );

    $free_shipping_amout = intval(get_free_shipping_minimum());

    if ($shipping_class_id)
    {
      $shipping_class_term = get_term($shipping_class_id, 'product_shipping_class');
      $shipping_description = $shipping_class_term->description;
      $is_free_delivery = $product_price > $free_shipping_amout ? 'Darmowa dostawa' : $shipping_description;
      $is_delivery_time = $delivery_time ? "Wysyłka w {$delivery_time}" : 'Brak danych na temat czasu wysyłki';

      $delivery_icon = get_theme_file_uri('./assets/icons/delivery-1.svg');
      $time_icon = get_theme_file_uri('./assets/icons/time.svg');

      echo "
      <div class=\"single-product__shipping-info-container\">
        <div class=\"single-product__shipping-info\">
          <img class=\"single-product__shipping-info-icon\" src=\"${delivery_icon}\"></img>
          <span class=\"single-product__shipping-info-delivery-text\">{$is_free_delivery}</span>
        </div>

        <div class=\"single-product__shipping-info\">
          <img class=\"single-product__shipping-info-icon\" src=\"${time_icon}\"></img>
          <span class=\"single-product__shipping-info-text\">{$is_delivery_time}</span>
        </div>
      </div>
        <p class=\"single-product__pay-once\">Koszty wysyłki nie sumują się, zapłacisz tylko raz!</p>
      ";
    }
}
add_action('woocommerce_single_product_summary', 'add_text_below_product_title', 20);

function render_contact_links()
{
    global $product;

    $length = $product->get_length();
    $width = $product->get_width();
    $height = $product->get_height();

    $is_length = $length ? "{$length} cm" : esc_html__('brak danych', 'furnob-child');
    $is_width = $width ? "{$width} cm" : esc_html__('brak danych', 'furnob-child');;
    $is_height = $height ? "{$height} kg" : esc_html__('brak danych', 'furnob-child');;

    $envelope_icon = get_theme_file_uri('./assets/icons/envelope-1.svg');
    $phone_icon = get_theme_file_uri('./assets/icons/phone-3.svg');
    $sizes_icon = get_theme_file_uri('./assets/icons/dimensions.svg');

    echo "
    <ul class=\"single-product__contact-links\">
      <li class=\"single-product__contact-link\">
        <a class=\"single-product__single-link mobile-tel\" href=\"tel:510 084 443\" rel=\"nofollow\">
          <img class=\"single-product__icon\" src=\"${phone_icon}\" />
            510 084 443
        </a>
      </li>

      <li id=\"popup-btn\" class=\"single-product__contact-link\">
        <a data-bs-toggle=\"modal\" href=\"#zadaj-pytanie\" role=\"button\">
          <img class=\"single-product__icon\" src=\"${envelope_icon}\" />
          Zapytaj o produkt
        </a>
      </li>

     
    </ul>
  ";

}
add_action('woocommerce_before_add_to_cart_button', 'render_contact_links');

function render_additional_information()
{
  global $product;

  $product_id = $product->get_id();
  $wood_from_poland = get_field('wood_from_poland', $product_id);

  $tree_icon = get_theme_file_uri('./assets/icons/tree.svg');

  $is_wood_form_poland = $wood_from_poland ? 
    "<div class=\"single-product__pl-wood\">
      <img src=\"${tree_icon}\"></img>
      <div class=\"single-product__pl-wood-text\">
        <h3 class=\"single-product__pl-wood-title\">Produkt z certyfikowanego polskiego drewna</h3>
        <p class=\"single-product__pl-wood-description\">Kupując ten produkt wspierasz zrównoważoną gospodarkę leśną i pomagasz lepiej chronić ekosystem.</p>
      </div>
    </div>"
    : '';

  if ($wood_from_poland) {
    echo $is_wood_form_poland;
  }
}
add_action('woocommerce_before_add_to_cart_button', 'render_additional_information', 10);

function add_pattern_book_button()
{
  global $product;

  $product_id = $product -> get_id();
  $is_pattern_book_to_hide = get_field('hide_pattern_book_button', $product_id);

  if (!$is_pattern_book_to_hide) {
    $pattern_icon = get_theme_file_uri('./assets/icons/pattern-2.svg');

    echo "
      <a class=\"single-product__pattern-book-button\" href=\"http://localhost:8888/meble-potocki-furnob/produkt/wzorniki/\">
        <img src=\"${pattern_icon}\"></img>
      Zamów wzornik tkanin
      </a>
    ";
  }
}
add_action('woocommerce_before_add_to_cart_button', 'add_pattern_book_button');

function woo_new_product_tab($tabs)
{
    $tabs['dimensions'] = array(
        'title' => __('Wymiary', 'woocommerce') ,
        'callback' => 'product_dimensions_tab_content',
    );

    return $tabs;
}
function product_dimensions_tab_content()
{
    global $product;

    $length = $product->get_length();
    $width = $product->get_width();
    $height = $product->get_height();
    $weight = $product->get_weight();
    $number_of_inserts = $product->get_attribute('rozkladanie');
    $unfolded_length = $product->get_attribute('dlugosc-po-rozlozeniu');

    $is_length = $length ? "{$length} cm" : esc_html__('brak danych', 'furnob-child');
    $is_height = $height ? "{$height} cm" : esc_html__('brak danych', 'furnob-child');
    $is_weight = $weight ? "{$weight} kg" : esc_html__('brak danych', 'furnob-child');
    $is_width = $width ? "{$width} cm" : esc_html__('brak danych', 'furnob-child');

    $unfolded_template = "
      <tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions\">
        <th class=\"woocommerce-product-attributes-item__label\">Długość po rozłożeniu</th>
        <td class=\"woocommerce-product-attributes-item__value\">{$unfolded_length}</td>
      </tr>";

    $is_unfolded_length = $unfolded_length ? $unfolded_template : "";

    echo "
      <h2 class=\"single-product__tab-heading\">Wymiary:</h2>
      <table class=\"woocommerce-product-attributes shop_attributes\">
        <tbody>
          <tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions\">
            <th class=\"woocommerce-product-attributes-item__label\">Szerokość</th>
            <td class=\"woocommerce-product-attributes-item__value\">{$is_width}</td>
          </tr>
          <tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions\">
            <th class=\"woocommerce-product-attributes-item__label\">Wysokość</th>
            <td class=\"woocommerce-product-attributes-item__value\">{$is_height}</td>
          </tr>
          <tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions\">
            <th class=\"woocommerce-product-attributes-item__label\">Długość</th>
            <td class=\"woocommerce-product-attributes-item__value\">{$is_length}</td>
          </tr>
          <tr class=\"woocommerce-product-attributes-item woocommerce-product-attributes-item--dimensions\">
            <th class=\"woocommerce-product-attributes-item__label\">Waga</th>
            <td class=\"woocommerce-product-attributes-item__value\">{$is_weight}</td>
          </tr>
          {$is_unfolded_length}
        </tbody>
      </table>
  ";
}
add_filter('woocommerce_product_tabs', 'woo_new_product_tab');

function woo_reorder_tabs($tabs)
{
  $tabs['description']['priority'] = 5;
  $tabs['dimensions']['priority'] = 10;
  $tabs['additional_information']['priority'] = 15;
  $tabs['reviews']['priority'] = 20;

  return $tabs;
}
add_filter('woocommerce_product_tabs', 'woo_reorder_tabs', 98);

function add_single_popup_product()
{
  echo get_template_part( 'product-popup' );
}
add_filter('woocommerce_after_single_product', 'add_single_popup_product');

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter( 'get_the_archive_title_prefix', '__return_empty_string' );

function custom_exclude_urls_from_sitemap( $url ) {
    $excluded_urls = [
        'https://meblepotocki.pl/kolekcje-polonia/',
        'https://meblepotocki.pl/produkt/sofa-wloska-sycylia-140-kopia/',
        'https://meblepotocki.pl/kolekcje/',
        'https://meblepotocki.pl/sklep/',
        'https://meblepotocki.pl/koszyk/',
        'https://meblepotocki.pl/zamowienie/',
        'https://meblepotocki.pl/moje-konto/'
    ];

    foreach ( $excluded_urls as $excluded_url ) {
        if ( trailingslashit( $url ) === trailingslashit( $excluded_url ) ) {
            return false;
        }
    }
    return $url;
}
add_filter( 'rank_math/sitemap/entry', 'custom_exclude_urls_from_sitemap' );

?>
