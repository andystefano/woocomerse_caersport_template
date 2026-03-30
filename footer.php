<?php
/**
 * Footer profesional del tema CaerSport
 * Estructura: newsletter → 4 columnas → métodos de pago → copyright
 */
?>

<!-- ============================================================
     FOOTER
     ============================================================ -->
<footer id="colophon" class="caer-footer" itemscope itemtype="https://schema.org/WPFooter">

    <!-- SECCIÓN NEWSLETTER -->
    <div class="caer-footer-newsletter">
        <div class="caer-container">
            <div class="caer-newsletter-inner">
                <div class="caer-newsletter-text">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" width="36" height="36" class="caer-newsletter-icon"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                    <div>
                        <h3><?php esc_html_e( 'Suscríbete a nuestro boletín', 'woocomerse_caersport_template' ); ?></h3>
                        <p><?php esc_html_e( 'Recibe ofertas en repuestos y novedades de autopartes en tu correo.', 'woocomerse_caersport_template' ); ?></p>
                    </div>
                </div>
                <?php
                $newsletter_shortcode = best_shop_get_setting( 'subscription_shortcode' );
                if ( $newsletter_shortcode ) :
                    echo do_shortcode( wp_kses_post( $newsletter_shortcode ) );
                else :
                ?>
                <form class="caer-newsletter-form" onsubmit="return false;" aria-label="<?php esc_attr_e( 'Formulario de suscripción', 'woocomerse_caersport_template' ); ?>">
                    <div class="caer-newsletter-field">
                        <input type="email"
                               placeholder="<?php esc_attr_e( 'Tu dirección de correo...', 'woocomerse_caersport_template' ); ?>"
                               class="caer-newsletter-input"
                               aria-label="<?php esc_attr_e( 'Email', 'woocomerse_caersport_template' ); ?>">
                        <button type="submit" class="caer-newsletter-btn">
                            <?php esc_html_e( 'Suscribirme', 'woocomerse_caersport_template' ); ?>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" width="14" height="14"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        </button>
                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- WIDGETS DEL FOOTER -->
    <div class="caer-footer-widgets">
        <div class="caer-container">
            <div class="caer-footer-grid">

                <!-- COLUMNA 1: MARCA -->
                <div class="caer-footer-col caer-footer-brand-col">
                    <div class="caer-footer-logo">
                        <?php if ( has_custom_logo() ) :
                            the_custom_logo();
                        else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assests/logo.png' ); ?>"
                                 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
                                 class="caer-footer-logo-img">
                        </a>
                        <?php endif; ?>
                    </div>
                    <p class="caer-footer-about">
                        <?php echo esc_html( get_bloginfo( 'description' ) ?: __( 'Especialistas en repuestos y autopartes para vehículos. Bujías, filtros, correas, sensores, bombas y más. Calidad garantizada para tu auto.', 'woocomerse_caersport_template' ) ); ?>
                    </p>
                    <!-- Redes sociales -->
                    <?php $social_links = best_shop_get_setting( 'social_links' ); ?>
                    <div class="caer-footer-social">
                        <?php if ( function_exists( 'best_shop_social_links' ) ) :
                            best_shop_social_links( false );
                        else : ?>
                        <a href="#" class="caer-social-link" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                        </a>
                        <a href="#" class="caer-social-link" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                        </a>
                        <a href="#" class="caer-social-link" aria-label="Twitter / X">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="#" class="caer-social-link" aria-label="YouTube">
                            <svg viewBox="0 0 24 24" fill="currentColor" width="18" height="18"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-1.97C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 0 0 1.46 6.42 29 29 0 0 0 1 12a29 29 0 0 0 .46 5.58A2.78 2.78 0 0 0 3.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-1.95A29 29 0 0 0 23 12a29 29 0 0 0-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02" fill="white"/></svg>
                        </a>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- COLUMNA 2: ENLACES RÁPIDOS -->
                <div class="caer-footer-col">
                    <h4 class="caer-footer-heading"><?php esc_html_e( 'Enlaces Rápidos', 'woocomerse_caersport_template' ); ?></h4>
                    <ul class="caer-footer-links">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Inicio', 'woocomerse_caersport_template' ); ?></a></li>
                        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                        <li><a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"><?php esc_html_e( 'Tienda', 'woocomerse_caersport_template' ); ?></a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo esc_url( home_url( '/sobre-nosotros/' ) ); ?>"><?php esc_html_e( 'Sobre Nosotros', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/preguntas-frecuentes/' ) ); ?>"><?php esc_html_e( 'Preguntas Frecuentes', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>"><?php esc_html_e( 'Contacto', 'woocomerse_caersport_template' ); ?></a></li>
                    </ul>
                    <?php if ( is_active_sidebar( 'advanced-footer-widget-1' ) ) : ?>
                    <div class="caer-footer-widget"><?php dynamic_sidebar( 'advanced-footer-widget-1' ); ?></div>
                    <?php endif; ?>
                </div>

                <!-- COLUMNA 3: ATENCIÓN AL CLIENTE -->
                <div class="caer-footer-col">
                    <h4 class="caer-footer-heading"><?php esc_html_e( 'Atención al Cliente', 'woocomerse_caersport_template' ); ?></h4>
                    <ul class="caer-footer-links">
                        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
                        <li><a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) ); ?>"><?php esc_html_e( 'Mi Cuenta', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( wc_get_page_permalink( 'myaccount' ) . 'orders/' ); ?>"><?php esc_html_e( 'Rastrear Pedido', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( wc_get_page_permalink( 'cart' ) ); ?>"><?php esc_html_e( 'Carrito de Compras', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( wc_get_page_permalink( 'checkout' ) ); ?>"><?php esc_html_e( 'Pago y Envío', 'woocomerse_caersport_template' ); ?></a></li>
                        <?php endif; ?>
                        <li><a href="<?php echo esc_url( home_url( '/politica-de-devoluciones/' ) ); ?>"><?php esc_html_e( 'Política de Devoluciones', 'woocomerse_caersport_template' ); ?></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/privacidad/' ) ); ?>"><?php esc_html_e( 'Política de Privacidad', 'woocomerse_caersport_template' ); ?></a></li>
                    </ul>
                    <?php if ( is_active_sidebar( 'advanced-footer-widget-2' ) ) : ?>
                    <div class="caer-footer-widget"><?php dynamic_sidebar( 'advanced-footer-widget-2' ); ?></div>
                    <?php endif; ?>
                </div>

                <!-- COLUMNA 4: CONTACTO -->
                <div class="caer-footer-col">
                    <h4 class="caer-footer-heading"><?php esc_html_e( 'Contáctanos', 'woocomerse_caersport_template' ); ?></h4>
                    <ul class="caer-footer-contact">
                        <?php if ( best_shop_get_setting( 'address' ) ) : ?>
                        <li class="caer-contact-item">
                            <svg class="caer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                            <span><?php echo esc_html( best_shop_get_setting( 'address' ) ); ?></span>
                        </li>
                        <?php endif; ?>
                        <?php if ( best_shop_get_setting( 'phone_number' ) ) : ?>
                        <li class="caer-contact-item">
                            <svg class="caer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.41 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6.29 6.29l.96-.96a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                            <a href="tel:<?php echo esc_attr( best_shop_get_setting( 'phone_number' ) ); ?>">
                                <?php echo esc_html( best_shop_get_setting( 'phone_number' ) ); ?>
                            </a>
                        </li>
                        <?php endif; ?>
                        <?php if ( best_shop_get_setting( 'mail_description' ) ) : ?>
                        <li class="caer-contact-item">
                            <svg class="caer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <a href="mailto:<?php echo esc_attr( best_shop_get_setting( 'mail_description' ) ); ?>">
                                <?php echo esc_html( best_shop_get_setting( 'mail_description' ) ); ?>
                            </a>
                        </li>
                        <?php else : ?>
                        <li class="caer-contact-item">
                            <svg class="caer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                            <a href="mailto:info@caersport.com">info@caersport.com</a>
                        </li>
                        <?php endif; ?>
                        <li class="caer-contact-item">
                            <svg class="caer-contact-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" width="18" height="18"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <span><?php esc_html_e( 'Lun–Sáb: 9:00am – 6:00pm', 'woocomerse_caersport_template' ); ?></span>
                        </li>
                    </ul>
                    <?php if ( is_active_sidebar( 'advanced-footer-widget-3' ) ) : ?>
                    <div class="caer-footer-widget"><?php dynamic_sidebar( 'advanced-footer-widget-3' ); ?></div>
                    <?php endif; ?>
                </div>

            </div><!-- .caer-footer-grid -->
        </div><!-- .caer-container -->
    </div><!-- .caer-footer-widgets -->

    <!-- MÉTODOS DE PAGO -->
    <div class="caer-footer-payment">
        <div class="caer-container">
            <div class="caer-payment-inner">
                <span class="caer-payment-label"><?php esc_html_e( 'Métodos de pago seguros:', 'woocomerse_caersport_template' ); ?></span>
                <div class="caer-payment-icons">
                    <!-- Visa -->
                    <span class="caer-payment-icon" title="Visa">
                        <svg viewBox="0 0 750 471" xmlns="http://www.w3.org/2000/svg" width="46" height="29"><rect width="750" height="471" rx="40" fill="#fff"/><path d="M278 334l33-195h53l-33 195zM524 143c-10-4-27-9-47-9-52 0-89 26-89 64-1 28 26 43 46 52 20 10 27 16 27 25-1 13-16 20-31 20-21 0-32-3-49-10l-7-3-7 42c12 5 34 10 57 10 56 0 92-26 93-68 0-22-14-39-45-53-19-9-30-15-30-24 0-8 10-17 31-17 18 0 31 4 41 8l5 2 7-40zM636 139h-40c-13 0-22 4-27 16l-80 179h56l11-30h68l6 30h49l-43-195zm-66 122l21-57 3-8 2 7 11 58h-37zM222 139l-51 133-6-27c-10-31-40-65-73-82l47 171h57l85-195h-59z" fill="#1A1F71"/><path d="M131 139H45l-1 4c67 16 111 55 130 101l-18-92c-3-11-12-13-25-13z" fill="#F9A533"/></svg>
                    </span>
                    <!-- Mastercard -->
                    <span class="caer-payment-icon" title="Mastercard">
                        <svg viewBox="0 0 152.407 108" xmlns="http://www.w3.org/2000/svg" width="46" height="29"><rect width="152.407" height="108" rx="10" fill="#fff"/><circle cx="60.735" cy="54" r="35" fill="#EB001B"/><circle cx="91.672" cy="54" r="35" fill="#F79E1B"/><path d="M76.204 26.39a35 35 0 0 1 0 55.22A35 35 0 0 1 76.204 26.39z" fill="#FF5F00"/></svg>
                    </span>
                    <!-- Amex -->
                    <span class="caer-payment-icon" title="American Express">
                        <svg viewBox="0 0 750 471" xmlns="http://www.w3.org/2000/svg" width="46" height="29"><rect width="750" height="471" rx="40" fill="#2557D6"/><path d="M0 316V155l45-1 14 36 14-36h416v16s11-16 36-16h56l18 35 19-35h47v5c8-3 18-5 29-5h97v161h-96c-11 0-22-3-29-6v6h-71l-11-27h-27l-11 27h-53s-3-1-5-3v3H242l-5-14h-27l-5 14H155v-5c-7 4-19 5-30 5H0zm99-110l-37 89h25l7-17h37l7 17h26l-37-89H99zm10 26l12 30H97l12-30zm125-26v89h24v-57l22 57h20l22-57v57h24v-89h-34l-22 55-22-55h-34zm151 0v89h24v-37h28c22 0 35-11 35-27 0-17-13-25-36-25h-51zm24 20h24c8 0 13 3 13 7s-4 7-12 7h-25v-14zm97 46c0 13 10 23 24 23 9 0 15-4 19-8v7h22v-46c0-21-13-34-36-34-17 0-28 7-32 19l22 5c2-7 5-9 12-9 8 0 12 4 12 12v2h-14c-21 0-29 9-29 29zm24-13h19v3c0 10-4 16-11 16-6 0-8-4-8-9s3-10 0-10zm72-53v89h65v-20h-41v-17h40v-20h-40v-12h41v-20h-65zm-400 0v89h25v-37h28c22 0 35-11 35-27 0-17-13-25-36-25h-52zm24 20h24c8 0 13 3 13 7s-4 7-12 7h-25v-14zm-3-20h66v20h-42v12h40v20h-40v17h42v20h-66v-89z" fill="#fff"/></svg>
                    </span>
                    <!-- PayPal -->
                    <span class="caer-payment-icon" title="PayPal">
                        <svg viewBox="0 0 750 471" xmlns="http://www.w3.org/2000/svg" width="46" height="29"><rect width="750" height="471" rx="40" fill="#fff"/><path d="M532 171c-5-28-27-40-55-40H361l-56 256h55l14-65h41c64 0 101-35 113-96l4-18c3-14 3-26 0-37zm-54 36c-8 38-34 57-73 57h-32l21-100h34c37 0 54 13 50 43z" fill="#009EE3"/><path d="M223 171c-5-28-27-40-55-40H52L-4 387h55l14-65h41c64 0 101-35 113-96l4-18c3-14 3-26 0-37zm-54 36c-8 38-34 57-73 57H64l21-100h34c37 0 54 13 50 43z" fill="#113984"/><path d="M373 388l-8 33h-56l-1-4 68-246h55l-58 217z" fill="#009EE3"/></svg>
                    </span>
                    <!-- Stripe -->
                    <span class="caer-payment-icon" title="Stripe">
                        <svg viewBox="0 0 468 222" xmlns="http://www.w3.org/2000/svg" width="46" height="29"><rect width="468" height="222" rx="15" fill="#635BFF"/><path d="M214 110c0-34-17-51-51-51-35 0-55 19-55 51s20 51 55 51c34 0 51-17 51-51zm-26 0c0 19-8 30-25 30s-25-11-25-30 8-30 25-30 25 11 25 30zm100 51h26V83h-26v5c-5-4-13-7-23-7-28 0-44 18-44 50s16 50 44 50c10 0 18-3 23-7v7zm0-28c-4 5-10 8-18 8-16 0-24-12-24-31s8-31 24-31c8 0 14 3 18 8v46zm57-15c0 11 4 15 16 15h10v22h-16c-22 0-36-13-36-37V89h-15V68h15V44h26v24h26v21h-26v49zm63-99h-26v21h26v-21zm0 42h-26v78h26V61z" fill="#fff"/></svg>
                    </span>
                    <!-- Transferencia -->
                    <span class="caer-payment-icon caer-payment-text" title="Transferencia Bancaria">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="1.5" width="20" height="20"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- BARRA INFERIOR / COPYRIGHT -->
    <div class="caer-footer-bottom">
        <div class="caer-container">
            <div class="caer-footer-bottom-inner">
                <p class="caer-copyright">
                    <?php
                    $copyright = best_shop_get_setting( 'footer_copyright' );
                    if ( empty( $copyright ) ) {
                        /* translators: %s: year */
                        $copyright = sprintf( __( '&copy; %s CaerSport. Todos los derechos reservados.', 'woocomerse_caersport_template' ), date( 'Y' ) );
                    }
                    echo wp_kses_post( $copyright );
                    ?>
                </p>
                <?php if ( has_nav_menu( 'footer-menu' ) ) : ?>
                <nav class="caer-footer-nav" aria-label="<?php esc_attr_e( 'Menú del pie de página', 'woocomerse_caersport_template' ); ?>">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'caer-footer-nav-list',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    ) );
                    ?>
                </nav>
                <?php endif; ?>
            </div>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
