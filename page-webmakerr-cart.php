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
    <section class="bg-white py-5 py-lg-6 border-bottom">
        <div class="container py-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 bg-light rounded-pill mb-3">
                        <span class="badge bg-dark text-uppercase">Webmakerr Cart</span>
                        <span class="text-secondary">Performance-built WordPress ecommerce</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-3">Own your revenue with the Webmakerr Cart plugin</h1>
                    <p class="lead text-secondary mb-4">Install the free, performance-first ecommerce engine built to keep every transaction fast, on-brand, and under your control—whether you sell physical products, digital downloads, or licenses.</p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a class="btn btn-dark btn-lg" href="#cta">Download Webmakerr Cart (Free)</a>
                        <a class="btn btn-outline-dark btn-lg" href="#product-types">See how it works</a>
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <div class="avatar rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width:44px; height:44px;">
                                <span class="fw-semibold">4.9</span>
                            </div>
                            <div>
                                <div class="fw-semibold">Trusted by high-performing stores</div>
                                <small>Fast setup, zero platform fees</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center gap-2">
                                    <div class="rounded-circle bg-dark" style="width:12px; height:12px;"></div>
                                    <span class="fw-semibold">Performance preview</span>
                                </div>
                                <span class="badge bg-success">Live preview</span>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-sm-5">
                                    <div class="ratio ratio-4x3 bg-light rounded">
                                        <div class="d-flex flex-column justify-content-center align-items-center text-center p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-dark mb-2"><rect x="6" y="6" width="36" height="28" rx="4"></rect><path d="M10 12h28"></path><circle cx="16" cy="26" r="3"></circle><circle cx="32" cy="26" r="3"></circle></svg>
                                            <span class="fw-semibold">Performance snapshot</span>
                                            <small class="text-secondary">Built to stay fast at scale</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <div class="fw-semibold">Webmakerr Cart Plugin</div>
                                            <small class="text-secondary">Free to download and deploy</small>
                                        </div>
                                        <span class="fw-semibold h5 mb-0">$0</span>
                                    </div>
                                    <ul class="list-unstyled text-secondary mb-4">
                                        <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> 3x faster order processing than legacy carts</li>
                                        <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> 25% lighter on server resources while you scale</li>
                                        <li class="d-flex align-items-center gap-2"><span class="text-success">•</span> One checkout for digital, physical, and hybrid products</li>
                                    </ul>
                                    <a class="btn btn-dark w-100" href="#cta">Download the plugin free</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 py-lg-6 bg-light" id="why-webmakerr-cart">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Why growth teams choose Webmakerr Cart</h2>
                    <p class="text-secondary mb-0">Turn your WordPress site into a performance-ready store with checkout, shipping, licensing, and analytics that stay fast under pressure.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark" href="#cta">Get the free plugin</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">1</div>
                                <h5 class="mb-0 fw-bold">Performance engineered core</h5>
                            </div>
                            <p class="text-secondary mb-0">Dedicated commerce tables, efficient request handling, and zero bloat keep every product page, cart, and checkout responsive.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">2</div>
                                <h5 class="mb-0 fw-bold">Scales without extra spend</h5>
                            </div>
                            <p class="text-secondary mb-0">Dynamic resource allocation means you stay lean on hosting while handling promo spikes, product drops, and campaign traffic.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">3</div>
                                <h5 class="mb-0 fw-bold">Flexible selling in one plugin</h5>
                            </div>
                            <p class="text-secondary mb-0">Launch digital files, licenses, memberships, or shipped goods without duct-taping extensions. Everything runs from one dashboard.</p>
                        </div>
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
        <div class="container">
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
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Built for uncompromised speed</h5>
                        <p class="text-secondary mb-0">Commerce data lives in dedicated tables, keeping backend operations quick even with large catalogs and campaign traffic.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Checkout that converts</h5>
                        <p class="text-secondary mb-0">Drag-and-drop checkout blocks, saved details, and frictionless payments reduce abandonment and keep buyers moving.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Smart catalog control</h5>
                        <p class="text-secondary mb-0">Manage variations, bundles, and recommendations in one place so customers always see the right offer at the right time.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Subscriptions & licensing on autopilot</h5>
                        <p class="text-secondary mb-0">Generate licenses, manage renewals, and handle cancellations automatically—no third-party billing tools required.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Developer-ready APIs</h5>
                        <p class="text-secondary mb-0">Connect any payment gateway, build custom workflows, or go headless with REST APIs that keep performance intact.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Insights that stay live</h5>
                        <p class="text-secondary mb-0">Track revenue, order health, and customer activity in real time so you can move quickly on what’s working.</p>
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

    <section class="py-5 py-lg-6 bg-dark text-white" id="cta">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Download Webmakerr Cart and launch faster</h2>
                    <p class="text-white-50 mb-0">Add the free plugin, activate the built-in checkout, and keep performance, payments, and fulfillment under your roof.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                        <a class="btn btn-light btn-lg" href="#">Get the plugin free</a>
                        <a class="btn btn-outline-light btn-lg" href="#">Talk with our team</a>
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

<?php get_footer(); ?>
