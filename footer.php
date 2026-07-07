<?php
/**
 * Footer Template
 *
 * @package Sriguna
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$phone     = '0877-1011-1110';
$address   = 'Jl. Komp. Depag No.31, Bambu Apus, Kec. Pamulang, Kota Tangerang Selatan, Banten 15415';
$hours     = sriguna_get( 'sriguna_hours', 'Senin - Sabtu: 09.00 - 18.00' );
$whatsapp  = '6287710111110';

$instagram = sriguna_get( 'sriguna_social_instagram', '#' );
$facebook  = sriguna_get( 'sriguna_social_facebook', '#' );
$tiktok    = sriguna_get( 'sriguna_social_tiktok', '#' );
$youtube   = sriguna_get( 'sriguna_social_youtube', '#' );
?>

<!-- ========== WHATSAPP FLOATING BUTTON ========== -->
<a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>?text=<?php echo rawurlencode( 'Halo Sriguna Computindo, saya tertarik dengan layanan anda.' ); ?>" class="whatsapp-float" id="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat via WhatsApp">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>

<!-- ========== FOOTER ========== -->
<footer class="site-footer" id="kontak" role="contentinfo">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <a href="<?php echo esc_url( home_url( '/#beranda' ) ); ?>" class="footer-logo" aria-label="<?php esc_attr_e( 'Sriguna Computindo', 'sriguna' ); ?>">
                    <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/logosriguna.png' ); ?>" alt="Sriguna Computindo" width="220" height="55">
                </a>
                <p>Penyedia perangkat bekas berkualitas dengan harga terbaik dan pelayanan terpercaya sejak hari pertama.</p>
            </div>

            <!-- Menu Column -->
            <div class="footer-col">
                <h4>Menu</h4>
                <ul>
                    <li><a href="<?php echo esc_url( home_url( '/#beranda' ) ); ?>"><?php esc_html_e( 'Beranda', 'sriguna' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#tentang' ) ); ?>"><?php esc_html_e( 'Tentang kami', 'sriguna' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#layanan' ) ); ?>"><?php esc_html_e( 'Layanan', 'sriguna' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>"><?php esc_html_e( 'Blog', 'sriguna' ); ?></a></li>
                    <li><a href="<?php echo esc_url( home_url( '/#kontak' ) ); ?>"><?php esc_html_e( 'Kontak', 'sriguna' ); ?></a></li>
                </ul>
            </div>

            <!-- Contact Column -->
            <div class="footer-col">
                <h4>Hubungi Kami</h4>
                <ul class="footer-contact">
                    <li>
                        <div class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                        </div>
                        <span><?php echo esc_html( $phone ); ?></span>
                    </li>

                    <li>
                        <div class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        </div>
                        <span><?php echo esc_html( $address ); ?></span>
                    </li>
                    <li>
                        <div class="footer-contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <span><?php echo esc_html( $hours ); ?></span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Sriguna Computindo. Semua Hak Dilindungi.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>



