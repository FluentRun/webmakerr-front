<?php
/**
 * Template Name: Webmakerr Cart
 * Template Post Type: page
 */

wp_enqueue_style(
    'bootstrap-5-landing',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
    [],
    '5.3.3'
);
wp_enqueue_script(
    'bootstrap-5-landing',
    'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
    [],
    '5.3.3',
    true
);

$webmakerr_cart_install_count = webmakerr_cart_get_install_count();
$webmakerr_cart_nonce         = wp_create_nonce('webmakerr_cart_install_increment');
$webmakerr_cart_ajax_url      = admin_url('admin-ajax.php');

get_header();
?>

<script>
    window.webmakerrCartData = <?php
    echo wp_json_encode(
        array(
            'count'   => (int) $webmakerr_cart_install_count,
            'ajaxUrl' => esc_url_raw( $webmakerr_cart_ajax_url ),
            'nonce'   => $webmakerr_cart_nonce,
        )
    );
    ?>;
</script>

<main class="page-webmakerr-cart">
    <style>
        :root {
            --bs-border-radius: 4px;
            --bs-border-radius-sm: 4px;
            --bs-border-radius-lg: 4px;
            --bs-border-radius-xl: 4px;
            --bs-border-radius-xxl: 4px;
            --bs-border-radius-pill: 4px;
        }

        .page-webmakerr-cart > section {
            transition: box-shadow 0.35s ease, transform 0.35s ease;
        }

        .page-webmakerr-cart > section:hover {
            box-shadow: 0 24px 64px rgba(15, 23, 42, 0.08);
        }

        .booking-ambient {
            background:
                radial-gradient(circle at 20% 20%, rgba(96, 165, 250, 0.08), transparent 45%),
                radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
                radial-gradient(circle at 50% 80%, rgba(16, 185, 129, 0.08), transparent 40%);
        }

        .hero-actions {
            gap: 1rem;
        }

        .hero-download-btn {
            font-size: 1.05rem;
            padding: 0.95rem 2.25rem;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.16);
            letter-spacing: 0.01em;
        }

        .download-primary-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .download-primary-btn .download-icon {
            width: 1.1rem;
            height: 1.1rem;
            flex-shrink: 0;
        }

        .download-primary-btn .download-icon svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .hero-animation-shell {
            min-height: 260px;
            background: linear-gradient(135deg, #1877F2 50%, #000000 50%);
            border-radius: 4px;
            overflow: hidden;
            padding: 24px;
            display: flex;
            align-items: center;
        }

        .hero-info-row {
            gap: 1rem;
        }

        .hero-pill {
            white-space: nowrap;
        }

        .live-indicator {
            position: relative;
            width: 12px;
            height: 12px;
            background: #16a34a;
            border-radius: 999px;
            box-shadow: 0 0 0 6px rgba(22, 163, 74, 0.12);
            flex-shrink: 0;
        }

        .live-indicator::after {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: inherit;
            background: rgba(22, 163, 74, 0.28);
            animation: livePulse 1.9s ease-out infinite;
            transform-origin: center;
        }

        .install-count-value {
            transition: color 0.35s ease;
        }

        .install-count-value.is-behind {
            color: #dc2626 !important;
        }

        @keyframes livePulse {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }
            100% {
                transform: scale(1.8);
                opacity: 0;
            }
        }

        .mobile-sticky-bar {
            display: none;
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background: #fff;
            border-top: 1px solid #e5e7eb;
            box-shadow: 0 -4px 16px rgba(15, 23, 42, 0.08);
            padding: 12px 16px;
        }

        .wmk-modal-open {
            overflow: hidden;
        }

        .wmk-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(6, 15, 40, 0.42);
            backdrop-filter: blur(2px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: clamp(16px, 3vw, 32px);
            z-index: 1050;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.25s ease, visibility 0.25s ease;
        }

        .wmk-modal-overlay.is-active {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .wmk-modal-dialog {
            position: relative;
            background:
                radial-gradient(circle at 20% 20%, rgba(37, 99, 235, 0.08), transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.08), transparent 35%),
                #ffffff;
            color: #0f172a;
            border-radius: 20px;
            box-shadow: 0 28px 70px rgba(7, 11, 30, 0.14);
            border: 1px solid #e5e7eb;
            width: min(720px, calc(100% - 24px));
            overflow: hidden;
            transform: translateY(12px) scale(0.98);
            opacity: 0;
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.25s ease;
        }

        .wmk-modal-overlay.is-active .wmk-modal-dialog {
            transform: translateY(0) scale(1);
            opacity: 1;
        }

        .wmk-modal-aurora {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at 18% 20%, rgba(37, 99, 235, 0.08), transparent 35%),
                radial-gradient(circle at 85% 15%, rgba(16, 185, 129, 0.08), transparent 40%),
                radial-gradient(circle at 45% 80%, rgba(125, 211, 252, 0.12), transparent 45%);
            filter: blur(18px);
            pointer-events: none;
        }

        .wmk-modal-content {
            position: relative;
            z-index: 2;
            padding: clamp(22px, 3vw, 36px);
        }

        .wmk-modal-header {
            display: flex;
            align-items: flex-start;
            justify-content: flex-end;
            gap: 16px;
            margin-bottom: 12px;
        }

        .wmk-modal-title {
            font-size: clamp(1.5rem, 1.1rem + 1vw, 2rem);
            font-weight: 800;
            margin: 0;
            color: #0f172a;
            letter-spacing: -0.01em;
        }

        .wmk-modal-close {
            background: #eef2f7;
            border: 1px solid #d0d7e2;
            color: #0f172a;
            width: 38px;
            height: 38px;
            border-radius: 12px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s ease, transform 0.2s ease, box-shadow 0.2s ease;
            box-shadow: 0 6px 16px rgba(15, 23, 42, 0.08);
        }

        .wmk-modal-close:hover,
        .wmk-modal-close:focus-visible {
            background: #e2e8f0;
            box-shadow: 0 10px 22px rgba(15, 23, 42, 0.12);
            transform: translateY(-1px);
        }

        .wmk-modal-body {
            margin-top: 20px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid #e5e7eb;
            border-radius: 14px;
            padding: clamp(18px, 2.6vw, 26px);
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.9);
        }

        .wmk-modal-body form {
            color: #0f172a;
            font-size: 1rem;
        }

        .wmk-modal-body .ff_submit_btn_wrapper .ff-btn-submit,
        .wmk-modal-body button,
        .wmk-modal-body .btn {
            border-radius: 12px;
            font-weight: 700;
            padding: 0.85rem 1.35rem;
            border: none;
            background: linear-gradient(120deg, #111827, #1f2937);
            color: #ffffff;
            box-shadow: 0 12px 24px rgba(17, 24, 39, 0.18);
            letter-spacing: 0.01em;
        }

        .wmk-modal-body input,
        .wmk-modal-body select,
        .wmk-modal-body textarea {
            border-radius: 12px !important;
            background: #ffffff;
            border: 1px solid #d7dce5 !important;
            color: #0f172a;
            padding: 0.85rem 1rem !important;
            box-shadow: none;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .wmk-modal-body input:focus,
        .wmk-modal-body select:focus,
        .wmk-modal-body textarea:focus {
            border-color: #2563eb !important;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.12);
            outline: none;
        }

        .wmk-modal-body label,
        .wmk-modal-body .ff-el-title,
        .wmk-modal-body .ff-el-input--content label {
            font-weight: 600;
            color: #0f172a;
            margin-bottom: 0.35rem;
        }

        .wmk-modal-body .ff-el-group {
            margin-bottom: 1rem;
        }

        .wmk-modal-body .ff-el-input--label label {
            font-size: 0.95rem;
        }

        .wmk-modal-body .ff-el-input--content .text-danger,
        .wmk-modal-body .ff-el-input--content .ff-el-required {
            color: #dc2626;
        }

        .wmk-modal-body .ff-message-success,
        .wmk-modal-body .ff-message-error {
            border-radius: 12px;
            padding: 0.85rem 1rem;
        }

        .wmk-modal-body .ff-message-success {
            background: #ecfdf3;
            color: #065f46;
        }

        .wmk-modal-body .ff-message-error {
            background: #fef2f2;
            color: #b91c1c;
        }

        .wmk-modal-body .ff-btn-submit:hover,
        .wmk-modal-body .ff-btn-submit:focus-visible {
            background: linear-gradient(120deg, #0f172a, #111827);
            box-shadow: 0 14px 30px rgba(17, 24, 39, 0.22);
        }

        @media (max-width: 767.98px) {
            .page-webmakerr-cart .btn {
                margin-left: auto;
                margin-right: auto;
                display: flex;
                justify-content: center;
            }

            .mobile-sticky-bar {
                display: block;
                opacity: 0;
                visibility: hidden;
                transform: translateY(6px);
                transition: opacity 0.25s ease, transform 0.25s ease, visibility 0.25s ease;
            }

            .mobile-sticky-bar.is-visible {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .hero-actions {
                flex-direction: column;
                align-items: center;
                width: 100%;
                gap: 0.75rem;
            }

            .hero-actions .btn + .btn {
                margin-top: 0 !important;
            }
        }
    </style>

    <section class="pt-5 pb-5 bg-light" id="webmakerr-cart-hero">
        <div class="container-lg">
            <div class="p-4 p-md-5 bg-white border rounded-4 shadow-sm row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center small bg-light text-secondary px-3 py-1 rounded-pill mb-3">
                        Webmakerr Cart • Performance-built WordPress ecommerce
                    </div>
                    <h1 class="fw-semibold lh-sm text-dark" style="font-size: clamp(2rem, 1.5rem + 2vw, 3.4rem);">Own your revenue with the Webmakerr Cart plugin</h1>
                    <p class="mt-3 text-secondary">Install the free, performance-first ecommerce engine built to keep every transaction fast, on-brand, and under your control—whether you sell physical products, digital downloads, or licenses.</p>
                    <div class="d-flex flex-wrap hero-actions mt-4">
                        <div class="d-flex flex-column align-items-start">
                            <a class="btn btn-dark btn-lg shadow-sm px-4 download-primary-btn hero-download-btn js-download-trigger" href="#cta" id="download-cart-button">
                                <span class="download-icon" aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 3v12" />
                                        <path d="m6 11 6 6 6-6" />
                                        <path d="M4 20h16" />
                                    </svg>
                                </span>
                                <span>Download Now, Its Free</span>
                            </a>
                            <div class="d-flex align-items-center gap-2 small text-secondary mt-2" aria-live="polite" aria-label="Active installations" role="status">
                                <span class="live-indicator" aria-hidden="true"></span>
                                <span>
                                    <span class="text-dark install-count-value" id="install-count-value"><?php echo esc_html( number_format_i18n( $webmakerr_cart_install_count ) ); ?></span>
                                    <span class="text-secondary">+ Active installations</span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <p class="small text-muted mt-2">Built for founders and teams who want fast checkout, flexible products, and zero platform fees.</p>

                    <div class="d-flex gap-4 mt-4 align-items-center">
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <div class="avatar rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width:44px; height:44px;">
                                <span class="fw-semibold">4.9</span>
                            </div>
                            <div>
                                <div class="fw-semibold text-dark">Trusted by high-performing stores</div>
                                <small>Fast setup, zero platform fees</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative bg-white border rounded-4 shadow-sm overflow-hidden booking-ambient">
                        <div class="p-4 position-relative" style="z-index:2; min-height:350px;">
                            <div class="position-relative border rounded-3 p-3 shadow-sm hero-animation-shell">
                                <div class="ratio ratio-16x9 w-100">
                                    <video
                                        class="w-100 h-100 rounded-3"
                                        src="https://cdn.webmakerr.com/website/facebook-ads-1.mp4"
                                        autoplay
                                        muted
                                        playsinline
                                        loop
                                        controls
                                        preload="none"
                                    ></video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top" id="why-webmakerr-cart">
        <div class="container-lg">
            <div class="text-center mx-auto" style="max-width: 700px;">
                <span class="d-inline-flex align-items-center bg-white border px-3 py-1 rounded-pill text-secondary small shadow-sm mb-3">
                    Why Webmakerr Cart
                </span>

                <h2 class="fw-semibold display-6 text-dark lh-sm">
                    Why growth teams choose Webmakerr Cart
                </h2>

                <p class="mt-3 text-secondary">
                    Turn your WordPress site into a performance-ready store with checkout, shipping, licensing, and analytics that stay fast under pressure.
                </p>

                <a class="btn btn-dark btn-lg mt-4 shadow-sm js-download-trigger" href="#cta">
                    Download Now
                </a>
            </div>

            <div class="row g-4 mt-5">
                <div class="col-lg-4 col-md-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">01</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Performance engineered core</h5>

                        <p class="text-muted small mt-2">
                            Dedicated commerce tables, efficient request handling, and zero bloat keep every product page, cart, and checkout responsive.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/performace-enginiered-core.png" alt="Performance engineered core" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">02</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Scales without extra spend</h5>

                        <p class="text-muted small mt-2">
                            Dynamic resource allocation keeps hosting lean while handling promo spikes, product drops, and campaign traffic without slowdowns.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/scale-witout-extra-spends.png" alt="Scalable checkout and fulfillment" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">03</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Flexible selling in one plugin</h5>

                        <p class="text-muted small mt-2">
                            Launch digital files, licenses, memberships, or shipped goods without duct-taping extensions. Everything runs from one dashboard.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/Flexible-selling-in-one-plugi.png" alt="Flexible product experiences" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom" id="product-types">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-5">
                    <p class="text-uppercase text-secondary fw-semibold mb-2">Product types</p>
                    <h3 class="fw-bold mb-3">One checkout for every product you sell</h3>
                    <p class="text-secondary mb-4">Run digital, physical, subscription, and hybrid offers from a single Webmakerr Cart install. Keep inventory, fulfillment, and licensing in sync automatically.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-dark">Digital products</span>
                        <span class="badge bg-outline-dark border border-dark text-dark">Physical items</span>
                        <span class="badge bg-outline-dark border border-dark text-dark">Hybrid bundles</span>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-3 row-cols-1 row-cols-md-2">
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Digital downloads & licenses</h5>
                                <p class="text-secondary mb-0">Deliver files instantly, generate license keys automatically, and handle recurring renewals without extra plugins.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Physical products with fulfillment</h5>
                                <p class="text-secondary mb-0">Keep stock synced, auto-mark items as sold out, and generate packing slips and invoices as orders come in.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Hybrid bundles & upsells</h5>
                                <p class="text-secondary mb-0">Pair physical kits with downloads, add installation fees at checkout, and surface smart recommendations to grow AOV.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Global-ready storefronts</h5>
                                <p class="text-secondary mb-0">Adapt taxes, currencies, and shipping rules to every region while keeping the experience consistent and fast.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 py-lg-6 bg-white border-bottom" id="benefits">
        <div class="container-lg">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Benefits you can launch today</h2>
                    <p class="text-secondary mb-0">Everything you need to run a modern store—already inside Webmakerr Cart, ready to activate the moment you download.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark js-download-trigger" href="#cta">Download Now</a>
                </div>
            </div>
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">01</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Built for uncompromised speed</h5>

                        <p class="text-muted small mt-2">
                            Commerce data lives in dedicated tables, keeping backend operations quick even with large catalogs and campaign traffic.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/buils-for-speed.png" alt="Performance tuned ecommerce" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">02</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Checkout that converts</h5>

                        <p class="text-muted small mt-2">
                            Drag-and-drop checkout blocks, saved details, and frictionless payments reduce abandonment and keep buyers moving.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/Checkout-that-converts.png" alt="Conversion-focused checkout" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">03</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Smart catalog control</h5>

                        <p class="text-muted small mt-2">
                            Manage variations, bundles, and recommendations in one place so customers always see the right offer at the right time.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/Smart-catalog-control.png" alt="Merchandising automation" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">04</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Subscriptions & licensing on autopilot</h5>

                        <p class="text-muted small mt-2">
                            Generate licenses, manage renewals, and handle cancellations automatically—no third-party billing tools required.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/subscription-and-licences.png" alt="Automated renewals" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">05</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Developer-ready APIs</h5>

                        <p class="text-muted small mt-2">
                            Connect any payment gateway, build custom workflows, or go headless with REST APIs that keep performance intact.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/developer-ready-api.png" alt="API-first ecommerce" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>
                <div class="col">
                    <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                        <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                            <span class="fw-bold text-secondary small">06</span>
                        </span>

                        <h5 class="fw-semibold text-dark">Insights that stay live</h5>

                        <p class="text-muted small mt-2">
                            Track revenue, order health, and customer activity in real time so you can move quickly on what’s working.
                        </p>

                        <img src="https://cdn.webmakerr.com/website/wecart/5.png" alt="Realtime store analytics" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-bottom" id="social-proof">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8">
                    <p class="text-uppercase text-secondary fw-semibold mb-2">Social proof</p>
                    <h3 class="fw-bold mb-0">Store owners are shipping faster with Webmakerr Cart</h3>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark js-download-trigger" href="#cta">Download Now</a>
                </div>
            </div>
            <div class="row g-4 row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-circle bg-dark" style="width:48px; height:48px;"></div>
                                <div>
                                    <div class="fw-bold">Agency founder</div>
                                    <small class="text-secondary">Scaled client stores without replatforming</small>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">“Webmakerr Cart let us handle promo surges without new servers. Checkout stayed fast and we kept every dollar.”</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-circle bg-dark" style="width:48px; height:48px;"></div>
                                <div>
                                    <div class="fw-bold">Digital product lead</div>
                                    <small class="text-secondary">Licensing-first business</small>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">“License keys, renewals, and billing all run automatically. We spend time on launches, not admin.”</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-circle bg-dark" style="width:48px; height:48px;"></div>
                                <div>
                                    <div class="fw-bold">Operations manager</div>
                                    <small class="text-secondary">Omnichannel catalog</small>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">“Inventory, invoices, and shipping labels update themselves. Our team focuses on customers, not manual tasks.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-top" id="faqs">
        <div class="container-lg">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center mb-4">
                        <span class="d-inline-flex align-items-center bg-light border px-3 py-1 rounded-pill text-secondary small mb-3">Frequently Asked Questions</span>
                        <h2 class="fw-semibold text-dark">Answers to keep your launch moving</h2>
                        <p class="text-secondary mt-2">Everything you need to know about Webmakerr Cart before you install.</p>
                    </div>

                    <div class="accordion" id="cartFaqsAccordion">
                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="cartFaqOneHeading">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#cartFaqOne" aria-expanded="true" aria-controls="cartFaqOne">
                                    What features does Webmakerr Cart include?
                                </button>
                            </h2>
                            <div id="cartFaqOne" class="accordion-collapse collapse show" aria-labelledby="cartFaqOneHeading" data-bs-parent="#cartFaqsAccordion">
                                <div class="accordion-body text-secondary">
                                    Webmakerr Cart ships with checkout blocks, digital licensing, inventory controls, subscriptions, shipping tools, analytics, and API access—all tuned for speed.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="cartFaqTwoHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cartFaqTwo" aria-expanded="false" aria-controls="cartFaqTwo">
                                    How easy is it to set up and use?
                                </button>
                            </h2>
                            <div id="cartFaqTwo" class="accordion-collapse collapse" aria-labelledby="cartFaqTwoHeading" data-bs-parent="#cartFaqsAccordion">
                                <div class="accordion-body text-secondary">
                                    Install, activate, and follow the guided setup to launch products, payments, and fulfillment in minutes—no extra extensions required.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="cartFaqThreeHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cartFaqThree" aria-expanded="false" aria-controls="cartFaqThree">
                                    Can I customize Webmakerr Cart to match my brand?
                                </button>
                            </h2>
                            <div id="cartFaqThree" class="accordion-collapse collapse" aria-labelledby="cartFaqThreeHeading" data-bs-parent="#cartFaqsAccordion">
                                <div class="accordion-body text-secondary">
                                    Absolutely. Webmakerr Cart includes customizable Gutenberg blocks, Bricks integration, and supports custom CSS for advanced styling. You can even add action buttons to custom WordPress patterns, making it easy to align the cart with your brand’s visual identity.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="cartFaqFourHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cartFaqFour" aria-expanded="false" aria-controls="cartFaqFour">
                                    Is Webmakerr Cart compatible with my current WordPress theme?
                                </button>
                            </h2>
                            <div id="cartFaqFour" class="accordion-collapse collapse" aria-labelledby="cartFaqFourHeading" data-bs-parent="#cartFaqsAccordion">
                                <div class="accordion-body text-secondary">
                                    Yes. It’s built to work with modern block themes and classic setups alike, inheriting your typography, colors, and layout choices automatically.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="cartFaqFiveHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cartFaqFive" aria-expanded="false" aria-controls="cartFaqFive">
                                    Can I sell unlimited products, and how well does it scale?
                                </button>
                            </h2>
                            <div id="cartFaqFive" class="accordion-collapse collapse" aria-labelledby="cartFaqFiveHeading" data-bs-parent="#cartFaqsAccordion">
                                <div class="accordion-body text-secondary">
                                    You can add unlimited products. Dedicated commerce tables and performance-first queries keep the catalog and checkout responsive as traffic grows.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3">
                            <h2 class="accordion-header" id="cartFaqSixHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cartFaqSix" aria-expanded="false" aria-controls="cartFaqSix">
                                    What payment methods are supported?
                                </button>
                            </h2>
                            <div id="cartFaqSix" class="accordion-collapse collapse" aria-labelledby="cartFaqSixHeading" data-bs-parent="#cartFaqsAccordion">
                                <div class="accordion-body text-secondary">
                                    Connect Stripe, PayPal, and other gateways through Webmakerr Cart’s APIs to offer cards, wallets, and region-specific options without slowing checkout.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top" id="cta">
        <div class="container-lg">
            <div class="position-relative bg-white border rounded-4 shadow-sm p-4 p-md-5 text-center overflow-hidden" style="min-height: 360px;">
                <div class="position-absolute top-0 bottom-0 start-0 end-0 opacity-25"
                     style="background-image: radial-gradient(circle at center, #000 1px, transparent 1px), radial-gradient(circle at center, #000 1px, transparent 1px); background-size: 34px 34px; background-position: 0 0, 17px 17px; pointer-events: none;">
                </div>

                <div class="position-absolute start-0 end-0 top-0" style="height: 100%; background: radial-gradient(circle at 20% 20%, rgba(37, 99, 235, 0.08), transparent 40%), radial-gradient(circle at 80% 70%, rgba(16, 185, 129, 0.08), transparent 35%);"></div>

                <div class="position-relative d-flex flex-column align-items-center" style="z-index:2;">
                    <span class="d-inline-flex align-items-center bg-white border px-3 py-1 rounded-pill text-secondary small shadow-sm mb-3">Launch faster</span>

                    <h2 class="fw-semibold lh-sm text-dark mx-auto" style="font-size: 2.25rem; max-width: 720px;">
                        Download Webmakerr Cart and launch faster
                    </h2>

                    <p class="text-muted small mb-4 mx-auto" style="max-width: 640px;">
                        Add the free plugin, activate the built-in checkout, and keep performance, payments, and fulfillment under your roof.
                    </p>

                    <div class="d-flex flex-wrap gap-3 justify-content-center w-100" style="max-width: 520px;" id="cta-actions">
                        <a class="btn btn-dark btn-lg shadow-sm px-4 download-primary-btn js-download-trigger" href="#">Download Now</a>
                        <a class="btn btn-light border btn-lg px-4 text-dark js-download-trigger" style="min-width: 220px;" href="#">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
        <?php the_content(); ?>
        </div>
    </section>
</main>

<div class="wmk-modal-overlay" id="webmakerr-cart-popup" aria-hidden="true">
    <div class="wmk-modal-dialog" role="dialog" aria-modal="true" aria-label="Webmakerr Cart popup" tabindex="-1">
        <div class="wmk-modal-aurora" aria-hidden="true"></div>
        <div class="wmk-modal-content">
            <div class="wmk-modal-header">
                <button type="button" class="wmk-modal-close" id="webmakerr-cart-popup-close" aria-label="Close popup">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="width: 18px; height: 18px;">
                        <line x1="18" y1="6" x2="6" y2="18" />
                        <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                </button>
            </div>

            <div class="wmk-modal-body">
                <?php echo do_shortcode('[fluentform id="3"]'); ?>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sticky-bar d-md-none">
    <div class="container-lg">
        <a href="#cta" class="btn btn-dark btn-lg w-100 shadow-sm px-4 download-primary-btn js-download-trigger">
            <span class="download-icon" aria-hidden="true">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 3v12" />
                    <path d="m6 11 6 6 6-6" />
                    <path d="M4 20h16" />
                </svg>
            </span>
            <span>Download Now, Its Free</span>
        </a>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var popupOverlay = document.getElementById('webmakerr-cart-popup');
        var popupDialog = popupOverlay ? popupOverlay.querySelector('.wmk-modal-dialog') : null;
        var popupClose = document.getElementById('webmakerr-cart-popup-close');
        var downloadButtons = Array.prototype.slice.call(document.querySelectorAll('.js-download-trigger'));

        var openPopup = function (event) {
            if (!popupOverlay || !popupDialog) {
                return;
            }

            if (event) {
                var trigger = event.currentTarget || event.target;

                if (trigger && trigger.tagName === 'A') {
                    event.preventDefault();
                }
            }

            popupOverlay.classList.add('is-active');
            popupOverlay.setAttribute('aria-hidden', 'false');
            document.body.classList.add('wmk-modal-open');

            if (typeof popupDialog.focus === 'function') {
                popupDialog.focus({ preventScroll: true });
            }
        };

        var closePopup = function () {
            if (!popupOverlay || !popupDialog) {
                return;
            }

            popupOverlay.classList.remove('is-active');
            popupOverlay.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('wmk-modal-open');
        };

        downloadButtons.forEach(function (btn) {
            if (!popupOverlay || popupOverlay.contains(btn)) {
                return;
            }

            btn.addEventListener('click', openPopup);
        });

        if (popupOverlay) {
            popupOverlay.addEventListener('click', function (event) {
                if (event.target === popupOverlay) {
                    closePopup();
                }
            });
        }

        if (popupClose) {
            popupClose.addEventListener('click', closePopup);
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape' && popupOverlay && popupOverlay.classList.contains('is-active')) {
                closePopup();
            }
        });

        var counterNode = document.getElementById('install-count-value');
        var counterData = window.webmakerrCartData;
        var heroSection = document.getElementById('webmakerr-cart-hero');
        var mobileStickyBar = document.querySelector('.mobile-sticky-bar');
        var mobileMediaQuery = window.matchMedia('(max-width: 767.98px)');
        var heroObserver = null;

        if (!counterNode || typeof counterData !== 'object' || counterData === null) {
            return;
        }

        var installCount = Number(counterData.count);
        var ajaxUrl = typeof counterData.ajaxUrl === 'string' ? counterData.ajaxUrl : '';
        var nonce = typeof counterData.nonce === 'string' ? counterData.nonce : '';

        if (!Number.isFinite(installCount) || !ajaxUrl || !nonce) {
            return;
        }

        var supportsHover = window.matchMedia('(hover: hover)').matches || window.matchMedia('(any-hover: hover)').matches;
        var buttonSelector = 'button, .btn, .wmk-btn, input[type="button"], input[type="submit"], input[type="reset"]';
        var baseDisplayInstallCount = installCount;
        var storedInstallCount = installCount;
        var fluctuationTimer = null;
        var displayedCount = baseDisplayInstallCount;

        var applyCountColorState = function () {
            if (!counterNode) {
                return;
            }

            if (displayedCount < storedInstallCount) {
                counterNode.classList.add('is-behind');
            } else {
                counterNode.classList.remove('is-behind');
            }
        };

        var renderCount = function (value) {
            counterNode.textContent = Number(value).toLocaleString();
            applyCountColorState();
        };

        var clampDisplayValue = function (value) {
            var min = baseDisplayInstallCount - 5;
            var max = baseDisplayInstallCount + 5;

            return Math.min(Math.max(value, min), max);
        };

        var nextDisplayValue = function () {
            var stepOptions = [-1, 0, 1];
            var step = stepOptions[Math.floor(Math.random() * stepOptions.length)];
            var tentative = clampDisplayValue(displayedCount + step);

            if (tentative === displayedCount) {
                var randomOffset = Math.floor(Math.random() * 11) - 5;
                tentative = clampDisplayValue(baseDisplayInstallCount + randomOffset);
            }

            return tentative;
        };

        var startFluctuation = function () {
            if (fluctuationTimer) {
                clearInterval(fluctuationTimer);
            }

            fluctuationTimer = window.setInterval(function () {
                displayedCount = nextDisplayValue();
                renderCount(displayedCount);
            }, 3000);
        };

        var updateStickyVisibility = function (heroInView) {
            if (!mobileStickyBar) {
                return;
            }

            if (heroInView || !mobileMediaQuery.matches) {
                mobileStickyBar.classList.remove('is-visible');
                return;
            }

            mobileStickyBar.classList.add('is-visible');
        };

        var syncStickyObserver = function () {
            if (!heroSection || !mobileStickyBar) {
                return;
            }

            if (heroObserver) {
                heroObserver.disconnect();
            }

            if (!mobileMediaQuery.matches) {
                updateStickyVisibility(true);
                return;
            }

            heroObserver = new IntersectionObserver(function (entries) {
                var entry = entries && entries.length ? entries[0] : null;
                var heroIsVisible = !!(entry && entry.isIntersecting);

                updateStickyVisibility(heroIsVisible);
            }, { threshold: 0 });

            heroObserver.observe(heroSection);

            var heroRect = heroSection.getBoundingClientRect();
            var heroInView = heroRect.bottom > 0 && heroRect.top < window.innerHeight;
            updateStickyVisibility(heroInView);
        };

        if (typeof mobileMediaQuery.addEventListener === 'function') {
            mobileMediaQuery.addEventListener('change', syncStickyObserver);
        } else if (typeof mobileMediaQuery.addListener === 'function') {
            mobileMediaQuery.addListener(syncStickyObserver);
        }

        var requestIncrement = function (eventType) {
            if (eventType === 'hover' && !supportsHover) {
                return;
            }

            var payload = new URLSearchParams({
                action: 'webmakerr_cart_increment',
                nonce: nonce
            });

            fetch(ajaxUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: payload.toString()
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (responseData) {
                    var nextCount = responseData && responseData.success && responseData.data
                        ? Number(responseData.data.count)
                        : NaN;

                    if (!Number.isFinite(nextCount)) {
                        return;
                    }

                    storedInstallCount = nextCount;
                    applyCountColorState();
                })
                .catch(function () {
                    // Gracefully ignore transient network issues.
                });
        };

        document.addEventListener('click', function (event) {
            if (event.target.closest(buttonSelector)) {
                requestIncrement('click');
            }
        });

        if (supportsHover) {
            document.addEventListener('mouseover', function (event) {
                if (event.target.closest(buttonSelector)) {
                    requestIncrement('hover');
                }
            });
        }

        displayedCount = clampDisplayValue(displayedCount);
        renderCount(displayedCount);
        startFluctuation();
        syncStickyObserver();
    });
</script>

<?php get_footer(); ?>
