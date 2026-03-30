<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


// ============================================================
// TRADUCCIÓN COMPLETA DE WOOCOMMERCE AL ESPAÑOL
// ============================================================

// Botones "Add to cart" en listados y página de producto
add_filter( 'woocommerce_product_add_to_cart_text', function ( $text, $product ) {
    switch ( $product->get_type() ) {
        case 'external':
            return __( 'Comprar producto', 'woocomerse_caersport_template' );
        case 'grouped':
            return __( 'Ver productos', 'woocomerse_caersport_template' );
        case 'variable':
            return __( 'Seleccionar opciones', 'woocomerse_caersport_template' );
        default:
            return $product->is_in_stock()
                ? __( 'Agregar al carrito', 'woocomerse_caersport_template' )
                : __( 'Leer más', 'woocomerse_caersport_template' );
    }
}, 10, 2 );

add_filter( 'woocommerce_product_single_add_to_cart_text', function () {
    return __( 'Agregar al carrito', 'woocomerse_caersport_template' );
} );

// Traducción masiva de cadenas de WooCommerce
add_filter( 'gettext', 'caer_traducir_woocommerce', 20, 3 );
function caer_traducir_woocommerce( $translated, $original, $domain ) {
    if ( $domain !== 'woocommerce' && $domain !== 'woo-gutenberg-products-block' ) {
        return $translated;
    }

    $traducciones = array(
        // Carrito
        'Add to cart'                          => 'Agregar al carrito',
        'Add to Cart'                          => 'Agregar al carrito',
        'View cart'                            => 'Ver carrito',
        'Update cart'                          => 'Actualizar carrito',
        'Cart'                                 => 'Carrito',
        'Your cart'                            => 'Tu carrito',
        'Your cart is currently empty.'        => 'Tu carrito está vacío.',
        'No products in the cart.'             => 'No hay productos en el carrito.',
        'Cart totals'                          => 'Totales del carrito',
        'Continue shopping'                    => 'Continuar comprando',
        'Proceed to checkout'                  => 'Proceder al pago',
        'Return to shop'                       => 'Volver a la tienda',
        'Apply coupon'                         => 'Aplicar cupón',
        'Coupon code'                          => 'Código de cupón',
        'Coupon:'                              => 'Cupón:',
        'Remove this item'                     => 'Eliminar este artículo',
        'Remove'                               => 'Eliminar',
        'Restore'                              => 'Restaurar',

        // Inventario
        'In stock'                             => 'En stock',
        'Out of stock'                         => 'Agotado',
        'Available on backorder'               => 'Disponible bajo pedido',
        'On backorder'                         => 'Bajo pedido',
        'Only %s left in stock'                => 'Solo %s en stock',
        'Only 1 left in stock'                 => 'Solo 1 en stock',

        // Oferta / Precio
        'Sale!'                                => '¡Oferta!',
        'Original price was:'                  => 'Precio original:',
        'Current price is:'                    => 'Precio actual:',
        'Free!'                                => '¡Gratis!',
        'From:'                                => 'Desde:',

        // Checkout
        'Checkout'                             => 'Pagar',
        'Order'                                => 'Pedido',
        'Place order'                          => 'Realizar pedido',
        'Your order'                           => 'Tu pedido',
        'Order summary'                        => 'Resumen del pedido',
        'Billing details'                      => 'Datos de facturación',
        'Billing address'                      => 'Dirección de facturación',
        'Shipping address'                     => 'Dirección de envío',
        'Ship to a different address?'         => '¿Enviar a una dirección diferente?',
        'Order notes'                          => 'Notas del pedido',
        'Notes about your order, e.g. special notes for delivery.' => 'Notas sobre tu pedido, p. ej. instrucciones especiales de entrega.',
        'Have a coupon?'                       => '¿Tienes un cupón?',
        'Click here to enter your coupon code' => 'Haz clic aquí para ingresar tu código de cupón',
        'Payment'                              => 'Pago',
        'Payment method'                       => 'Método de pago',
        'Sorry, it seems that there are no available payment methods for your state. Please contact us if you require assistance or wish to make alternate arrangements.' => 'Lo sentimos, no hay métodos de pago disponibles para tu ubicación. Contáctanos si necesitas ayuda.',

        // Campos de formulario
        'First name'                           => 'Nombre',
        'Last name'                            => 'Apellido',
        'Company name (optional)'              => 'Empresa (opcional)',
        'Country / Region'                     => 'País / Región',
        'Street address'                       => 'Dirección',
        'House number and street name'         => 'Número y nombre de la calle',
        'Apartment, suite, unit, etc. (optional)' => 'Apartamento, suite, etc. (opcional)',
        'Town / City'                          => 'Ciudad',
        'State / County'                       => 'Región / Estado',
        'ZIP Code'                             => 'Código Postal',
        'Postcode / ZIP'                       => 'Código Postal',
        'Phone'                                => 'Teléfono',
        'Email address'                        => 'Correo electrónico',
        'Order notes (optional)'               => 'Notas del pedido (opcional)',

        // Totales
        'Subtotal'                             => 'Subtotal',
        'Total'                                => 'Total',
        'Shipping'                             => 'Envío',
        'Tax'                                  => 'Impuesto',
        'Taxes'                                => 'Impuestos',
        'Discount'                             => 'Descuento',
        'Free shipping'                        => 'Envío gratis',
        'Calculate shipping'                   => 'Calcular envío',

        // Mi cuenta
        'My account'                           => 'Mi cuenta',
        'Orders'                               => 'Pedidos',
        'Downloads'                            => 'Descargas',
        'Addresses'                            => 'Direcciones',
        'Account details'                      => 'Detalles de la cuenta',
        'Log out'                              => 'Cerrar sesión',
        'Logout'                               => 'Cerrar sesión',
        'Login'                                => 'Iniciar sesión',
        'Sign in'                              => 'Iniciar sesión',
        'Register'                             => 'Registrarse',
        'Username'                             => 'Usuario',
        'Username or email address'            => 'Usuario o correo electrónico',
        'Password'                             => 'Contraseña',
        'Remember me'                          => 'Recordarme',
        'Lost your password?'                  => '¿Olvidaste tu contraseña?',
        'Log in'                               => 'Iniciar sesión',
        'New password'                         => 'Nueva contraseña',
        'Reset password'                       => 'Restablecer contraseña',
        'Save changes'                         => 'Guardar cambios',
        'Edit'                                 => 'Editar',
        'Add'                                  => 'Agregar',
        'Delete'                               => 'Eliminar',
        'Cancel'                               => 'Cancelar',

        // Pedidos
        'Order #%s'                            => 'Pedido #%s',
        'Order date:'                          => 'Fecha del pedido:',
        'Order status:'                        => 'Estado del pedido:',
        'Order total:'                         => 'Total del pedido:',
        'Pending payment'                      => 'Pago pendiente',
        'Processing'                           => 'Procesando',
        'On hold'                              => 'En espera',
        'Completed'                            => 'Completado',
        'Cancelled'                            => 'Cancelado',
        'Refunded'                             => 'Reembolsado',
        'Failed'                               => 'Fallido',
        'View order'                           => 'Ver pedido',
        'Cancel order'                         => 'Cancelar pedido',
        'Track order'                          => 'Rastrear pedido',
        'Reorder'                              => 'Repetir pedido',
        'No order has been made yet.'          => 'Aún no se han realizado pedidos.',
        'Go shop'                              => 'Ir a la tienda',

        // Tienda / Catálogo
        'Shop'                                 => 'Tienda',
        'Products'                             => 'Productos',
        'Product'                              => 'Producto',
        'Price'                                => 'Precio',
        'Quantity'                             => 'Cantidad',
        'Default sorting'                      => 'Ordenamiento predeterminado',
        'Sort by popularity'                   => 'Ordenar por popularidad',
        'Sort by average rating'               => 'Ordenar por calificación',
        'Sort by latest'                       => 'Más recientes',
        'Sort by price: low to high'           => 'Precio: menor a mayor',
        'Sort by price: high to low'           => 'Precio: mayor a menor',
        'Showing all %d results'               => 'Mostrando %d resultados',
        'Showing the single result'            => 'Mostrando 1 resultado',
        'No products were found matching your selection.' => 'No se encontraron productos para tu selección.',
        'No products found'                    => 'No se encontraron productos',

        // Producto individual
        'Description'                          => 'Descripción',
        'Additional information'               => 'Información adicional',
        'Reviews'                              => 'Reseñas',
        'Related products'                     => 'Productos relacionados',
        'You may also like&hellip;'            => 'También te puede gustar…',
        'Up-sells'                             => 'Productos recomendados',
        'Categories:'                          => 'Categorías:',
        'Category:'                            => 'Categoría:',
        'Tags:'                                => 'Etiquetas:',
        'SKU:'                                 => 'SKU:',
        'SKU'                                  => 'SKU',
        'Availability:'                        => 'Disponibilidad:',
        'Select options'                       => 'Seleccionar opciones',
        'Choose an option'                     => 'Elige una opción',
        'Clear'                                => 'Limpiar',
        'Clear selection'                      => 'Limpiar selección',
        'Read more'                            => 'Leer más',

        // Reseñas
        'Be the first to review &ldquo;%s&rdquo;' => 'Sé el primero en reseñar &ldquo;%s&rdquo;',
        'There are no reviews yet.'            => 'Aún no hay reseñas.',
        'Add a review'                         => 'Agregar reseña',
        'Submit'                               => 'Enviar',
        'Your rating'                          => 'Tu calificación',
        'Your review'                          => 'Tu reseña',
        'Name'                                 => 'Nombre',
        'Email'                                => 'Correo electrónico',
        'Rating'                               => 'Calificación',
        'Verified owner'                       => 'Comprador verificado',
        'Rated %s out of 5'                    => 'Calificado %s de 5',

        // Búsqueda
        'Search results for:'                  => 'Resultados de búsqueda para:',
        'Search'                               => 'Buscar',
        'No products found for'                => 'No se encontraron productos para',

        // Envío
        'Free'                                 => 'Gratis',
        'Enter your address to view shipping options.' => 'Ingresa tu dirección para ver opciones de envío.',
        'No shipping options were found.'      => 'No se encontraron opciones de envío.',
        'No shipping methods available'        => 'No hay métodos de envío disponibles',

        // Mensajes de sistema
        'Product successfully added to your cart.' => 'Producto agregado al carrito.',
        'has been added to your cart.'         => 'fue agregado a tu carrito.',
        'was successfully added to your cart.' => 'fue agregado exitosamente a tu carrito.',
        'Your cart has been updated.'          => 'Tu carrito ha sido actualizado.',
        'Coupon code applied successfully.'    => 'Cupón aplicado correctamente.',
        'Coupon &ldquo;%s&rdquo; does not exist!'  => '¡El cupón &ldquo;%s&rdquo; no existe!',
        'Thank you. Your order has been received.' => 'Gracias. Tu pedido ha sido recibido.',

        // Paginación
        'Next'                                 => 'Siguiente',
        'Previous'                             => 'Anterior',
        'page'                                 => 'página',
    );

    if ( isset( $traducciones[ $original ] ) ) {
        return $traducciones[ $original ];
    }

    return $translated;
}

// Traducir también cadenas con placeholders (ngettext)
add_filter( 'ngettext', 'caer_traducir_ngettext_woo', 20, 5 );
function caer_traducir_ngettext_woo( $translated, $single, $plural, $number, $domain ) {
    if ( $domain !== 'woocommerce' ) return $translated;

    $traducciones_plural = array(
        '%s item'   => array( '%s artículo', '%s artículos' ),
        '%s result' => array( '%s resultado', '%s resultados' ),
        '%s review' => array( '%s reseña', '%s reseñas' ),
        '%s product' => array( '%s producto', '%s productos' ),
    );

    foreach ( $traducciones_plural as $key => $values ) {
        if ( $single === $key || $plural === $key . 's' ) {
            return $number === 1 ? sprintf( $values[0], $number ) : sprintf( $values[1], $number );
        }
    }

    return $translated;
}

// ============================================================
// DESACTIVAR MODO "COMING SOON" DE WOOCOMMERCE
// ============================================================
add_action( 'init', function () {
    if ( get_option( 'woocommerce_coming_soon' ) === 'yes' ) {
        update_option( 'woocommerce_coming_soon', 'no' );
    }
    if ( get_option( 'woocommerce_store_pages_only' ) === 'yes' ) {
        update_option( 'woocommerce_store_pages_only', 'no' );
    }
}, 1 );

// Desactivar el handler de "Coming Soon" antes de que redireccione
add_action( 'template_redirect', function () {
    if ( ! class_exists( 'WooCommerce' ) ) return;

    global $wp_filter;

    // WooCommerce 8.2+ usa esta clase para interceptar las peticiones
    $hooks_to_clear = array(
        'Automattic\WooCommerce\Admin\Features\ComingSoon\ComingSoonRequestHandler',
        'WC_Coming_Soon',
    );

    if ( isset( $wp_filter['template_redirect'] ) ) {
        foreach ( $wp_filter['template_redirect']->callbacks as $priority => $callbacks ) {
            foreach ( $callbacks as $key => $callback ) {
                if ( is_array( $callback['function'] ) ) {
                    $class = is_object( $callback['function'][0] )
                        ? get_class( $callback['function'][0] )
                        : $callback['function'][0];
                    foreach ( $hooks_to_clear as $target ) {
                        if ( strpos( $class, 'ComingSoon' ) !== false || strpos( $class, 'Coming_Soon' ) !== false ) {
                            unset( $wp_filter['template_redirect']->callbacks[ $priority ][ $key ] );
                        }
                    }
                }
            }
        }
    }
}, 0 );


// ============================================================
// ELIMINAR RESTRICCIONES DEL TEMA PADRE (best-shop)
// ============================================================
add_action( 'init', function () {
    remove_all_actions( 'best_shop_license_notice' );
    remove_all_actions( 'best_shop_pro_notice' );
    remove_all_actions( 'best_shop_activation_notice' );
    remove_all_actions( 'best_shop_demo_notice' );
} );

add_action( 'admin_init', function () {
    remove_all_actions( 'admin_notices', 'best_shop_license_admin_notice' );
    remove_all_actions( 'admin_notices', 'best_shop_demo_notice' );
    remove_all_actions( 'admin_notices', 'best_shop_activation_notice' );
    remove_all_actions( 'admin_notices', 'best_shop_pro_upgrade_notice' );
} );

// Desbloquear opciones del customizer que puedan estar restringidas
add_filter( 'best_shop_is_pro', '__return_true' );
add_filter( 'best_shop_pro_features', '__return_true' );


// ============================================================
// CONFIGURACIÓN DEL CHILD THEME
// ============================================================
function caersport_woocommerce_settings( $values ) {

    $values['primary_color']    = '#AA1818';
    $values['secondary_color']  = '#8f1212';
    $values['heading_font']     = 'Jost';
    $values['body_font']        = 'Poppins';

    $values['woo_bar_color']    = '#ffffff';
    $values['woo_bar_bg_color'] = '#AA1818';
    $values['woo_category_title'] = esc_html__( 'Todas las Categorías', 'woocomerse_caersport_template' );

    $values['preloader_enabled'] = false;

    $values['logo_width']   = 160;
    $values['layout_width'] = 1280;

    $values['header_layout'] = 'woocommerce-bar';
    $values['menu_layout']   = 'default';
    $values['enable_search'] = true;
    $values['ed_social_links'] = true;

    $values['subscription_shortcode'] = '';

    $values['enable_top_bar']          = false;
    $values['top_bar_left_content']    = 'text';
    $values['top_bar_left_text']       = esc_html__( 'Envío gratis en pedidos mayores a $50', 'woocomerse_caersport_template' );
    $values['top_bar_right_content']   = 'menu_social';
    $values['topbar_bg_color']         = '#1e1e1e';
    $values['topbar_text_color']       = '#e7e7e7';

    $values['footer_text_color']  = '#b0b0b0';
    $values['footer_color']       = '#1e1e1e';
    $values['footer_link']        = 'https://caersport.com/';
    $values['footer_copyright']   = esc_html__( '© 2025 CaerSport. Todos los derechos reservados.', 'woocomerse_caersport_template' );

    $values['page_sidebar_layout'] = 'right-sidebar';
    $values['post_sidebar_layout'] = 'right-sidebar';
    $values['layout_style']        = 'right-sidebar';
    $values['woo_sidebar_layout']  = 'left-sidebar';

    return $values;
}
add_filter( 'best_shop_settings', 'caersport_woocommerce_settings' );

/**
 * Portada (página estática): ancho completo sin barra lateral.
 * best_shop usa get_theme_mod( 'page_sidebar_layout' ); el filtro best_shop_settings solo afecta el valor por defecto,
 * así que forzamos no-sidebar aquí para que no se cargue sidebar-1 (widgets por defecto).
 */
function caersport_front_page_no_page_sidebar( $value ) {
    if ( is_admin() && ! is_customize_preview() ) {
        return $value;
    }
    if ( is_front_page() && is_page() ) {
        return 'no-sidebar';
    }
    return $value;
}
add_filter( 'theme_mod_page_sidebar_layout', 'caersport_front_page_no_page_sidebar', 20 );


// ============================================================
// SOPORTE DE CABECERA PERSONALIZADA
// ============================================================
function caersport_woocommerce_header_style() {
    add_theme_support(
        'custom-header',
        apply_filters(
            'caersport_woocommerce_custom_header_args',
            array(
                'default-text-color' => '#000000',
                'width'              => 1920,
                'height'             => 760,
                'flex-height'        => true,
                'video'              => true,
                'wp-head-callback'   => 'caersport_woocommerce_header_style',
            )
        )
    );
    add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'caersport_woocommerce_header_style' );


// ============================================================
// ENCOLAR ESTILOS Y SCRIPTS
// ============================================================
if ( !function_exists( 'caersport_woocommerce_cfg_locale_css' ) ) :
    function caersport_woocommerce_cfg_locale_css( $uri ) {
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) ) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'caersport_woocommerce_cfg_locale_css' );

if ( !function_exists( 'caersport_woocommerce_cfg_parent_css' ) ) :
    function caersport_woocommerce_cfg_parent_css() {
        wp_enqueue_style( 'caersport_woocommerce_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array() );
    }
endif;
add_action( 'wp_enqueue_scripts', 'caersport_woocommerce_cfg_parent_css', 10 );

function caersport_woocommerce_custom_scripts() {
    wp_enqueue_script( 'woocomerse_caersport_template', get_stylesheet_directory_uri() . '/assests/preloader.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'caersport_woocommerce_custom_scripts' );


// ============================================================
// CUSTOMIZER — SUSCRIPCIÓN Y PRELOADER
// ============================================================
if ( !function_exists( 'caersport_woocommerce_customize_register' ) ) :
    function caersport_woocommerce_customize_register( $wp_customize ) {

        $wp_customize->add_section(
            'subscription_settings',
            array(
                'title'       => esc_html__( 'Suscripción por Email', 'woocomerse_caersport_template' ),
                'priority'    => 199,
                'capability'  => 'edit_theme_options',
                'panel'       => 'theme_options',
                'description' => __( 'Agrega el shortcode del plugin de suscripción.', 'woocomerse_caersport_template' ),
            )
        );

        $wp_customize->add_setting(
            'subscription_shortcode',
            array(
                'default'           => best_shop_default_settings( 'subscription_shortcode' ),
                'sanitize_callback' => 'sanitize_text_field',
                'transport'         => 'postMessage',
            )
        );

        $wp_customize->add_control(
            'subscription_shortcode',
            array(
                'label'   => esc_html__( 'Shortcode del Plugin de Suscripción', 'woocomerse_caersport_template' ),
                'section' => 'subscription_settings',
                'type'    => 'text',
            )
        );

        $wp_customize->add_section(
            'preloader_settings',
            array(
                'title'      => esc_html__( 'Preloader', 'woocomerse_caersport_template' ),
                'priority'   => 200,
                'capability' => 'edit_theme_options',
                'panel'      => 'theme_options',
            )
        );

        $wp_customize->add_setting(
            'preloader_enabled',
            array(
                'default'           => best_shop_default_settings( 'preloader_enabled' ),
                'sanitize_callback' => 'best_shop_sanitize_checkbox',
                'transport'         => 'refresh',
            )
        );

        $wp_customize->add_control(
            'preloader_enabled',
            array(
                'label'   => esc_html__( 'Activar Preloader', 'woocomerse_caersport_template' ),
                'section' => 'preloader_settings',
                'type'    => 'checkbox',
            )
        );
    }
endif;
add_action( 'customize_register', 'caersport_woocommerce_customize_register' );


// ============================================================
// INICIO: mostrar solo la plantilla del tema (hooks), no el contenido del editor de la página "Inicio"
// ============================================================
function caersport_hide_static_front_page_content( $content ) {
    if ( is_admin() || wp_doing_ajax() || wp_is_json_request() || is_feed() ) {
        return $content;
    }
    if ( is_preview() ) {
        return $content;
    }
    // Solo cuando la portada es una página estática (Lectura → Página de inicio), no el blog de entradas.
    if ( ! is_front_page() || ! is_page() ) {
        return $content;
    }
    if ( ! in_the_loop() || ! is_main_query() ) {
        return $content;
    }
    return '';
}
add_filter( 'the_content', 'caersport_hide_static_front_page_content', 999 );


// ============================================================
// SECCIÓN DE CATEGORÍAS EN LA PÁGINA DE INICIO
// ============================================================
function caer_product_categories_section() {
    if ( ! is_front_page() ) return;
    if ( ! class_exists( 'WooCommerce' ) ) return;

    $categories = get_terms( array(
        'taxonomy'   => 'product_cat',
        'orderby'    => 'count',
        'order'      => 'DESC',
        'hide_empty' => true,
        'number'     => 10,
        'exclude'    => array( get_option( 'default_product_cat' ) ),
    ) );

    if ( empty( $categories ) || is_wp_error( $categories ) ) return;
    ?>
    <section class="caer-categories-section">
        <div class="caer-categories-container">
            <div class="caer-section-header">
                <h2 class="caer-section-title"><?php esc_html_e( 'Nuestras Categorías', 'woocomerse_caersport_template' ); ?></h2>
                <p class="caer-section-subtitle"><?php esc_html_e( 'Explora nuestra amplia selección de productos', 'woocomerse_caersport_template' ); ?></p>
            </div>
            <div class="caer-categories-grid">
                <?php foreach ( $categories as $category ) :
                    $thumbnail_id  = get_term_meta( $category->term_id, 'thumbnail_id', true );
                    $image_url     = $thumbnail_id
                        ? wp_get_attachment_image_url( $thumbnail_id, 'medium_large' )
                        : wc_placeholder_img_src( 'medium_large' );
                    $category_link = get_term_link( $category );
                    $count_label   = sprintf(
                        _n( '%s producto', '%s productos', $category->count, 'woocomerse_caersport_template' ),
                        number_format_i18n( $category->count )
                    );
                ?>
                <a href="<?php echo esc_url( $category_link ); ?>" class="caer-category-card">
                    <div class="caer-category-img-wrap">
                        <img src="<?php echo esc_url( $image_url ); ?>"
                             alt="<?php echo esc_attr( $category->name ); ?>"
                             loading="lazy">
                        <div class="caer-category-overlay"></div>
                    </div>
                    <div class="caer-category-info">
                        <h3 class="caer-category-name"><?php echo esc_html( $category->name ); ?></h3>
                        <span class="caer-category-count"><?php echo esc_html( $count_label ); ?></span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
            <div class="caer-categories-cta">
                <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="caer-btn-all-cats">
                    <?php esc_html_e( 'Ver todos los productos', 'woocomerse_caersport_template' ); ?>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>
    <?php
}
add_action( 'best_shop_before_posts_content', 'caer_product_categories_section', 20 );


// ============================================================
// BARRA DE BENEFICIOS (trust signals) — solo homepage
// ============================================================
function caer_trust_bar_section() {
    if ( ! is_front_page() ) return;
    ?>
    <div class="caer-trust-bar">
        <div class="caer-container">
            <div class="caer-trust-grid">
                <div class="caer-trust-item">
                    <div class="caer-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" width="32" height="32"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v3h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
                    </div>
                    <div class="caer-trust-text">
                        <strong><?php esc_html_e( 'Despacho Rápido', 'woocomerse_caersport_template' ); ?></strong>
                        <span><?php esc_html_e( 'Envío gratis sobre $50.000', 'woocomerse_caersport_template' ); ?></span>
                    </div>
                </div>
                <div class="caer-trust-item">
                    <div class="caer-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" width="32" height="32"><circle cx="12" cy="12" r="10"/><path d="M9 12l2 2 4-4"/></svg>
                    </div>
                    <div class="caer-trust-text">
                        <strong><?php esc_html_e( 'Repuestos Originales', 'woocomerse_caersport_template' ); ?></strong>
                        <span><?php esc_html_e( 'Piezas certificadas y garantizadas', 'woocomerse_caersport_template' ); ?></span>
                    </div>
                </div>
                <div class="caer-trust-item">
                    <div class="caer-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" width="32" height="32"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                    </div>
                    <div class="caer-trust-text">
                        <strong><?php esc_html_e( 'Pago Seguro', 'woocomerse_caersport_template' ); ?></strong>
                        <span><?php esc_html_e( 'Transacciones 100% protegidas', 'woocomerse_caersport_template' ); ?></span>
                    </div>
                </div>
                <div class="caer-trust-item">
                    <div class="caer-trust-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" width="32" height="32"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <div class="caer-trust-text">
                        <strong><?php esc_html_e( 'Asesoría Técnica', 'woocomerse_caersport_template' ); ?></strong>
                        <span><?php esc_html_e( 'Expertos en repuestos automotrices', 'woocomerse_caersport_template' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'best_shop_before_posts_content', 'caer_trust_bar_section', 10 );


// ============================================================
// SLIDER DE ÚLTIMOS PRODUCTOS — solo homepage
// ============================================================
function caer_latest_products_slider() {
    if ( ! is_front_page() ) return;
    if ( ! class_exists( 'WooCommerce' ) ) return;

    $latest = wc_get_products( array(
        'status'  => 'publish',
        'limit'   => 12,
        'orderby' => 'date',
        'order'   => 'DESC',
    ) );

    if ( empty( $latest ) ) return;
    ?>
    <section class="caer-slider-section">
        <div class="caer-container">
            <div class="caer-section-header">
                <h2 class="caer-section-title"><?php esc_html_e( 'Últimos Productos', 'woocomerse_caersport_template' ); ?></h2>
                <p class="caer-section-subtitle"><?php esc_html_e( 'Recién llegados a nuestra tienda', 'woocomerse_caersport_template' ); ?></p>
            </div>

            <div class="caer-slider-wrapper">
                <button class="caer-slider-btn caer-slider-prev" aria-label="<?php esc_attr_e( 'Anterior', 'woocomerse_caersport_template' ); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="20" height="20"><path d="M15 18l-6-6 6-6"/></svg>
                </button>

                <div class="caer-slider-track-wrap">
                    <div class="caer-slider-track">
                        <?php foreach ( $latest as $product ) :
                            $image_url   = wp_get_attachment_image_url( $product->get_image_id(), 'woocommerce_thumbnail' );
                            if ( ! $image_url ) $image_url = wc_placeholder_img_src( 'woocommerce_thumbnail' );
                            $product_url = $product->get_permalink();
                            $price_html  = $product->get_price_html();
                            $is_sale     = $product->is_on_sale();
                            $is_new      = ( strtotime( $product->get_date_created() ) > strtotime( '-30 days' ) );
                            $avg_rating  = $product->get_average_rating();
                            $rating_count = $product->get_rating_count();
                        ?>
                        <div class="caer-slide-item">
                            <div class="caer-product-card">
                                <?php if ( $is_sale ) : ?>
                                <span class="caer-product-badge caer-badge-sale"><?php esc_html_e( 'Oferta', 'woocomerse_caersport_template' ); ?></span>
                                <?php elseif ( $is_new ) : ?>
                                <span class="caer-product-badge caer-badge-new"><?php esc_html_e( 'Nuevo', 'woocomerse_caersport_template' ); ?></span>
                                <?php endif; ?>

                                <a href="<?php echo esc_url( $product_url ); ?>" class="caer-product-img-link">
                                    <img src="<?php echo esc_url( $image_url ); ?>"
                                         alt="<?php echo esc_attr( $product->get_name() ); ?>"
                                         loading="lazy"
                                         class="caer-product-img">
                                </a>

                                <div class="caer-product-actions">
                                    <a href="<?php echo esc_url( $product_url ); ?>" class="caer-product-action-btn" title="<?php esc_attr_e( 'Ver producto', 'woocomerse_caersport_template' ); ?>">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                                    </a>
                                    <?php if ( $product->is_type( 'simple' ) && $product->is_in_stock() ) : ?>
                                    <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="caer-product-action-btn caer-add-to-cart" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" title="<?php esc_attr_e( 'Agregar al carrito', 'woocomerse_caersport_template' ); ?>">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                                    </a>
                                    <?php endif; ?>
                                </div>

                                <div class="caer-product-info">
                                    <?php if ( $avg_rating > 0 ) : ?>
                                    <div class="caer-product-rating">
                                        <?php for ( $i = 1; $i <= 5; $i++ ) : ?>
                                        <svg class="caer-star <?php echo $i <= round( $avg_rating ) ? 'caer-star--filled' : ''; ?>" viewBox="0 0 24 24" width="13" height="13" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                        <?php endfor; ?>
                                        <span class="caer-rating-count">(<?php echo esc_html( $rating_count ); ?>)</span>
                                    </div>
                                    <?php endif; ?>
                                    <h3 class="caer-product-title">
                                        <a href="<?php echo esc_url( $product_url ); ?>"><?php echo esc_html( $product->get_name() ); ?></a>
                                    </h3>
                                    <div class="caer-product-price"><?php echo wp_kses_post( $price_html ); ?></div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button class="caer-slider-btn caer-slider-next" aria-label="<?php esc_attr_e( 'Siguiente', 'woocomerse_caersport_template' ); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="20" height="20"><path d="M9 18l6-6-6-6"/></svg>
                </button>
            </div>

            <div class="caer-slider-dots" aria-label="<?php esc_attr_e( 'Navegación del slider', 'woocomerse_caersport_template' ); ?>"></div>

            <div class="caer-slider-cta">
                <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="caer-btn-outline">
                    <?php esc_html_e( 'Ver toda la tienda', 'woocomerse_caersport_template' ); ?>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="15" height="15"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                </a>
            </div>
        </div>
    </section>

    <script>
    (function() {
        document.addEventListener('DOMContentLoaded', function() {
            var sections = document.querySelectorAll('.caer-slider-section');
            sections.forEach(function(section) {
                var track     = section.querySelector('.caer-slider-track');
                var slides    = section.querySelectorAll('.caer-slide-item');
                var btnPrev   = section.querySelector('.caer-slider-prev');
                var btnNext   = section.querySelector('.caer-slider-next');
                var dotsWrap  = section.querySelector('.caer-slider-dots');
                if (!track || slides.length === 0) return;

                var current  = 0;
                var perView  = getPerView();
                var total    = slides.length;
                var maxIdx   = Math.max(0, total - perView);

                function getPerView() {
                    return window.innerWidth <= 480 ? 1
                         : window.innerWidth <= 768 ? 2
                         : window.innerWidth <= 1024 ? 3
                         : 4;
                }

                function getSlideWidth() {
                    var wrap = track.parentElement;
                    return wrap.offsetWidth / perView;
                }

                function goTo(idx) {
                    current = Math.min(Math.max(idx, 0), maxIdx);
                    track.style.transform = 'translateX(-' + (current * getSlideWidth()) + 'px)';
                    updateDots();
                    updateBtns();
                }

                function updateDots() {
                    var dots = dotsWrap ? dotsWrap.querySelectorAll('.caer-dot') : [];
                    dots.forEach(function(d, i) {
                        d.classList.toggle('caer-dot--active', i === current);
                    });
                }

                function updateBtns() {
                    if (btnPrev) btnPrev.disabled = (current === 0);
                    if (btnNext) btnNext.disabled = (current >= maxIdx);
                }

                // Crear dots
                if (dotsWrap) {
                    for (var d = 0; d <= maxIdx; d++) {
                        var dot = document.createElement('button');
                        dot.className = 'caer-dot' + (d === 0 ? ' caer-dot--active' : '');
                        dot.setAttribute('aria-label', 'Slide ' + (d + 1));
                        dot.addEventListener('click', (function(idx) {
                            return function() { goTo(idx); };
                        })(d));
                        dotsWrap.appendChild(dot);
                    }
                }

                if (btnPrev) btnPrev.addEventListener('click', function() { goTo(current - 1); });
                if (btnNext) btnNext.addEventListener('click', function() { goTo(current + 1); });

                // Auto-play
                var timer = setInterval(function() {
                    goTo(current >= maxIdx ? 0 : current + 1);
                }, 4500);
                section.addEventListener('mouseenter', function() { clearInterval(timer); });
                section.addEventListener('mouseleave', function() {
                    timer = setInterval(function() { goTo(current >= maxIdx ? 0 : current + 1); }, 4500);
                });

                // Touch / swipe
                var startX = 0;
                track.addEventListener('touchstart', function(e) { startX = e.touches[0].clientX; }, { passive: true });
                track.addEventListener('touchend', function(e) {
                    var diff = startX - e.changedTouches[0].clientX;
                    if (Math.abs(diff) > 50) goTo(diff > 0 ? current + 1 : current - 1);
                });

                // Resize
                window.addEventListener('resize', function() {
                    perView = getPerView();
                    maxIdx  = Math.max(0, total - perView);
                    current = Math.min(current, maxIdx);
                    goTo(current);
                });

                goTo(0);
            });
        });
    })();
    </script>
    <?php
}
add_action( 'best_shop_before_posts_content', 'caer_latest_products_slider', 30 );


// ============================================================
// BANNER PROMOCIONAL — solo homepage
// ============================================================
function caer_promo_banner_section() {
    if ( ! is_front_page() ) return;
    $shop_url = class_exists( 'WooCommerce' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/tienda/' );
    ?>
    <div class="caer-promo-banners">
        <div class="caer-container">
            <div class="caer-promo-grid">

                <div class="caer-promo-card caer-promo-card--large caer-promo-accent">
                    <div class="caer-promo-content">
                        <span class="caer-promo-eyebrow"><?php esc_html_e( 'Repuestos Automotrices', 'woocomerse_caersport_template' ); ?></span>
                        <h3 class="caer-promo-title"><?php esc_html_e( 'Todo lo que tu vehículo necesita en un solo lugar', 'woocomerse_caersport_template' ); ?></h3>
                        <p class="caer-promo-desc"><?php esc_html_e( 'Bujías, filtros, correas, sensores, bombas y mucho más. Envío a todo Chile.', 'woocomerse_caersport_template' ); ?></p>
                        <a href="<?php echo esc_url( $shop_url ); ?>" class="caer-promo-btn">
                            <?php esc_html_e( 'Ver catálogo', 'woocomerse_caersport_template' ); ?>
                        </a>
                    </div>
                    <div class="caer-promo-deco">
                        <div class="caer-promo-circle caer-promo-circle--1"></div>
                        <div class="caer-promo-circle caer-promo-circle--2"></div>
                        <svg class="caer-promo-svg-deco" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <circle cx="100" cy="100" r="90" stroke="rgba(255,255,255,0.08)" stroke-width="20"/>
                            <circle cx="100" cy="100" r="55" stroke="rgba(255,255,255,0.05)" stroke-width="20"/>
                        </svg>
                    </div>
                </div>

                <div class="caer-promo-stack">
                    <div class="caer-promo-card caer-promo-card--dark">
                        <div class="caer-promo-content">
                            <span class="caer-promo-eyebrow"><?php esc_html_e( 'Hasta 50% dcto.', 'woocomerse_caersport_template' ); ?></span>
                            <h3 class="caer-promo-title"><?php esc_html_e( 'Bujías & Filtros en Oferta', 'woocomerse_caersport_template' ); ?></h3>
                            <a href="<?php echo esc_url( $shop_url ); ?>" class="caer-promo-link">
                                <?php esc_html_e( 'Ver ofertas', 'woocomerse_caersport_template' ); ?> →
                            </a>
                        </div>
                    </div>
                    <div class="caer-promo-card caer-promo-card--light">
                        <div class="caer-promo-content">
                            <span class="caer-promo-eyebrow caer-promo-eyebrow--dark"><?php esc_html_e( 'Nuevo ingreso', 'woocomerse_caersport_template' ); ?></span>
                            <h3 class="caer-promo-title caer-promo-title--dark"><?php esc_html_e( 'Sensores & Correas 2025', 'woocomerse_caersport_template' ); ?></h3>
                            <a href="<?php echo esc_url( $shop_url ); ?>" class="caer-promo-link caer-promo-link--dark">
                                <?php esc_html_e( 'Explorar', 'woocomerse_caersport_template' ); ?> →
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
}
add_action( 'best_shop_before_posts_content', 'caer_promo_banner_section', 25 );


// ============================================================
// CONTADOR ESTADÍSTICAS — solo homepage
// ============================================================
function caer_stats_section() {
    if ( ! is_front_page() ) return;
    $product_count  = class_exists( 'WooCommerce' ) ? wp_count_posts( 'product' )->publish : 0;
    $customer_count = '5,000+';
    ?>
    <div class="caer-stats-bar">
        <div class="caer-container">
            <div class="caer-stats-grid">
                <div class="caer-stat-item">
                    <span class="caer-stat-number"><?php echo esc_html( $product_count > 0 ? $product_count . '+' : '500+' ); ?></span>
                    <span class="caer-stat-label"><?php esc_html_e( 'Repuestos disponibles', 'woocomerse_caersport_template' ); ?></span>
                </div>
                <div class="caer-stat-divider"></div>
                <div class="caer-stat-item">
                    <span class="caer-stat-number">+3.000</span>
                    <span class="caer-stat-label"><?php esc_html_e( 'Clientes atendidos', 'woocomerse_caersport_template' ); ?></span>
                </div>
                <div class="caer-stat-divider"></div>
                <div class="caer-stat-item">
                    <span class="caer-stat-number">20+</span>
                    <span class="caer-stat-label"><?php esc_html_e( 'Marcas de confianza', 'woocomerse_caersport_template' ); ?></span>
                </div>
                <div class="caer-stat-divider"></div>
                <div class="caer-stat-item">
                    <span class="caer-stat-number">100%</span>
                    <span class="caer-stat-label"><?php esc_html_e( 'Compatibilidad garantizada', 'woocomerse_caersport_template' ); ?></span>
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'best_shop_before_posts_content', 'caer_stats_section', 35 );
