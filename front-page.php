<?php
/**
 * Front Page Template (Landing Page)
 *
 * @package Sriguna
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Get customizer values
$stat_units     = sriguna_get( 'sriguna_stat_units', '2000+' );
$stat_customers = sriguna_get( 'sriguna_stat_customers', '1500+' );
$stat_rating    = sriguna_get( 'sriguna_stat_rating', '4.9/5' );
$stat_safe      = sriguna_get( 'sriguna_stat_safe', '100%' );
$whatsapp       = '6287710111110';
?>

<main id="main-content" role="main">

<!-- ========== HERO SECTION ========== -->
<section class="hero" id="beranda" aria-label="Hero">
    <div class="container">
        <div class="hero-content">
            <!-- Badge -->
            <div class="hero-badge">
                <span>Mudah &bull; Aman &bull; Terpercaya</span>
            </div>

            <!-- Heading -->
            <h1>
                Spesialis Borongan Komputer, Laptop<br>
                & <span class="highlight">Alat Kantor Bekas</span>
            </h1>

            <!-- Description -->
            <p class="hero-desc">
                Kami menerima komputer, laptop, serta perlengkapan IT dan alat kantor bekas dari perusahaan, instansi, sekolah,dalam partai besar maupun lelang.
            </p>

            <!-- Trust Features -->
            <div class="hero-features">
                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="hero-feature-text">
                        <h4>Aman & Legal</h4>
                        <p>Transaksi dijamin transparan dan amanah</p>
                    </div>
                </div>
                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <div class="hero-feature-text">
                        <h4>Harga Kompetitif</h4>
                        <p>Penawaran terbaik sesuai kondisi barang</p>
                    </div>
                </div>
                <div class="hero-feature">
                    <div class="hero-feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                    </div>
                    <div class="hero-feature-text">
                        <h4>Cepat & Profesional</h4>
                        <p>Survey cepat dan pembayaran langsung cair</p>
                    </div>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="hero-buttons">
                <a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>?text=<?php echo rawurlencode( 'Halo Sriguna Computindo, saya tertarik dengan layanan anda.' ); ?>" class="btn btn-accent" id="hero-btn-products" target="_blank" rel="noopener">
                    Hubungi Kami
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="hero-image">
            <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/hero-computer.png' ); ?>" alt="Komputer dan Laptop Bekas Berkualitas - Sriguna Computindo" width="600" height="450" loading="eager">
            <div class="hero-badge-check">
                <div class="check-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <span>100% Unit<br>Dicek & Diuji</span>
            </div>
        </div>
    </div>
</section>

<!-- ========== STATS BAR ========== -->
<section class="stats-bar" aria-label="Statistik">
    <div class="container">
        <div class="stats-container reveal">
            <p class="stats-label">Dipercaya oleh ribuan pelanggan</p>
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    </div>
                    <div class="stat-number" data-count="2000"><?php echo esc_html( $stat_units ); ?></div>
                    <div class="stat-text">Unit Terjual</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <div class="stat-number" data-count="1500"><?php echo esc_html( $stat_customers ); ?></div>
                    <div class="stat-text">Pelanggan Puas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                    </div>
                    <div class="stat-number"><?php echo esc_html( $stat_rating ); ?></div>
                    <div class="stat-text">Rating Google</div>
                </div>
                <div class="stat-item">
                    <div class="stat-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <div class="stat-number"><?php echo esc_html( $stat_safe ); ?></div>
                    <div class="stat-text">Aman & Terpercaya</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== PRODUK KAMI ========== -->
<section class="products" id="tentang" aria-label="Tentang Kami">
    <div class="container">
        <div class="products-header reveal">
            <div class="products-header-left">
                <span class="section-label">Tentang Kami</span>
                <h2 class="section-title">
                    Apa Saja yang Kami<br>
                    Beli & <span class="text-highlight">Terima?</span>
                </h2>
            </div>
            <div class="products-header-right">
                <p>Kami menerima berbagai macam perangkat IT dan perlengkapan alat kantor bekas dari instansi, perusahaan, maupun perorangan.</p>
            </div>
        </div>

        <div class="products-grid">
            <!-- Laptop Bekas -->
            <article class="product-card reveal delay-1" id="product-laptop">
                <div class="product-card-image">
                    <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/laptop-category.png' ); ?>" alt="Laptop Bekas Berkualitas" width="300" height="200" loading="lazy">
                </div>
                <div class="product-card-content">
                    <h3>Laptop & Notebook</h3>
                    <p>Menerima borongan laptop kantor, laptop perusahaan, dan laptop project dalam berbagai kondisi.</p>
                </div>
            </article>

            <!-- PC Komputer -->
            <article class="product-card reveal delay-2" id="product-pc">
                <div class="product-card-image">
                    <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/pc-category.png' ); ?>" alt="PC Komputer Bekas" width="300" height="200" loading="lazy">
                </div>
                <div class="product-card-content">
                    <h3>Komputer & Desktop</h3>
                    <p>Kami membeli PC rakitan, CPU kantor, workstation, dan komputer lelang eks-pemakaian.</p>
                </div>
            </article>

            <!-- Monitor Bekas -->
            <article class="product-card reveal delay-3" id="product-monitor">
                <div class="product-card-image">
                    <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/monitor-category.png' ); ?>" alt="Monitor Bekas Berkualitas" width="300" height="200" loading="lazy">
                </div>
                <div class="product-card-content">
                    <h3>Monitor & Display</h3>
                    <p>Menerima borongan monitor LED, IPS, ultrawide, dan berbagai jenis layar komputer lainnya.</p>
                </div>
            </article>

            <!-- Aksesoris -->
            <article class="product-card reveal delay-4" id="product-accessories">
                <div class="product-card-image">
                    <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/accessories-category.png' ); ?>" alt="Aksesoris Komputer" width="300" height="200" loading="lazy">
                </div>
                <div class="product-card-content">
                    <h3>Alat Kantor & IT Lainnya</h3>
                    <p>Kami juga memborong printer, switch, server, serta perlengkapan alat kantor bekas lainnya.</p>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- ========== JUAL KE KAMI ========== -->
<section class="sell-section" id="jual-ke-kami" aria-label="Jual Perangkat Anda">
    <div class="container">
        <div class="sell-banner reveal">
            <div class="sell-content">
                <span class="section-label">Jual Perangkat Lama Anda</span>
                <h2>
                    Jual Ke Kami,<br>
                    Proses <span class="highlight">Mudah & Cepat</span>
                </h2>
                <p>Dapatkan penawaran terbaik untuk perangkat lama Anda dalam hitungan menit. Kami menerima berbagai merk dan kondisi.</p>

                <div class="sell-benefits">
                    <div class="sell-benefit">
                        <div class="sell-benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        </div>
                        <span>Penilaian Cepat<br><small style="opacity:0.6">Tanpa ribet</small></span>
                    </div>
                    <div class="sell-benefit">
                        <div class="sell-benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                        </div>
                        <span>Harga Terbaik<br><small style="opacity:0.6">Sesuai kondisi</small></span>
                    </div>
                    <div class="sell-benefit">
                        <div class="sell-benefit-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        </div>
                        <span>Pembayaran Cepat<br><small style="opacity:0.6">Langsung transfer</small></span>
                    </div>
                </div>

                <a href="https://wa.me/<?php echo esc_attr( $whatsapp ); ?>?text=<?php echo rawurlencode( 'Halo Sriguna Computindo, saya tertarik dengan layanan anda.' ); ?>" class="btn btn-accent" id="btn-sell-now" target="_blank" rel="noopener">
                    Jual Ke Kami Sekarang
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
                </a>
            </div>

            <div class="sell-image">
                <img src="<?php echo esc_url( SRIGUNA_URI . '/assets/images/hero-computer.png' ); ?>" alt="Tukar Tambah Komputer dan Laptop" width="500" height="375" loading="lazy">
                <div class="sell-badge">
                    <div class="sell-badge-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="17 1 21 5 17 9"></polyline><path d="M3 11V9a4 4 0 0 1 4-4h14"></path><polyline points="7 23 3 19 7 15"></polyline><path d="M21 13v2a4 4 0 0 1-4 4H3"></path></svg>
                    </div>
                    <div class="sell-badge-text">
                        <h4>Tukar Tambah</h4>
                        <p>Lebih Untung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== CARA KERJA ========== -->
<section class="how-it-works" id="cara-kerja" aria-label="Cara Kerja">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Cara Kerja</span>
            <h2 class="section-title">
                Mudah dalam <span class="text-highlight">4 Langkah</span>
            </h2>
        </div>

        <div class="steps-grid">
            <div class="step-card reveal delay-1" id="step-1">
                <span class="step-number">1</span>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                <h3>Pilih / Konsultasi</h3>
                <p>Pilih produk atau konsultasikan kebutuhan Anda dengan tim kami.</p>
            </div>

            <div class="step-card reveal delay-2" id="step-2">
                <span class="step-number">2</span>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h3>Cek & Pastikan</h3>
                <p>Kami cek ketersediaan dan kirim detail unit secara lengkap.</p>
            </div>

            <div class="step-card reveal delay-3" id="step-3">
                <span class="step-number">3</span>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                </div>
                <h3>Pembayaran</h3>
                <p>Lakukan pembayaran dengan cara aman dan mudah.</p>
            </div>

            <div class="step-card reveal delay-4" id="step-4">
                <span class="step-number">4</span>
                <div class="step-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                </div>
                <h3>Pengiriman</h3>
                <p>Unit dikemas aman dan dikirim ke seluruh Indonesia.</p>
            </div>
        </div>
    </div>
</section>

<!-- ========== TESTIMONI ========== -->
<section class="testimonials" id="testimoni" aria-label="Testimoni Pelanggan">
    <div class="container">
        <div class="section-header">
            <span class="section-label">Testimoni</span>
            <h2 class="section-title">
                Apa Kata <span class="text-highlight">Pelanggan</span> Kami
            </h2>
        </div>

        <div class="testimonial-slider reveal" id="testimonial-slider">
            <div class="testimonial-track" id="testimonial-track">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-card-inner">
                        <div class="testimonial-stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <blockquote>"Jual puluhan PC bekas kantor ke Sriguna prosesnya sangat mudah. Penilaian harganya fair dan pembayarannya langsung lunas. Sangat profesional!"</blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">RP</div>
                            <div class="testimonial-author-info">
                                <h4>Rizky Pratama</h4>
                                <p>Manajer IT</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-card-inner">
                        <div class="testimonial-stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <blockquote>"Proses jual laptop lama saya cepat dan harganya sesuai. Transfer langsung masuk, terpercaya! Sangat direkomendasikan."</blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">DL</div>
                            <div class="testimonial-author-info">
                                <h4>Dewi Lestari</h4>
                                <p>Karyawan Swasta</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-card-inner">
                        <div class="testimonial-stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <blockquote>"Bongkaran server dan perangkat IT bekas dari pabrik kami diborong habis oleh Sriguna. Pelayanan cepat, tidak bertele-tele, dan harganya cocok."</blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">FN</div>
                            <div class="testimonial-author-info">
                                <h4>Fajar Nugroho</h4>
                                <p>Freelancer</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-card-inner">
                        <div class="testimonial-stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <blockquote>"Jual laptop dan monitor bekas yang menumpuk ternyata gampang banget di Sriguna. Admin ramah, penawarannya juga lebih tinggi dibanding tempat lain."</blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">AS</div>
                            <div class="testimonial-author-info">
                                <h4>Andi Setiawan</h4>
                                <p>Desainer Grafis</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 5 -->
                <div class="testimonial-card">
                    <div class="testimonial-card-inner">
                        <div class="testimonial-stars">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                        </div>
                        <blockquote>"Beli keyboard dan mouse bekas di sini, kondisi like new semua. Harga jauh lebih murah dari baru. Pasti repeat order!"</blockquote>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">SR</div>
                            <div class="testimonial-author-info">
                                <h4>Sari Rahmawati</h4>
                                <p>Pelajar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Dots Navigation -->
        <div class="testimonial-dots" id="testimonial-dots" role="tablist" aria-label="Testimonial navigation">
            <!-- Dots generated by JS -->
        </div>
    </div>
</section>

</main>

<?php get_footer(); ?>
