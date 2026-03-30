<?php
/**
 * Header del tema CaerSport
 * Estructura: DOCTYPE → head → barra de anuncio → header principal → barra de nav
 */
do_action( 'best_shop_doctype' );
?>
<head itemscope itemtype="https://schema.org/WebSite">
<?php
do_action( 'best_shop_before_wp_head' );
wp_head();
?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
<?php wp_body_open(); ?>

<?php do_action( 'best_shop_before_header' ); ?>

<!-- ============================================================
     BARRA DE ANUNCIO
     ============================================================ -->
<div class="caer-announcement-bar">
    <div class="caer-announcement-inner">
        <span class="caer-announcement-text">
            <svg class="caer-ann-icon" viewBox="0 0 24 24" fill="currentColor" width="16" height="16"><path d="M20 7h-4V5a3 3 0 0 0-6 0v2H6a1 1 0 0 0-1 1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a1 1 0 0 0-1-1zm-8-2a1 1 0 0 1 2 0v2h-2V5zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V9h2v1a1 1 0 0 0 2 0V9h2v1a1 1 0 0 0 2 0V9h2v10z"/></svg>
            <?php esc_html_e( '¡OFERTA! Hasta 50% de descuento en repuestos seleccionados', 'woocomerse_caersport_template' ); ?>
        </span>
        <span class="caer-announcement-sep">|</span>
        <span class="caer-announcement-text">
            <svg class="caer-ann-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="16" height="16"><rect x="1" y="3" width="15" height="13" rx="1"/><path d="M16 8h4l3 5v3h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg>
            <?php esc_html_e( 'Despacho a todo Chile — Envío gratis sobre $50.000', 'woocomerse_caersport_template' ); ?>
        </span>
    </div>
</div>

<!-- ============================================================
     HEADER PRINCIPAL
     ============================================================ -->
<header id="masthead" class="caer-header" itemscope itemtype="https://schema.org/WPHeader">

    <div class="caer-header-main">
        <div class="caer-container">

            <!-- LOGO -->
            <div class="caer-brand">
                <?php if ( has_custom_logo() ) :
                    the_custom_logo();
                else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="caer-logo-link" rel="home">
                    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assests/logo.png' ); ?>"
                         alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                         class="caer-logo-img">
                </a>
                <?php endif; ?>
            </div>

            <!-- BUSCADOR CON DROPDOWN DE CATEGORÍAS -->
            <div class="caer-search-wrap">
                <form role="search" method="get" class="caer-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <?php if ( class_exists( 'WooCommerce' ) ) :
                        $product_cats = get_terms( array(
                            'taxonomy'   => 'product_cat',
                            'orderby'    => 'name',
                            'order'      => 'ASC',
                            'hide_empty' => true,
                        ) );
                    ?>
                    <div class="caer-search-cat-wrap">
                        <select name="product_cat" class="caer-search-cat" aria-label="<?php esc_attr_e( 'Categoría', 'woocomerse_caersport_template' ); ?>">
                            <option value=""><?php esc_html_e( 'Todas las Categorías', 'woocomerse_caersport_template' ); ?></option>
                            <?php if ( ! empty( $product_cats ) && ! is_wp_error( $product_cats ) ) :
                                foreach ( $product_cats as $cat ) : ?>
                            <option value="<?php echo esc_attr( $cat->slug ); ?>">
                                <?php echo esc_html( $cat->name ); ?>
                            </option>
                            <?php endforeach; endif; ?>
                        </select>
                        <svg class="caer-cat-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="12" height="12"><path d="M6 9l6 6 6-6"/></svg>
                    </div>
                    <input type="hidden" name="post_type" value="product">
                    <?php endif; ?>
                    <input type="search" name="s"
                           class="caer-search-input"
                           placeholder="<?php esc_attr_e( '¿Qué estás buscando?', 'woocomerse_caersport_template' ); ?>"
                           value="<?php echo esc_attr( get_search_query() ); ?>"
                           autocomplete="off">
                    <button type="submit" class="caer-search-btn" aria-label="<?php esc_attr_e( 'Buscar', 'woocomerse_caersport_template' ); ?>">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="18" height="18"><circle cx="11" cy="11" r="8"/><path d="M21 21l-4.35-4.35"/></svg>
                    </button>
                </form>
            </div>

            <!-- ICONOS DE UTILIDAD -->
            <div class="caer-header-icons">

                <!-- Rastrear pedido -->
                <a href="<?php echo esc_url( class_exists( 'WooCommerce' ) ? wc_get_page_permalink( 'myaccount' ) . 'orders/' : home_url( '/mi-cuenta/pedidos/' ) ); ?>"
                   class="caer-icon-btn caer-track-order"
                   title="<?php esc_attr_e( 'Rastrear Pedido', 'woocomerse_caersport_template' ); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="22" height="22"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                    <span class="caer-icon-label"><?php esc_html_e( 'Rastrear', 'woocomerse_caersport_template' ); ?></span>
                </a>

                <!-- Wishlist / Lista de deseos -->
                <?php
                $wishlist_url = class_exists( 'YITH_WCWL' )
                    ? esc_url( YITH_WCWL()->get_wishlist_url() )
                    : esc_url( home_url( '/lista-de-deseos/' ) );
                $wishlist_count = class_exists( 'YITH_WCWL' ) ? YITH_WCWL()->count_products() : 0;
                ?>
                <a href="<?php echo esc_url( $wishlist_url ); ?>"
                   class="caer-icon-btn caer-wishlist"
                   title="<?php esc_attr_e( 'Lista de Deseos', 'woocomerse_caersport_template' ); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="22" height="22"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    <?php if ( $wishlist_count > 0 ) : ?>
                    <span class="caer-icon-badge"><?php echo esc_html( $wishlist_count ); ?></span>
                    <?php endif; ?>
                </a>

                <!-- Carrito -->
                <?php if ( class_exists( 'WooCommerce' ) ) :
                    $cart_count = WC()->cart ? WC()->cart->get_cart_contents_count() : 0;
                    $cart_total = WC()->cart ? WC()->cart->get_cart_subtotal() : '';
                ?>
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>"
                   class="caer-icon-btn caer-cart"
                   title="<?php esc_attr_e( 'Carrito de compras', 'woocomerse_caersport_template' ); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="22" height="22"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 0 1-8 0"/></svg>
                    <?php if ( $cart_count > 0 ) : ?>
                    <span class="caer-icon-badge"><?php echo esc_html( $cart_count ); ?></span>
                    <?php endif; ?>
                    <span class="caer-cart-total"><?php echo wp_kses_post( $cart_total ); ?></span>
                </a>
                <?php endif; ?>

                <!-- Mi cuenta -->
                <a href="<?php echo esc_url( class_exists( 'WooCommerce' ) ? wc_get_page_permalink( 'myaccount' ) : wp_login_url() ); ?>"
                   class="caer-icon-btn caer-account"
                   title="<?php esc_attr_e( 'Mi Cuenta', 'woocomerse_caersport_template' ); ?>">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="22" height="22"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                </a>

            </div><!-- .caer-header-icons -->

            <!-- HAMBURGER MÓVIL -->
            <button class="caer-mobile-toggle" aria-label="<?php esc_attr_e( 'Menú', 'woocomerse_caersport_template' ); ?>">
                <span></span><span></span><span></span>
            </button>

        </div><!-- .caer-container -->
    </div><!-- .caer-header-main -->

    <!-- ============================================================
         BARRA DE NAVEGACIÓN
         ============================================================ -->
    <div class="caer-nav-bar">
        <div class="caer-container">

            <!-- DROPDOWN DEPARTAMENTOS -->
            <div class="caer-departments">
                <button class="caer-departments-btn" aria-haspopup="true" aria-expanded="false">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="18" height="18"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
                    <?php esc_html_e( 'Departamentos', 'woocomerse_caersport_template' ); ?>
                    <svg class="caer-dep-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="12" height="12"><path d="M6 9l6 6 6-6"/></svg>
                </button>
                <?php if ( class_exists( 'WooCommerce' ) ) :
                    $dep_cats = get_terms( array(
                        'taxonomy'   => 'product_cat',
                        'orderby'    => 'name',
                        'order'      => 'ASC',
                        'hide_empty' => true,
                        'parent'     => 0,
                    ) );
                    if ( ! empty( $dep_cats ) && ! is_wp_error( $dep_cats ) ) : ?>
                <ul class="caer-departments-dropdown" role="menu">
                    <?php foreach ( $dep_cats as $dep ) :
                        $children = get_terms( array(
                            'taxonomy'   => 'product_cat',
                            'parent'     => $dep->term_id,
                            'hide_empty' => true,
                        ) );
                    ?>
                    <li class="<?php echo ! empty( $children ) && ! is_wp_error( $children ) ? 'has-children' : ''; ?>" role="none">
                        <a href="<?php echo esc_url( get_term_link( $dep ) ); ?>" role="menuitem">
                            <?php echo esc_html( $dep->name ); ?>
                            <?php if ( ! empty( $children ) && ! is_wp_error( $children ) ) : ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" width="12" height="12"><path d="M9 18l6-6-6-6"/></svg>
                            <?php endif; ?>
                        </a>
                        <?php if ( ! empty( $children ) && ! is_wp_error( $children ) ) : ?>
                        <ul class="caer-dep-submenu">
                            <?php foreach ( $children as $child ) : ?>
                            <li><a href="<?php echo esc_url( get_term_link( $child ) ); ?>"><?php echo esc_html( $child->name ); ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <?php endif; endif; ?>
            </div><!-- .caer-departments -->

            <!-- MENÚ PRINCIPAL -->
            <nav class="caer-primary-nav" aria-label="<?php esc_attr_e( 'Navegación principal', 'woocomerse_caersport_template' ); ?>">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'caer-nav-menu',
                    'container'      => false,
                    'depth'          => 3,
                    'fallback_cb'    => function() {
                        echo '<ul class="caer-nav-menu">';
                        echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Inicio', 'woocomerse_caersport_template' ) . '</a></li>';
                        if ( class_exists( 'WooCommerce' ) ) {
                            echo '<li><a href="' . esc_url( wc_get_page_permalink( 'shop' ) ) . '">' . esc_html__( 'Tienda', 'woocomerse_caersport_template' ) . '</a></li>';
                        }
                        echo '<li><a href="' . esc_url( home_url( '/blog/' ) ) . '">' . esc_html__( 'Blog', 'woocomerse_caersport_template' ) . '</a></li>';
                        echo '<li><a href="' . esc_url( home_url( '/contacto/' ) ) . '">' . esc_html__( 'Contacto', 'woocomerse_caersport_template' ) . '</a></li>';
                        echo '</ul>';
                    },
                ) );
                ?>
            </nav>

            <!-- MENÚ MÓVIL (oculto en desktop) -->
            <div class="caer-mobile-nav" id="caer-mobile-nav" aria-hidden="true">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'caer-mobile-menu',
                    'container'      => false,
                    'depth'          => 3,
                ) );
                ?>
            </div>

        </div><!-- .caer-container -->
    </div><!-- .caer-nav-bar -->

</header><!-- #masthead -->

<?php do_action( 'best_shop_before_posts_content' ); ?>

<?php if ( best_shop_get_setting( 'preloader_enabled' ) ) : ?>
<div class="preloader-center">
    <div class="preloader-ring"></div>
    <span><?php esc_html_e( 'Cargando...', 'woocomerse_caersport_template' ); ?></span>
</div>
<?php endif; ?>

<script>
(function() {
    // Toggle menú móvil
    var toggle = document.querySelector('.caer-mobile-toggle');
    var mobileNav = document.getElementById('caer-mobile-nav');
    if (toggle && mobileNav) {
        toggle.addEventListener('click', function() {
            var isOpen = mobileNav.classList.toggle('caer-mobile-nav--open');
            toggle.classList.toggle('is-active', isOpen);
            mobileNav.setAttribute('aria-hidden', !isOpen);
        });
    }

    // Toggle departamentos
    var depBtn = document.querySelector('.caer-departments-btn');
    var depDrop = document.querySelector('.caer-departments-dropdown');
    if (depBtn && depDrop) {
        depBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            var isOpen = depDrop.classList.toggle('caer-dep--open');
            depBtn.setAttribute('aria-expanded', isOpen);
        });
        document.addEventListener('click', function() {
            depDrop.classList.remove('caer-dep--open');
            depBtn.setAttribute('aria-expanded', 'false');
        });
    }
})();
</script>
