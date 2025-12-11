<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 */

if ( is_front_page() ) {
    $front_page_id       = get_queried_object_id();
    $front_page_template = $front_page_id ? get_page_template_slug( $front_page_id ) : '';

    if ( $front_page_template === 'page-webmakerr-cart.php' ) {
        $webmakerr_cart_template = locate_template( 'page-webmakerr-cart.php' );

        if ( $webmakerr_cart_template ) {
            include $webmakerr_cart_template;
            return;
        }
    }
}

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

$theme_dir = get_template_directory_uri();
$checkout_url = 'https://beta.webmakerr.com/?fluent-cart=instant_checkout&item_id=1&quantity=1';

get_header();
?>

<script>
    (function() {
        var ua = (navigator.userAgent || navigator.vendor || window.opera || '').toLowerCase();
        var isFacebookInApp = /fbav|fban|fb_iab|fbiab|fbbv|fbios|fb4a/i.test(ua);
        var isInstagramInApp = /instagram/i.test(ua);
        var isInAppBrowser = isFacebookInApp || isInstagramInApp;

        if (isInAppBrowser) {
            document.documentElement.classList.add('is-inapp-browser');
            if (isFacebookInApp) {
                document.documentElement.classList.add('is-facebook-inapp');
            }

            if (document.body) {
                document.body.classList.add('is-inapp-browser');
                if (isFacebookInApp) {
                    document.body.classList.add('is-facebook-inapp');
                }
            }

            var headEl = document.head || document.getElementsByTagName('head')[0];
            var existingStylesheet = document.querySelector('link[href*="/assets/css/header-modern.css"]');
            var stylesheetHref = '<?php echo esc_url( $theme_dir . '/assets/css/header-modern.css' ); ?>';

            var ensureStylesheet = function(stylesheet) {
                if (!stylesheet) {
                    return false;
                }

                stylesheet.rel = 'stylesheet';
                stylesheet.media = 'all';
                return true;
            };

            if (!ensureStylesheet(existingStylesheet) && headEl) {
                var inAppStylesheet = document.createElement('link');
                inAppStylesheet.rel = 'stylesheet';
                inAppStylesheet.media = 'all';
                inAppStylesheet.href = stylesheetHref + (isFacebookInApp ? '?fb-inapp=1' : '?inapp=1');
                inAppStylesheet.id = 'codex-offcanvas-inapp-style';
                headEl.appendChild(inAppStylesheet);
            } else if (isFacebookInApp && headEl && existingStylesheet) {
                // Facebook's in-app browser intermittently strips stylesheet attributes; reinforce them and bypass caching.
                ensureStylesheet(existingStylesheet);
                if (!existingStylesheet.dataset.fbInapp) {
                    existingStylesheet.dataset.fbInapp = '1';
                    existingStylesheet.href = stylesheetHref + '?fb-inapp=1';
                }
            }
        }
    })();
</script>

<style>
    /* Ensure the mobile side menu logo renders consistently across browsers */
    .codex-offcanvas-logo img {
        display: block;
        max-height: 44px;
        max-width: 180px;
        width: auto;
        height: auto;
        object-fit: contain;
    }

    .is-inapp-browser .codex-offcanvas-logo img {
        max-height: 44px;
    }

    .is-inapp-browser .codex-offcanvas .codex-offcanvas-links svg,
    .is-inapp-browser .codex-offcanvas .codex-offcanvas-meta svg,
    .is-inapp-browser .codex-offcanvas .cart__icon svg,
    .is-inapp-browser .codex-offcanvas .search-post__icon svg {
        width: 20px;
        height: 20px;
        min-width: 20px;
        min-height: 20px;
        flex-shrink: 0;
    }

    .is-inapp-browser .codex-offcanvas .search-post__icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0.2rem 0.35rem;
        line-height: 1;
        gap: 0;
    }

    :root {
        --bs-border-radius: 4px;
        --bs-border-radius-sm: 4px;
        --bs-border-radius-lg: 4px;
        --bs-border-radius-xl: 4px;
        --bs-border-radius-xxl: 4px;
        --bs-border-radius-pill: 4px;
    }

    .rounded-circle {
        border-radius: 4px !important;
    }

    .booking-ambient {
        background:
            radial-gradient(circle at 20% 20%, rgba(96, 165, 250, 0.08), transparent 45%),
            radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
            radial-gradient(circle at 50% 80%, rgba(16, 185, 129, 0.08), transparent 40%);
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
    .hero-feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
        gap: 1.25rem;
        width: 100%;
    }
    .hero-feature-card {
        background: #fff;
        border-radius: 4px;
        border: 1px solid #e5e7eb;
        text-align: center;
        padding: 16px;
        box-shadow: 0 15px 30px rgba(15, 23, 42, 0.08);
    }
    .hero-feature-card svg {
        width: 64px;
        height: 64px;
        stroke: #000;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
    }
    .hero-feature-card span {
        display: block;
        margin-top: 12px;
        font-weight: 600;
        color: #0f172a;
    }
    .hero-title {
        font-size: clamp(2rem, 1.5rem + 2vw, 3.4rem);
    }
    .hero-info-row {
        gap: 1rem;
    }
    .hero-pill {
        white-space: nowrap;
    }
    .feature-card {
        width: 180px;
        height: 180px;
        border-radius: 4px;
    }
    .feature-icon-box {
        width: 56px;
        height: 56px;
        border-radius: 4px;
        background: linear-gradient(135deg, #f9fafb, #eef2f7);
        border: 1px solid #e2e8f0;
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
    }
    .more-feature-card {
        transition: transform 180ms ease, box-shadow 180ms ease, background-color 180ms ease;
    }
    .more-feature-card:hover {
        transform: scale(1.03);
        box-shadow: 0 15px 30px rgba(15, 23, 42, 0.1);
        background-color: #f8fafc;
    }
    .more-feature-card .feature-icon-box svg {
        width: 48px;
        height: 48px;
        stroke: #000;
        stroke-width: 2;
        stroke-linecap: round;
        stroke-linejoin: round;
        fill: none;
    }

    .testimonial-rotate-card {
        transition: opacity 450ms ease, transform 450ms ease;
    }

    .testimonial-rotate-card.is-fading {
        opacity: 0;
        transform: translateY(8px);
    }

    .more-feature-grid {
        --bs-gutter-x: 1.25rem;
        --bs-gutter-y: 1.25rem;
    }

    @media (min-width: 992px) {
        .hero-actions {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.75rem;
        }

        .hero-actions .btn {
            width: 100%;
            max-width: 260px;
        }

        .hero-actions .btn + .btn {
            margin-top: 0 !important;
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

    @media (max-width: 767.98px) {
        .mobile-sticky-bar {
            display: block;
        }
        .hero-row {
            text-align: center;
        }
        .hero-copy {
            margin: 0 auto;
            max-width: 520px;
        }
        .hero-info-row {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .hero-animation-shell {
            padding: 0;
            min-height: 200px;
        }
        .hero-feature-card {
            padding: 14px;
        }
        .hero-feature-card span {
            margin-top: 8px;
        }
        .hero-feature-card svg {
            width: 52px;
            height: 52px;
        }
        .hero-actions {
            flex-direction: column;
            align-items: center;
            width: 100%;
            gap: 0.75rem;
        }
        .hero-actions .btn {
            width: 100%;
            max-width: 320px;
        }
        .hero-actions .btn + .btn {
            margin-top: 0 !important;
        }
        .hero-copy .badge,
        .hero-copy .text-muted,
        .hero-copy .d-flex {
            justify-content: center;
        }
        .hero-copy .text-muted,
        .hero-copy .hero-title,
        .hero-copy p {
            text-align: center;
        }
    }

    .trial-modal-backdrop {
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.35);
        backdrop-filter: blur(2px);
        display: none;
        align-items: center;
        justify-content: center;
        padding: 16px;
        z-index: 2000;
        opacity: 0;
        transition: opacity 200ms ease;
    }

    .trial-modal-backdrop.is-visible {
        display: flex;
        opacity: 1;
    }

    .trial-modal {
        width: 100%;
        max-width: 640px;
        background: #ffffff;
        border-radius: 4px;
        border: 1px solid #e5e7eb;
        box-shadow: 0 22px 60px rgba(15, 23, 42, 0.14);
        position: relative;
        overflow: hidden;
        color: #0f172a;
    }

    .trial-modal::before {
        content: '';
        position: absolute;
        inset: 0;
        background:
            radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.08), transparent 48%),
            radial-gradient(circle at 80% 10%, rgba(16, 185, 129, 0.08), transparent 44%),
            linear-gradient(120deg, rgba(148, 163, 184, 0.05), rgba(255, 255, 255, 0));
        pointer-events: none;
    }

    .trial-modal__inner {
        position: relative;
        z-index: 2;
    }

    .trial-modal__header {
        padding: 28px 28px 0;
    }

    .trial-modal__body {
        padding: 20px 28px 28px;
        position: relative;
        z-index: 2;
    }

    .trial-modal__close {
        position: absolute;
        top: 14px;
        right: 14px;
        border: 1px solid #e5e7eb;
        background: #ffffff;
        width: 38px;
        height: 38px;
        border-radius: 4px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #0f172a;
        transition: background-color 150ms ease, transform 150ms ease, box-shadow 150ms ease;
        cursor: pointer;
        box-shadow: 0 8px 18px rgba(15, 23, 42, 0.08);
        z-index: 3;
    }

    .trial-modal__close:hover {
        background: #f8fafc;
        transform: translateY(-1px);
        box-shadow: 0 12px 26px rgba(15, 23, 42, 0.12);
    }

    .trial-modal__subtitle {
        color: #475569;
    }

    .trial-modal__status {
        display: none;
        margin-top: 12px;
    }

    .trial-modal__status.is-visible {
        display: block;
    }

    .trial-modal__pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        border-radius: 999px;
        background: #f8fafc;
        color: #0f172a;
        font-size: 0.92rem;
        border: 1px solid #e5e7eb;
        box-shadow: 0 6px 16px rgba(15, 23, 42, 0.08);
    }

    .trial-modal__pill svg {
        width: 18px;
        height: 18px;
    }

    .trial-modal__grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 18px;
        margin-top: 18px;
    }

    .trial-modal__card {
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        border-radius: 4px;
        padding: 12px 14px;
        color: #0f172a;
        display: flex;
        gap: 10px;
        align-items: flex-start;
    }

    .trial-modal__icon {
        width: 34px;
        height: 34px;
        border-radius: 4px;
        background: linear-gradient(135deg, #eef2f7, #f9fafb);
        border: 1px solid #e5e7eb;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .trial-modal__icon svg {
        width: 18px;
        height: 18px;
        color: #0f172a;
    }

    .trial-modal__card h6 {
        margin: 0 0 4px;
        color: #0f172a;
    }

    .trial-modal__card p {
        margin: 0;
        color: #475569;
        font-size: 0.95rem;
    }

    .trial-modal__form {
        background: #ffffff;
        border-radius: 4px;
        padding: 18px;
        box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        border: 1px solid #e5e7eb;
    }

    .trial-modal__form label {
        color: #0f172a;
    }

    .trial-modal__form .form-control {
        border-radius: 4px;
        border: 1px solid #e2e8f0;
        padding: 12px 14px;
        font-size: 1rem;
        box-shadow: none;
        transition: border-color 150ms ease, box-shadow 150ms ease;
    }

    .trial-modal__form .form-control:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.15);
    }

    .trial-modal__form .btn {
        border-radius: 4px;
        padding: 12px;
        font-weight: 600;
        box-shadow: 0 10px 24px rgba(15, 23, 42, 0.14);
    }

    @media (max-width: 575.98px) {
        .trial-modal {
            border-radius: 4px;
        }

        .trial-modal__header,
        .trial-modal__body {
            padding: 18px 16px 0;
        }

        .trial-modal__body {
            padding-bottom: 18px;
        }
    }
</style>

<section class="pt-5 pb-5 bg-light">
    <div class="container-lg">
        <div class="p-4 p-md-5 bg-white border rounded-4 shadow-sm row g-4 align-items-center hero-row">
            <div class="col-lg-6 hero-copy">
                <span class="d-inline-flex align-items-center small bg-light text-secondary px-3 py-1 rounded-pill mb-3">
                    Full-Funnel Growth Services
                    <svg width="12" height="12" class="ms-2" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M4 2l4 4-4 4" />
                    </svg>
                </span>

                <h1 class="fw-semibold lh-sm text-dark hero-title">
                    Grow Faster With Services Built to Increase Traffic, Leads & Sales
                </h1>

                <p class="mt-3 text-secondary">
                    We deliver proven SEO, ads management, video production, and conversion-first websites—everything you need to scale without the guesswork.
                </p>

                <div class="d-flex flex-wrap hero-actions mt-4">
                    <a href="<?php echo esc_url( $checkout_url ); ?>" class="btn btn-dark btn-lg d-flex align-items-center gap-2 w-100" style="max-width:260px;">
                        <img src="<?php echo esc_url( $theme_dir . '/images/home/user3.png' ); ?>" width="18" alt="Google icon">
                        Get Started — It’s Free
                    </a>

                    <a href="#get-free-trial" class="btn btn-light border btn-lg d-flex align-items-center justify-content-between w-100" data-trial-open style="max-width:260px;">
                        <span class="text-dark">Book a Strategy Call</span>
                        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.4">
                            <path d="M4 2l6 5-6 5" />
                        </svg>
                    </a>
                </div>

                <p class="small text-muted mt-2">Talk with specialists who plan, build, and optimize every channel for you.</p>

                <div class="d-flex gap-4 mt-4">
                    <img src="<?php echo esc_url( $theme_dir . '/images/trustf/sslupf.svg' ); ?>" height="20" alt="Trustpilot">
                    <img src="<?php echo esc_url( $theme_dir . '/images/trustf/nortonf.svg' ); ?>" height="20" alt="Google Reviews">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative bg-white border rounded-4 shadow-sm overflow-hidden booking-ambient">
                    <div class="p-4 position-relative" style="z-index:2; min-height:350px;">
                        <div class="d-flex justify-content-between align-items-start mb-3 hero-info-row">
                            <div>
                                <p class="fw-semibold text-dark mb-1">Growth plan built for your funnel</p>
                                <p class="small text-muted mb-0">See exactly how SEO, ads, video, and conversion design work together to drive measurable revenue—without adding internal lift.</p>
                            </div>
                            <span class="small text-muted fw-normal hero-pill">Specialist-led execution</span>
                        </div>

                        <div class="d-flex flex-wrap gap-2 small text-muted mb-3">
                            <span class="border rounded-pill px-3 py-1">SEO & content roadmap</span>
                            <span class="border rounded-pill px-3 py-1">Ad budget & creative plan</span>
                            <span class="border rounded-pill px-3 py-1">Conversion-first landing pages</span>
                        </div>

                        <div class="position-relative border rounded-3 p-3 shadow-sm hero-animation-shell">
                            <div class="ratio ratio-16x9 w-100">
                                <video
                                    class="w-100 h-100 rounded-3"
                                    data-src="https://cdn.webmakerr.com/website/facebook-ads-1.mp4"
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

<div class="trial-modal-backdrop" id="freeTrialModal" aria-hidden="true" role="dialog">
    <div class="trial-modal" role="document">
        <button type="button" class="trial-modal__close" aria-label="Close" data-trial-close>
            <svg width="18" height="18" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4l12 12m0-12L4 16" />
            </svg>
        </button>

        <div class="trial-modal__inner">
            <div class="trial-modal__header">
                <span class="trial-modal__pill">
                    <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 10.5l3 3 9-9" />
                    </svg>
                    Verified strategy request
                </span>
                <h3 class="fw-semibold text-dark mt-3 mb-1" style="font-size: 1.6rem;">Claim Your Free Growth Plan</h3>
                <p class="trial-modal__subtitle small mb-0">Tell us where to send your channel audit, sample assets, and next best steps.</p>
            </div>

            <div class="trial-modal__body">
                <div class="trial-modal__grid">
                    <div class="trial-modal__card">
                        <span class="trial-modal__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M8 7h8M8 12h8M8 17h5M5 21h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2z" />
                            </svg>
                        </span>
                        <div>
                            <h6 class="fw-semibold">Channel-by-channel plan</h6>
                            <p class="mb-0">We map SEO, ads, video, and conversion updates into a clear growth sequence.</p>
                        </div>
                    </div>

                    <div class="trial-modal__card">
                        <span class="trial-modal__icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M12 21c4.97 0 9-3.582 9-8s-4.03-8-9-8-9 3.582-9 8c0 2.386 1.086 4.54 2.842 6.036L5 21l2.512-1.257C9 20.563 10.455 21 12 21z" />
                            </svg>
                        </span>
                        <div>
                            <h6 class="fw-semibold">Specialists on demand</h6>
                            <p class="mb-0">Talk directly with the strategists and creatives who will own your campaigns.</p>
                        </div>
                    </div>
                </div>

                <div class="trial-modal__form mt-3">
                    <form id="freeTrialForm" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="trialName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="trialName" name="trialName" placeholder="Jane Doe" required>
                        </div>

                        <div class="mb-3">
                            <label for="trialEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="trialEmail" name="trialEmail" placeholder="you@company.com" required>
                        </div>

                        <button type="submit" class="btn btn-dark btn-lg w-100 d-flex justify-content-center align-items-center gap-2" data-trial-submit>
                            <span>Submit</span>
                            <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true" data-trial-spinner></span>
                        </button>

                        <div class="alert alert-success trial-modal__status mt-3" role="status" data-trial-success>
                            Thanks! Your request has been received. Check your inbox for next steps.
                        </div>
                        <div class="alert alert-danger trial-modal__status mt-3" role="alert" data-trial-error>
                            Something went wrong. Please try again in a moment.
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var testimonials = [
            {
                quote: '“SEO and paid combined finally clicked. Pipeline grew 42% without increasing headcount.”',
                name: 'Noah Patel',
                title: 'Marketing Ops Lead, Horizon Creative',
                initial: 'N'
            },
            {
                quote: '“Their landing pages and ad management paid for the engagement in the first month.”',
                name: 'Melissa Grant',
                title: 'VP Growth, Northwind Legal',
                initial: 'M'
            },
            {
                quote: '“The explainer video and content program lifted demo requests by 55%.”',
                name: 'Sofia Alvarez',
                title: 'Head of Growth, Latitude Labs',
                initial: 'S'
            }
        ];

        var desktopCards = Array.prototype.slice.call(document.querySelectorAll('[data-testimonial-card="desktop"]'));
        var mobileCard = document.querySelector('[data-testimonial-card="mobile"]');
        var activeIndex = 1;
        var rotationDelay = 5000;

        function setCardContent(card, testimonial) {
            if (!card || !testimonial) {
                return;
            }

            var quoteEl = card.querySelector('[data-testimonial-quote]');
            var nameEl = card.querySelector('[data-testimonial-name]');
            var titleEl = card.querySelector('[data-testimonial-title]');
            var initialEl = card.querySelector('[data-testimonial-initial]');

            if (quoteEl) {
                quoteEl.textContent = testimonial.quote;
            }
            if (nameEl) {
                nameEl.textContent = testimonial.name;
            }
            if (titleEl) {
                titleEl.textContent = testimonial.title;
            }
            if (initialEl) {
                initialEl.textContent = testimonial.initial;
            }
        }

        function renderDesktop() {
            if (!desktopCards.length) {
                return;
            }

            var total = testimonials.length;
            var order = [
                (activeIndex + total - 1) % total,
                activeIndex % total,
                (activeIndex + 1) % total
            ];

            desktopCards.forEach(function (card, index) {
                setCardContent(card, testimonials[order[index]]);
            });
        }

        function renderMobile() {
            if (!mobileCard) {
                return;
            }

            setCardContent(mobileCard, testimonials[activeIndex % testimonials.length]);
        }

        function fadeCards(cards, callback) {
            cards.forEach(function (card) {
                card.classList.add('is-fading');
            });

            setTimeout(function () {
                callback();
                requestAnimationFrame(function () {
                    cards.forEach(function (card) {
                        card.classList.remove('is-fading');
                    });
                });
            }, 200);
        }

        function rotateTestimonials() {
            activeIndex = (activeIndex + 1) % testimonials.length;

            fadeCards(desktopCards, renderDesktop);
            fadeCards(mobileCard ? [mobileCard] : [], renderMobile);
        }

        renderDesktop();
        renderMobile();

        setInterval(rotateTestimonials, rotationDelay);
    });
</script>

<section class="py-5 bg-light border-top">
    <div class="container-lg">
        <div class="text-center mx-auto" style="max-width: 700px;">
            <span class="d-inline-flex align-items-center bg-white border px-3 py-1 rounded-pill text-secondary small shadow-sm mb-3">
                Core services
            </span>

            <h2 class="fw-semibold display-6 text-dark lh-sm">
                Three services that compound your growth
            </h2>

            <p class="mt-3 text-secondary">
                Every engagement pairs strategy with hands-on delivery across SEO, paid media, and video—so you get one cohesive engine instead of scattered vendors.
            </p>

            <a href="/book-an-appointment-today" class="btn btn-dark btn-lg mt-4 shadow-sm">
                Get Started – It’s Free
            </a>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                    <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold text-secondary small">01</span>
                    </span>

                    <h5 class="fw-semibold text-dark">SEO Content & Authority Backlinks</h5>

                    <p class="text-muted small mt-2">
                        Earn rankings that stick with conversion-minded content and authoritative backlinks aligned to your highest-value pages.
                    </p>

                    <img src="https://cdn.webmakerr.com/website/facebook-ads-3.png" alt="SEO content strategy" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                    <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold text-secondary small">02</span>
                    </span>

                    <h5 class="fw-semibold text-dark">Facebook & Google Ads Management</h5>

                    <p class="text-muted small mt-2">
                        Launch, iterate, and scale profitable campaigns that keep qualified leads and sales flowing while acquisition costs trend down.
                    </p>

                    <img src="https://cdn.webmakerr.com/website/facebook-ads-1.png" alt="Paid ads optimization" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                    <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold text-secondary small">03</span>
                    </span>

                    <h5 class="fw-semibold text-dark">Explainer Video Production</h5>

                    <p class="text-muted small mt-2">
                        Win attention fast with concise explainer videos that clarify your offer and boost conversions across ads, landing pages, and launches.
                    </p>

                    <img src="https://cdn.webmakerr.com/website/facebook-ads-2.png" alt="Explainer video storyboard" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />

                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light border-top">
    <div class="container-lg">
        <div class="text-center mx-auto" style="max-width: 700px;">
            <span class="d-inline-flex align-items-center bg-white border px-3 py-1 rounded-pill text-secondary small shadow-sm mb-3">
                How it works
            </span>

            <h2 class="fw-semibold display-6 text-dark lh-sm">
                Three steps to predictable growth
            </h2>

            <p class="mt-3 text-secondary">
                Tell us your goals, we map the fastest path, then execute the SEO, ads, video, and conversion work so you see consistent wins—not more tasks.
            </p>
        </div>

        <div class="row g-4 mt-5">
            <div class="col-md-4">
                <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                    <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold text-secondary small">01</span>
                    </span>

                    <h5 class="fw-semibold text-dark">Tell us what you want to achieve</h5>

                    <p class="text-muted small mt-2">
                        Share your revenue targets, audiences, and offers. We translate them into clear channel priorities and quick wins.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                    <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold text-secondary small">02</span>
                    </span>

                    <h5 class="fw-semibold text-dark">We build the strategy & deliver the work</h5>

                    <p class="text-muted small mt-2">
                        Our specialists produce the content, creatives, tracking, and landing pages while you review progress from one dashboard.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="bg-white border rounded-4 shadow-sm p-4 h-100 d-flex flex-column">
                    <span class="d-flex justify-content-center align-items-center bg-light rounded-3 shadow-sm mb-3" style="width: 48px; height: 48px;">
                        <span class="fw-bold text-secondary small">03</span>
                    </span>

                    <h5 class="fw-semibold text-dark">You get predictable growth</h5>

                    <p class="text-muted small mt-2">
                        See traffic, leads, and sales compound as every channel works together—without hiring multiple agencies.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-white border-top">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="text-center mb-4">
                    <span class="d-inline-flex align-items-center bg-light border px-3 py-1 rounded-pill text-secondary small mb-3">Frequently Asked Questions</span>
                    <h2 class="fw-semibold text-dark">Answers that help you move forward fast</h2>
                    <p class="text-secondary mt-2">Still deciding? These quick answers explain how we work, when you see results, and how we tailor everything to your goals.</p>
                </div>

                <div class="accordion" id="faqsAccordion">
                    <div class="accordion-item border rounded-3 mb-3">
                        <h2 class="accordion-header" id="faqOneHeading">
                            <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faqOne" aria-expanded="true" aria-controls="faqOne">
                                How fast will I see traction?
                            </button>
                        </h2>
                        <div id="faqOne" class="accordion-collapse collapse show" aria-labelledby="faqOneHeading" data-bs-parent="#faqsAccordion">
                            <div class="accordion-body text-secondary">
                                Quick wins typically land in the first 30 days from new ads, refreshed landing pages, or priority SEO fixes. Longer-term compounding comes from ongoing content and retargeting.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 mb-3">
                        <h2 class="accordion-header" id="faqTwoHeading">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqTwo" aria-expanded="false" aria-controls="faqTwo">
                                Do I need to commit long term?
                            </button>
                        </h2>
                        <div id="faqTwo" class="accordion-collapse collapse" aria-labelledby="faqTwoHeading" data-bs-parent="#faqsAccordion">
                            <div class="accordion-body text-secondary">
                                No rigid contracts. We plan quarterly sprints with clear deliverables so you can scale up or pause based on results and seasonality.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 mb-3">
                        <h2 class="accordion-header" id="faqThreeHeading">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqThree" aria-expanded="false" aria-controls="faqThree">
                                What makes your approach different?
                            </button>
                        </h2>
                        <div id="faqThree" class="accordion-collapse collapse" aria-labelledby="faqThreeHeading" data-bs-parent="#faqsAccordion">
                            <div class="accordion-body text-secondary">
                                Strategy and execution live under one roof. The same team plans, writes, designs, and optimizes—so channels stay aligned and decisions move faster.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3 mb-3">
                        <h2 class="accordion-header" id="faqFourHeading">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFour" aria-expanded="false" aria-controls="faqFour">
                                Can you customize a package for my business?
                            </button>
                        </h2>
                        <div id="faqFour" class="accordion-collapse collapse" aria-labelledby="faqFourHeading" data-bs-parent="#faqsAccordion">
                            <div class="accordion-body text-secondary">
                                Yes. We tailor scope, deliverables, and pacing to your goals—whether you need a focused campaign build, ongoing SEO, or full-funnel support.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border rounded-3">
                        <h2 class="accordion-header" id="faqFiveHeading">
                            <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqFive" aria-expanded="false" aria-controls="faqFive">
                                What happens after I sign up?
                            </button>
                        </h2>
                        <div id="faqFive" class="accordion-collapse collapse" aria-labelledby="faqFiveHeading" data-bs-parent="#faqsAccordion">
                            <div class="accordion-body text-secondary">
                                You get a kickoff call, an initial roadmap, and the first deliverables scheduled immediately. We share timelines, metrics, and wins inside your dashboard each week.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container-lg text-center">
        <span class="d-inline-flex align-items-center bg-white border px-3 py-1 rounded-pill text-secondary small shadow-sm mb-3">
            Client results
        </span>

        <h2 class="fw-semibold lh-sm text-dark" style="font-size: 2.5rem;">
            Teams compounding traffic, leads, and revenue
        </h2>

        <p class="mt-3 text-secondary small mx-auto" style="max-width: 620px;">
            See how integrated SEO, ads, video, and web design deliver predictable growth with one partner leading strategy and execution.
        </p>

        <div class="d-none d-md-flex justify-content-center align-items-center gap-4 mt-5" data-testimonial-container="desktop">
            <div class="bg-white border rounded-4 shadow-sm p-4 testimonial-rotate-card" data-testimonial-card="desktop" data-position="left" style="width: 350px; height: 210px; opacity: 0.35; transform: scale(0.94);">
                <p class="text-dark small fst-italic mb-4" data-testimonial-quote="desktop"></p>

                <div class="d-flex align-items-center">
                    <svg width="36" height="36" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="20" cy="20" r="18" fill="white" stroke="black" stroke-width="2"></circle>
                        <text x="20" y="22" text-anchor="middle" font-family="Arial, sans-serif" font-size="16" font-weight="600" fill="black" data-testimonial-initial="desktop"></text>
                    </svg>
                    <div class="ms-3 text-start">
                        <p class="fw-semibold text-dark small mb-1" data-testimonial-name="desktop"></p>
                        <p class="text-muted small m-0" data-testimonial-title="desktop"></p>
                    </div>
                </div>
            </div>

            <div class="bg-white border rounded-4 shadow-sm p-4 testimonial-rotate-card" data-testimonial-card="desktop" data-position="center" style="width: 420px; height: 230px;">
                <p class="text-dark fw-semibold mb-4" data-testimonial-quote="desktop"></p>

                <div class="d-flex align-items-center">
                    <svg width="40" height="40" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="22" cy="22" r="20" fill="white" stroke="black" stroke-width="2"></circle>
                        <text x="22" y="24" text-anchor="middle" font-family="Arial, sans-serif" font-size="18" font-weight="600" fill="black" data-testimonial-initial="desktop"></text>
                    </svg>
                    <div class="ms-3 text-start">
                        <p class="fw-semibold text-dark small mb-1" data-testimonial-name="desktop"></p>
                        <p class="text-muted small m-0" data-testimonial-title="desktop"></p>
                    </div>
                </div>
            </div>

            <div class="bg-white border rounded-4 shadow-sm p-4 testimonial-rotate-card" data-testimonial-card="desktop" data-position="right" style="width: 350px; height: 210px; opacity: 0.35; transform: scale(0.94);">
                <p class="text-dark small fst-italic mb-4" data-testimonial-quote="desktop"></p>

                <div class="d-flex align-items-center">
                    <svg width="36" height="36" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="20" cy="20" r="18" fill="white" stroke="black" stroke-width="2"></circle>
                        <text x="20" y="22" text-anchor="middle" font-family="Arial, sans-serif" font-size="16" font-weight="600" fill="black" data-testimonial-initial="desktop"></text>
                    </svg>
                    <div class="ms-3 text-start">
                        <p class="fw-semibold text-dark small mb-1" data-testimonial-name="desktop"></p>
                        <p class="text-muted small m-0" data-testimonial-title="desktop"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-md-none mx-auto mt-4" style="max-width: 380px;" data-testimonial-container="mobile">
            <div class="bg-white border rounded-4 shadow-sm p-4 testimonial-rotate-card" data-testimonial-card="mobile">
                <p class="text-dark fw-semibold mb-4" data-testimonial-quote="mobile"></p>

                <div class="d-flex align-items-center">
                    <svg width="36" height="36" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <circle cx="20" cy="20" r="18" fill="white" stroke="black" stroke-width="2"></circle>
                        <text x="20" y="22" text-anchor="middle" font-family="Arial, sans-serif" font-size="16" font-weight="600" fill="black" data-testimonial-initial="mobile"></text>
                    </svg>
                    <div class="ms-3 text-start">
                        <p class="fw-semibold text-dark small mb-1" data-testimonial-name="mobile"></p>
                        <p class="text-muted small m-0" data-testimonial-title="mobile"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container-lg">
        <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5 row g-4 align-items-center">
            <div class="col-md-5 d-flex flex-column align-items-center align-items-md-start text-center text-md-start">
                    <span class="d-inline-flex align-items-center bg-white border px-3 py-1 rounded-pill text-secondary small shadow-sm mb-3">
                    Process
                    </span>

                <h2 class="fw-semibold lh-sm text-dark mb-3" style="font-size: 2.25rem;">
                    Launch growth without guesswork.
                </h2>

                <p class="text-muted small mb-4" style="max-width: 420px;">
                    We build the roadmap, launch the assets, and optimize weekly—so leadership knows exactly what’s live, what’s next, and when results hit.
                </p>

                <div class="d-flex flex-wrap gap-2 justify-content-center justify-content-md-start w-100" style="max-width: 420px;">
                    <a href="<?php echo esc_url( $checkout_url ); ?>" class="btn btn-dark btn-lg shadow-sm">Get Started — It’s Free</a>
                    <a href="#get-free-trial" class="btn btn-light border btn-lg" data-trial-open>Book a Strategy Call</a>
                </div>
            </div>

            <div class="col-md-7">
                <div class="bg-white border rounded-4 shadow-sm overflow-hidden">
                    <div class="p-4 p-md-5">
                        <div class="ratio ratio-16x9 rounded-3 overflow-hidden border" style="--bs-border-opacity: 0.35;">
                            <video
                                class="w-100 h-100"
                                data-src="https://cdn.webmakerr.com/website/booking-footer.mp4"
                                style="object-fit: cover;"
                                controls
                                playsinline
                                autoplay
                                muted
                                preload="none"
                            ></video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container-lg">
        <div class="position-relative bg-white border rounded-4 shadow-sm p-4 p-md-5 text-center overflow-hidden">
            <div class="position-absolute top-0 bottom-0 start-0 end-0 opacity-25"
                 style="background-image: radial-gradient(circle at center, #000 1px, transparent 1px), radial-gradient(circle at center, #000 1px, transparent 1px); background-size: 34px 34px; background-position: 0 0, 17px 17px; pointer-events: none;">
            </div>

            <div class="position-relative" style="z-index:2;">
                <h2 class="fw-semibold lh-sm text-dark mx-auto" style="font-size: 2.25rem; max-width: 700px;">
                    Your Growth Starts Here
                    <br class="d-none d-sm-block">Get a unified plan for SEO, ads, video, and conversion design.
                </h2>

                <div class="mt-4">
                    <a href="/book-an-appointment-today" class="btn btn-dark btn-lg shadow-sm">
                        Start For Free
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="mobile-sticky-bar d-md-none">
    <div class="container-lg">
        <div class="d-flex gap-2">
            <a href="/book-an-appointment-today" class="btn btn-dark btn-lg w-100">
                Start For Free
            </a>
            <a href="#get-free-trial" class="btn btn-light border btn-lg w-100 text-dark" data-trial-open>
                Get Free Trail
            </a>
        </div>
    </div>
</div>

<script>
    (function () {
        var modalBackdrop = document.getElementById('freeTrialModal');
        var form = document.getElementById('freeTrialForm');
        var nameInput = document.getElementById('trialName');
        var emailInput = document.getElementById('trialEmail');
        var successAlert = modalBackdrop ? modalBackdrop.querySelector('[data-trial-success]') : null;
        var errorAlert = modalBackdrop ? modalBackdrop.querySelector('[data-trial-error]') : null;
        var spinner = modalBackdrop ? modalBackdrop.querySelector('[data-trial-spinner]') : null;
        var submitBtn = modalBackdrop ? modalBackdrop.querySelector('[data-trial-submit]') : null;
        var webhookUrl = 'https://webmakerr.com/?fluentcrm=1&route=contact&hash=62bf47c0-9f1a-4a70-8e7e-e11ef0acc748';

        if (!modalBackdrop || !form || !nameInput || !emailInput) {
            return;
        }

        var toggleModal = function (show) {
            modalBackdrop.classList.toggle('is-visible', show);
            modalBackdrop.setAttribute('aria-hidden', show ? 'false' : 'true');
            document.body.classList.toggle('overflow-hidden', show);

            if (show) {
                successAlert && successAlert.classList.remove('is-visible');
                errorAlert && errorAlert.classList.remove('is-visible');
                nameInput.focus();
            }
        };

        var closeModal = function () {
            toggleModal(false);
        };

        var openButtons = document.querySelectorAll('[data-trial-open]');
        openButtons.forEach(function (btn) {
            btn.addEventListener('click', function (event) {
                event.preventDefault();
                toggleModal(true);
            });
        });

        var closeButtons = modalBackdrop.querySelectorAll('[data-trial-close]');
        closeButtons.forEach(function (btn) {
            btn.addEventListener('click', closeModal);
        });

        modalBackdrop.addEventListener('click', function (event) {
            if (event.target === modalBackdrop) {
                closeModal();
            }
        });

        document.addEventListener('keyup', function (event) {
            if (event.key === 'Escape' && modalBackdrop.classList.contains('is-visible')) {
                closeModal();
            }
        });

        var setLoading = function (isLoading) {
            if (!submitBtn || !spinner) {
                return;
            }

            submitBtn.disabled = isLoading;
            spinner.classList.toggle('d-none', !isLoading);
        };

        var showStatus = function (type) {
            if (successAlert) {
                successAlert.classList.toggle('is-visible', type === 'success');
            }
            if (errorAlert) {
                errorAlert.classList.toggle('is-visible', type === 'error');
            }
        };

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            var name = nameInput.value.trim();
            var email = emailInput.value.trim();

            showStatus('');
            if (!name || !email) {
                showStatus('error');
                return;
            }

            setLoading(true);

            fetch(webhookUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    email: email,
                    first_name: name
                })
            })
                .then(function (response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json().catch(function () {
                        return {};
                    });
                })
                .then(function () {
                    form.reset();
                    showStatus('success');
                    window.location.href = '/thank-you-contact';
                })
                .catch(function () {
                    showStatus('error');
                })
                .finally(function () {
                    setLoading(false);
                });
        });
    })();
</script>

<script>
    window.addEventListener('load', function () {
        var lazyVideos = document.querySelectorAll('video[data-src]');

        lazyVideos.forEach(function (video) {
            var source = video.getAttribute('data-src');

            if (!source) {
                return;
            }

            var startPlayback = function () {
                var playPromise = video.play();

                if (playPromise && typeof playPromise.catch === 'function') {
                    playPromise.catch(function () {
                        // Suppress autoplay promise rejections in browsers that block playback.
                    });
                }
            };

            video.muted = true;
            video.setAttribute('muted', '');
            video.setAttribute('autoplay', '');
            video.setAttribute('playsinline', '');
            video.src = source;
            video.removeAttribute('data-src');

            if (video.readyState >= 2) {
                startPlayback();
            } else {
                video.addEventListener(
                    'loadeddata',
                    function handleLoadedData() {
                        video.removeEventListener('loadeddata', handleLoadedData);
                        startPlayback();
                    }
                );
            }
        });
    });
</script>

<?php get_footer(); ?>
