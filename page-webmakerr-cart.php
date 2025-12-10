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

get_header();
?>

<main>
    <style>
        :root {
            --bs-border-radius: 4px;
            --bs-border-radius-sm: 4px;
            --bs-border-radius-lg: 4px;
            --bs-border-radius-xl: 4px;
            --bs-border-radius-xxl: 4px;
            --bs-border-radius-pill: 4px;
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

        .hero-info-row {
            gap: 1rem;
        }

        .hero-pill {
            white-space: nowrap;
        }

        .install-counter {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .install-counter.counter-active {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
        }
    </style>

    <section class="pt-5 pb-5 bg-light">
        <div class="container-lg">
            <div class="p-4 p-md-5 bg-white border rounded-4 shadow-sm row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center small bg-light text-secondary px-3 py-1 rounded-pill mb-3">
                        Webmakerr Cart • Performance-built WordPress ecommerce
                    </div>
                    <h1 class="fw-semibold lh-sm text-dark" style="font-size: clamp(2rem, 1.5rem + 2vw, 3.4rem);">Own your revenue with the Webmakerr Cart plugin</h1>
                    <p class="mt-3 text-secondary">Install the free, performance-first ecommerce engine built to keep every transaction fast, on-brand, and under your control—whether you sell physical products, digital downloads, or licenses.</p>
                    <div class="d-flex flex-wrap hero-actions mt-4">
                        <a class="btn btn-dark btn-lg d-flex align-items-center gap-2 w-100" style="max-width:260px;" href="#cta" id="download-cart-button">
                            <img src="<?php echo esc_url( get_template_directory_uri() . '/images/home/user3.png' ); ?>" width="18" alt="Download icon">
                            Download Webmakerr Cart (Free)
                        </a>

                        <div class="btn btn-light border btn-lg d-flex align-items-center justify-content-between w-100 install-counter" style="max-width:260px;" aria-live="polite" aria-label="Active installations counter">
                            <div class="text-start">
                                <div class="small text-secondary">Active installations</div>
                                <div class="fw-semibold text-dark" style="font-size: clamp(1rem, 0.6rem + 1vw, 1.35rem);">
                                    <span id="install-count-value">250</span>+
                                </div>
                            </div>
                            <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true">
                                <path d="M4 10l4-4 4 4" />
                            </svg>
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
                            <div class="d-flex justify-content-between align-items-start mb-3 hero-info-row">
                                <div>
                                    <p class="fw-semibold text-dark mb-1">See the cart in action</p>
                                    <p class="small text-muted mb-0">Checkout flow, digital licensing, and fulfillment updates—optimized to stay quick when traffic spikes.</p>
                                </div>
                                <span class="small text-muted fw-normal hero-pill">Performance preview</span>
                            </div>

                            <div class="d-flex flex-wrap gap-2 small text-muted mb-3">
                                <span class="border rounded-pill px-3 py-1">Checkout & upsells</span>
                                <span class="border rounded-pill px-3 py-1">Digital licenses</span>
                                <span class="border rounded-pill px-3 py-1">Inventory & shipping</span>
                            </div>

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

                <a class="btn btn-dark btn-lg mt-4 shadow-sm" href="#cta">
                    Get the free plugin
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-3.png" alt="Performance engineered core" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-1.png" alt="Scalable checkout and fulfillment" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-2.png" alt="Flexible product experiences" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />

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
                    <a class="btn btn-outline-dark" href="#cta">Start free</a>
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-3.png" alt="Performance tuned ecommerce" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-1.png" alt="Conversion-focused checkout" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-2.png" alt="Merchandising automation" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/booking1.png" alt="Automated renewals" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-1.png" alt="API-first ecommerce" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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

                        <img src="https://cdn.webmakerr.com/website/facebook-ads-3.png" alt="Realtime store analytics" class="mt-auto pt-3 w-100" style="height: 250px; object-fit: cover;" />
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
                    <a class="btn btn-outline-dark" href="#cta">Download free</a>
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
                        <a class="btn btn-dark btn-lg shadow-sm px-4" style="min-width: 220px;" href="#">Get the plugin free</a>
                        <a class="btn btn-light border btn-lg px-4 text-dark" style="min-width: 220px;" href="#">Talk with our team</a>
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var counterContainer = document.querySelector('.install-counter');
        var counterValue = document.getElementById('install-count-value');
        var downloadButton = document.getElementById('download-cart-button');

        if (!counterContainer || !counterValue || !downloadButton) {
            return;
        }

        var installCount = 250;
        var displayedCount = 250;

        var updateDisplay = function () {
            counterValue.textContent = displayedCount.toLocaleString();
        };

        var animateTo = function (target) {
            if (target <= displayedCount) {
                return;
            }

            counterContainer.classList.add('counter-active');

            var step = function () {
                if (displayedCount < target) {
                    displayedCount += 1;
                    updateDisplay();
                    requestAnimationFrame(step);
                } else {
                    counterContainer.classList.remove('counter-active');
                }
            };

            requestAnimationFrame(step);
        };

        var incrementCounter = function () {
            installCount += 1;
            animateTo(installCount);
        };

        downloadButton.addEventListener('click', incrementCounter);
        downloadButton.addEventListener('mouseenter', incrementCounter);
        downloadButton.addEventListener('focus', incrementCounter);

        updateDisplay();
    });
</script>

<?php get_footer(); ?>
