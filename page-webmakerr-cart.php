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

$checkout_url = 'https://beta.webmakerr.com/?fluent-cart=instant_checkout&item_id=1&quantity=1';

get_header();
?>

<main>
    <section class="bg-white py-5 py-lg-6 border-bottom">
        <div class="container py-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-2 bg-light rounded-pill mb-3">
                        <span class="badge bg-dark text-uppercase">Cart</span>
                        <span class="text-secondary">Frictionless checkout experiences</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-3">Cart flows built for modern SaaS teams.</h1>
                    <p class="lead text-secondary mb-4">Design, launch, and optimize high-converting carts with Webmakerr’s streamlined toolkit—no plugins, no patchwork, just a clean experience your buyers trust.</p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a class="btn btn-dark btn-lg" href="<?php echo esc_url( $checkout_url ); ?>">Start instant checkout</a>
                        <a class="btn btn-outline-dark btn-lg" href="/contact-us">Talk to sales</a>
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <div class="avatar rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width:44px; height:44px;">
                                <span class="fw-semibold">4.9</span>
                            </div>
                            <div>
                                <div class="fw-semibold">Customer-loved experience</div>
                                <small>Backed by real-time support</small>
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
                                    <span class="fw-semibold">Cart preview</span>
                                </div>
                                <span class="badge bg-success">Live</span>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-sm-5">
                                    <div class="ratio ratio-4x3 bg-light rounded">
                                        <div class="d-flex flex-column justify-content-center align-items-center text-center p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-dark mb-2"><rect x="6" y="6" width="36" height="28" rx="4"></rect><path d="M10 12h28"></path><circle cx="16" cy="26" r="3"></circle><circle cx="32" cy="26" r="3"></circle></svg>
                                            <span class="fw-semibold">Product Bundle</span>
                                            <small class="text-secondary">Multi-tier checkout</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <div class="fw-semibold">Webmakerr Pro</div>
                                            <small class="text-secondary">Annual • Unlimited seats</small>
                                        </div>
                                        <span class="fw-semibold h5 mb-0">$249</span>
                                    </div>
                                    <ul class="list-unstyled text-secondary mb-4">
                                        <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> One-page checkout</li>
                                        <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Upsells & cross-sells</li>
                                        <li class="d-flex align-items-center gap-2"><span class="text-success">•</span> Smart recovery flows</li>
                                    </ul>
                                    <a class="btn btn-dark w-100" href="<?php echo esc_url( $checkout_url ); ?>">Launch this cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Everything you need to convert without friction</h2>
                    <p class="text-secondary mb-0">Launch polished cart experiences with rows of conversion-ready components—no custom CSS required.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark" href="/page-custom-development">See how teams ship faster</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">1</div>
                                <h5 class="mb-0 fw-bold">Guided checkout steps</h5>
                            </div>
                            <p class="text-secondary mb-0">Lead buyers through payment, shipping, and confirmations with clear milestones that reduce drop-offs.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">2</div>
                                <h5 class="mb-0 fw-bold">Embeddable payment widgets</h5>
                            </div>
                            <p class="text-secondary mb-0">Drop PCI-compliant payment blocks directly into your flows with prebuilt branding options.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">3</div>
                                <h5 class="mb-0 fw-bold">Automated recovery</h5>
                            </div>
                            <p class="text-secondary mb-0">Trigger email and SMS nudges, link tracking, and optimized retries to win back uncertain buyers.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">4</div>
                                <h5 class="mb-0 fw-bold">Order bumps & bundles</h5>
                            </div>
                            <p class="text-secondary mb-0">Upsell on the fly with curated bundles, add-ons, and limited-time incentives right inside the cart.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">5</div>
                                <h5 class="mb-0 fw-bold">Analytics with clarity</h5>
                            </div>
                            <p class="text-secondary mb-0">See abandonment, conversion, and revenue trends in one dashboard to ship smarter experiments.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">6</div>
                                <h5 class="mb-0 fw-bold">Security baked in</h5>
                            </div>
                            <p class="text-secondary mb-0">Use tokenized payments, fraud checks, and audit-ready logs without extra plugins or code.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-4 mb-4">
                <div>
                    <p class="text-uppercase text-secondary fw-semibold mb-1">Integrations</p>
                    <h3 class="fw-bold mb-0">Connect the stack you already trust</h3>
                </div>
                <a class="btn btn-outline-dark" href="/page-custom-development">View all connectors</a>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 align-items-center text-center">
                <?php
                $integrations = [
                    'Stripe',
                    'PayPal',
                    'Shopify',
                    'WooCommerce',
                    'Zapier',
                    'HubSpot',
                ];
                foreach ( $integrations as $integration ) :
                    ?>
                    <div class="col">
                        <div class="border rounded-3 py-3 px-2 bg-white h-100 d-flex align-items-center justify-content-center fw-semibold">
                            <?php echo esc_html( $integration ); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-5 py-lg-6 bg-light">
        <div class="container">
            <div class="row mb-4 align-items-center">
                <div class="col-lg-8">
                    <h2 class="fw-bold mb-2">Teams are closing more carts with Webmakerr</h2>
                    <p class="text-secondary mb-0">Real stories from operators who rebuilt their checkout without writing custom styles.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark" href="/page-customersgallery.php">Browse customer gallery</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php
                $testimonials = [
                    [
                        'quote' => 'We launched a new cart in a day and cut abandonment by 28% the same week.',
                        'name'  => 'Leah Carter',
                        'role'  => 'VP Growth, Flowdesk',
                    ],
                    [
                        'quote' => 'Our finance team trusts the audit trail, and our buyers love the clear checkout steps.',
                        'name'  => 'Jonas Ahmed',
                        'role'  => 'Head of Ops, Nova Labs',
                    ],
                    [
                        'quote' => 'The built-in recovery saved deals we used to lose. We now test offers without dev cycles.',
                        'name'  => 'Priya Srinivasan',
                        'role'  => 'GM, Stellar Commerce',
                    ],
                ];
                foreach ( $testimonials as $testimonial ) :
                    ?>
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0">
                            <div class="card-body p-4 d-flex flex-column">
                                <p class="flex-grow-1 mb-3">“<?php echo esc_html( $testimonial['quote'] ); ?>”</p>
                                <div>
                                    <div class="fw-semibold"><?php echo esc_html( $testimonial['name'] ); ?></div>
                                    <div class="text-secondary"><?php echo esc_html( $testimonial['role'] ); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <p class="text-uppercase text-secondary fw-semibold mb-2">Pricing</p>
                    <h2 class="fw-bold mb-3">Start with a simple plan and scale revenue</h2>
                    <p class="text-secondary mb-4">Ship a polished cart today with generous limits, instant gateways, and built-in security. Upgrade only when you’re ready to grow.</p>
                    <div class="d-flex flex-column gap-3">
                        <div class="d-flex align-items-start gap-3">
                            <span class="text-success">•</span>
                            <div>
                                <div class="fw-semibold">Transparent billing</div>
                                <p class="text-secondary mb-0">Predictable monthly pricing with no hidden gateway surprises.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <span class="text-success">•</span>
                            <div>
                                <div class="fw-semibold">Upgrade-ready</div>
                                <p class="text-secondary mb-0">Add seats, funnels, and automation without rebuilding your cart.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <span class="text-success">•</span>
                            <div>
                                <div class="fw-semibold">Migration support</div>
                                <p class="text-secondary mb-0">Concierge onboarding and data-safe imports for existing stores.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <div class="fw-semibold text-uppercase text-secondary">Pro</div>
                                    <h3 class="fw-bold mb-0">$49<span class="fs-6 text-secondary">/mo</span></h3>
                                </div>
                                <span class="badge bg-dark">Most popular</span>
                            </div>
                            <ul class="list-unstyled text-secondary mb-4">
                                <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Unlimited carts & experiments</li>
                                <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Checkout A/B testing</li>
                                <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Advanced recovery automations</li>
                                <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Priority support</li>
                            </ul>
                            <a class="btn btn-dark w-100 mb-2" href="<?php echo esc_url( $checkout_url ); ?>">Start checkout</a>
                            <a class="btn btn-outline-dark w-100" href="/page-seo-plugin.php">Compare plans</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 py-lg-6 bg-dark text-white">
        <div class="container text-center">
            <p class="text-uppercase fw-semibold mb-2">Ready to launch</p>
            <h2 class="fw-bold mb-3">Spin up a revenue-ready cart in minutes</h2>
            <p class="text-white-50 mb-4">Join teams who ship polished checkouts without touching CSS. Your next conversion lift is a publish away.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a class="btn btn-light btn-lg" href="<?php echo esc_url( $checkout_url ); ?>">Create your cart</a>
                <a class="btn btn-outline-light btn-lg" href="/page-contact-us.php">Schedule a demo</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
