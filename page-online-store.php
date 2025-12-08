<?php
/**
 * Template Name: Sell Online
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

<style>
    :root {
        --shopify-dark: #004c3f;
        --shopify-green: #008060;
        --shopify-cream: #f7f4ef;
        --shopify-charcoal: #212326;
        --shopify-muted: #6b6f76;
    }

    body.page-template-sell-online {
        background-color: #ffffff;
        color: var(--shopify-charcoal);
        font-family: "Inter", system-ui, -apple-system, "Segoe UI", sans-serif;
    }

    .sell-online-hero {
        background: radial-gradient(circle at 20% 20%, rgba(0, 128, 96, 0.12), transparent 30%),
            radial-gradient(circle at 80% 10%, rgba(0, 76, 63, 0.12), transparent 30%),
            linear-gradient(135deg, #ffffff 60%, #f2fffa);
        padding: clamp(3rem, 5vw, 5rem) 0;
        overflow: hidden;
    }

    .sell-online-hero h1 {
        font-size: clamp(2.2rem, 2.4vw + 1.6rem, 3.6rem);
        letter-spacing: -0.02em;
        line-height: 1.05;
    }

    .sell-online-hero p.lead {
        color: var(--shopify-muted);
        font-size: 1.05rem;
        max-width: 600px;
    }

    .sell-online-cta {
        background: var(--shopify-green);
        color: #ffffff;
        border: none;
        padding: 0.9rem 1.6rem;
        font-weight: 600;
        border-radius: 999px;
        box-shadow: 0 12px 30px rgba(0, 128, 96, 0.25);
        transition: transform 160ms ease, box-shadow 160ms ease, background-color 160ms ease;
    }

    .sell-online-cta:hover {
        background-color: #017256;
        transform: translateY(-1px);
        box-shadow: 0 16px 30px rgba(0, 76, 63, 0.25);
    }

    .sell-online-secondary {
        color: var(--shopify-charcoal);
        font-weight: 600;
    }

    .hero-panel {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 18px;
        box-shadow: 0 30px 70px rgba(33, 35, 38, 0.08);
        padding: 1.5rem;
    }

    .metric-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.6rem;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 999px;
        padding: 0.45rem 0.95rem;
        color: var(--shopify-charcoal);
        font-weight: 600;
        box-shadow: 0 12px 25px rgba(0, 76, 63, 0.08);
    }

    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: 1.5rem;
    }

    .feature-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 1.25rem;
        height: 100%;
        box-shadow: 0 16px 36px rgba(33, 35, 38, 0.07);
        transition: transform 160ms ease, box-shadow 160ms ease;
    }

    .feature-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 22px 40px rgba(33, 35, 38, 0.1);
    }

    .feature-icon {
        width: 48px;
        height: 48px;
        border-radius: 12px;
        background: rgba(0, 128, 96, 0.08);
        color: var(--shopify-dark);
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        margin-bottom: 0.75rem;
    }

    .section-title {
        font-size: clamp(1.8rem, 2vw + 1rem, 2.6rem);
        letter-spacing: -0.01em;
    }

    .trusted-bar {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 14px;
        padding: 1rem 1.25rem;
        display: flex;
        align-items: center;
        gap: 1.25rem;
        justify-content: center;
        flex-wrap: wrap;
        box-shadow: 0 14px 28px rgba(33, 35, 38, 0.06);
    }

    .trusted-bar img {
        height: 32px;
        width: auto;
        object-fit: contain;
        filter: grayscale(100%);
        opacity: 0.8;
    }

    .detail-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }

    .detail-block {
        background: var(--shopify-cream);
        border-radius: 18px;
        padding: 1.5rem;
        border: 1px solid #e3ddd1;
    }

    .testimonial-card {
        background: #ffffff;
        border-radius: 16px;
        border: 1px solid #e5e7eb;
        padding: 1.5rem;
        box-shadow: 0 20px 40px rgba(33, 35, 38, 0.08);
    }

    .testimonial-quote {
        font-size: 1.1rem;
        line-height: 1.6;
        color: var(--shopify-charcoal);
    }

    .faq-item {
        border-bottom: 1px solid #e5e7eb;
        padding: 1.25rem 0;
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-question {
        font-weight: 700;
        color: var(--shopify-charcoal);
        margin-bottom: 0.35rem;
    }

    .faq-answer {
        color: var(--shopify-muted);
    }

    .cta-panel {
        background: linear-gradient(135deg, #0b3b2f, #035c46);
        color: #ffffff;
        border-radius: 18px;
        padding: clamp(2rem, 3vw, 2.75rem);
        box-shadow: 0 30px 60px rgba(3, 92, 70, 0.25);
    }

    .cta-panel .btn-light {
        background: #ffffff;
        color: var(--shopify-dark);
        border-radius: 999px;
        padding: 0.9rem 1.4rem;
        font-weight: 700;
    }

    .section-spacer {
        padding: clamp(3rem, 6vw, 5rem) 0;
    }

    .badge-pill {
        border-radius: 999px;
        font-weight: 700;
        padding: 0.35rem 0.8rem;
        background: rgba(0, 128, 96, 0.12);
        color: var(--shopify-dark);
    }
</style>

<main class="page-template-sell-online">
    <section class="sell-online-hero">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <span class="badge-pill">Sell online</span>
                        <span class="text-muted small">Build a world-class storefront</span>
                    </div>
                    <h1 class="mb-3">Create your online store with Shopify.</h1>
                    <p class="lead mb-4">Design your storefront, customize the checkout, and sell to anyone—on the web and social media. Start with a free trial and launch faster with everything built in.</p>
                    <div class="d-flex flex-wrap gap-3 align-items-center mb-3">
                        <a class="btn sell-online-cta" href="/page-register.php">Start free trial</a>
                        <a class="sell-online-secondary" href="#faq">Learn more</a>
                    </div>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <div class="metric-badge">
                            <span class="bg-success-subtle text-success-emphasis rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 38px; height: 38px;">4.6★</span>
                            <span>G2 rated ecommerce leader</span>
                        </div>
                        <span class="text-muted small">Try Shopify free for 3 days, no credit card required.</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-panel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <div class="small text-muted">Online Store</div>
                                <div class="fw-bold">Live preview</div>
                            </div>
                            <span class="badge bg-light text-dark border">Customizable</span>
                        </div>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="detail-block h-100">
                                    <div class="small text-muted mb-2">Storefront</div>
                                    <div class="fw-bold mb-2">Drag-and-drop editor</div>
                                    <p class="text-muted small mb-0">Choose from modern templates, edit sections, and preview changes instantly.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="detail-block h-100">
                                    <div class="small text-muted mb-2">Checkout</div>
                                    <div class="fw-bold mb-2">Optimized by Shopify</div>
                                    <p class="text-muted small mb-0">Fast, secure payments with flexible options like Shop Pay, PayPal, and Apple Pay.</p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="detail-block">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div>
                                            <div class="fw-bold">Sales at a glance</div>
                                            <small class="text-muted">Orders, conversion, and channel insights</small>
                                        </div>
                                        <span class="badge bg-white text-success border-success border">+$4.2k</span>
                                    </div>
                                    <div class="progress rounded-pill" style="height: 10px;">
                                        <div class="progress-bar bg-success" style="width: 72%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacer">
        <div class="container">
            <div class="trusted-bar mb-4">
                <span class="fw-semibold text-muted">Trusted by millions of entrepreneurs</span>
                <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/brand-icons/berkey-logo-750f342cdcc7fb57c2f70632a7ece1a1c7f54ecea0cdd9c8efc65dd2d5e5611d.svg" alt="Berkey" loading="lazy">
                <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/brand-icons/glossier-logo-6b96870f8a2654029a1ab2b4c1109f374ee272a17455ac1351fdfe58b78d8c73.svg" alt="Glossier" loading="lazy">
                <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/brand-icons/allbirds-logo-451101ccbb211f9750d7d10ef1defcb7c4e930e00be8f808bf2c5e2572b3c93c.svg" alt="Allbirds" loading="lazy">
                <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/brand-icons/jackery-logo-38b436e08f9a856b0e7bc7d96f058f072d6b2a240c0f93133d1921eca2d20862.svg" alt="Jackery" loading="lazy">
                <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/brand-icons/figs-logo-2e8b2bed3ff5caba013fd9d93d1abb78d9d8d55d2dd210f420f7d0b5fcf70b9d.svg" alt="Figs" loading="lazy">
            </div>
        </div>
    </section>

    <section class="section-spacer" id="features">
        <div class="container">
            <div class="row align-items-center g-4 mb-4">
                <div class="col-lg-7">
                    <div class="badge-pill mb-2">Everything you need</div>
                    <h2 class="section-title mb-3">Sell everywhere with one powerful platform.</h2>
                    <p class="text-muted fs-5 mb-0">Launch a stunning storefront, add sales channels, and manage products, inventory, and orders in a single admin. Shopify powers the entire journey from first visit to checkout.</p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <a class="btn btn-outline-success rounded-pill" href="/page-contact-us.php">Talk to an expert</a>
                </div>
            </div>
            <div class="feature-grid">
                <div class="feature-card">
                    <div class="feature-icon">01</div>
                    <h5 class="fw-bold">Customizable themes</h5>
                    <p class="text-muted">Choose from 150+ modern themes built for conversions. Adjust sections, colors, and media without touching code.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">02</div>
                    <h5 class="fw-bold">Checkout built to convert</h5>
                    <p class="text-muted">Offer accelerated checkouts with Shop Pay, and automatically optimize for mobile, global taxes, and fraud protection.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">03</div>
                    <h5 class="fw-bold">Sell across channels</h5>
                    <p class="text-muted">Connect social, marketplace, and retail channels including Facebook, Instagram, Amazon, and POS in minutes.</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">04</div>
                    <h5 class="fw-bold">Built-in marketing</h5>
                    <p class="text-muted">Create campaigns, send emails, and publish landing pages with built-in SEO, analytics, and automations.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacer bg-light" id="selling">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-6">
                    <h2 class="section-title mb-3">Launch online sales fast.</h2>
                    <p class="text-muted fs-5">Start with a guided setup checklist, choose a theme, and add products with media-rich descriptions. Built-in SEO and analytics help you track traffic, conversions, and average order value from day one.</p>
                    <ul class="list-unstyled d-grid gap-3 mt-3">
                        <li class="d-flex gap-3 align-items-start"><span class="text-success fw-bold">✓</span><div><strong>App Store with 8,000+ integrations</strong><br><span class="text-muted">Add subscriptions, bundles, loyalty programs, shipping, and more.</span></div></li>
                        <li class="d-flex gap-3 align-items-start"><span class="text-success fw-bold">✓</span><div><strong>Flexible store editor</strong><br><span class="text-muted">Drag-and-drop content, preview changes, and publish instantly.</span></div></li>
                        <li class="d-flex gap-3 align-items-start"><span class="text-success fw-bold">✓</span><div><strong>Secure payments</strong><br><span class="text-muted">Accept credit cards, digital wallets, and buy now, pay later options.</span></div></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="detail-block">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <div class="fw-bold">Inventory & fulfillment</div>
                                <small class="text-muted">Stay in sync across channels</small>
                            </div>
                            <span class="badge bg-dark">Realtime</span>
                        </div>
                        <div class="detail-grid">
                            <div class="detail-block bg-white border-0 shadow-sm">
                                <div class="small text-muted mb-1">Products</div>
                                <div class="fw-bold mb-1">Variants, media, and pricing</div>
                                <p class="text-muted small mb-0">Manage SKUs, collections, and metafields with bulk editing.</p>
                            </div>
                            <div class="detail-block bg-white border-0 shadow-sm">
                                <div class="small text-muted mb-1">Shipping</div>
                                <div class="fw-bold mb-1">Rates and labels</div>
                                <p class="text-muted small mb-0">Get discounted carrier rates and print labels directly in admin.</p>
                            </div>
                            <div class="detail-block bg-white border-0 shadow-sm">
                                <div class="small text-muted mb-1">Analytics</div>
                                <div class="fw-bold mb-1">Performance dashboards</div>
                                <p class="text-muted small mb-0">Monitor sales, top products, and channels with customizable reports.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacer">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5">
                    <div class="badge-pill mb-2">Optimized checkout</div>
                    <h2 class="section-title mb-3">Convert more shoppers at checkout.</h2>
                    <p class="text-muted fs-5">Shopify Checkout is the fastest-converting checkout on the internet, backed by Shop Pay and 24/7 fraud analysis.</p>
                    <div class="row gy-3">
                        <div class="col-sm-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon">A</div>
                                <h6 class="fw-bold">Shop Pay</h6>
                                <p class="text-muted small">One-click payments with delivery tracking and installments.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="feature-card h-100">
                                <div class="feature-icon">B</div>
                                <h6 class="fw-bold">Global selling</h6>
                                <p class="text-muted small">Multi-currency, duties, and translations to reach new markets.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-panel">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="fw-bold">Checkout preview</div>
                            <span class="badge bg-success-subtle text-success">High converting</span>
                        </div>
                        <div class="detail-grid">
                            <div class="detail-block bg-white border-0 shadow-sm">
                                <div class="small text-muted mb-1">Cart</div>
                                <div class="fw-bold mb-1">Order summary</div>
                                <p class="text-muted small mb-0">Dynamic shipping rates, taxes, and discounts automatically applied.</p>
                            </div>
                            <div class="detail-block bg-white border-0 shadow-sm">
                                <div class="small text-muted mb-1">Payments</div>
                                <div class="fw-bold mb-1">Secure by default</div>
                                <p class="text-muted small mb-0">PCI compliance, 3D Secure, and localized payment methods.</p>
                            </div>
                            <div class="detail-block bg-white border-0 shadow-sm">
                                <div class="small text-muted mb-1">Post-purchase</div>
                                <div class="fw-bold mb-1">Upsells & tracking</div>
                                <p class="text-muted small mb-0">Recommend add-ons and keep customers updated with order tracking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacer bg-light" id="support">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title mb-3">Support from launch to growth.</h2>
                    <p class="text-muted fs-5">Get expert help whenever you need it. Shopify offers 24/7 support, certified partners, and a rich help center to keep your store running smoothly.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <span class="badge-pill">24/7 support</span>
                        <span class="badge-pill">Help center</span>
                        <span class="badge-pill">Shopify Experts</span>
                        <span class="badge-pill">Migration assistance</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <img src="https://cdn.shopify.com/shopifycloud/brochure/assets/brand-icons/allbirds-logo-451101ccbb211f9750d7d10ef1defcb7c4e930e00be8f808bf2c5e2572b3c93c.svg" alt="Allbirds" width="90" class="bg-light p-2 rounded">
                            <div>
                                <div class="fw-bold">Allbirds</div>
                                <small class="text-muted">Global footwear brand</small>
                            </div>
                        </div>
                        <p class="testimonial-quote">“Shopify gives us the flexibility to launch fast, test ideas, and deliver an experience our customers love. The platform powers our online store and every channel we sell on.”</p>
                        <div class="text-muted">— Julie Channing, VP of Marketing</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-spacer" id="faq">
        <div class="container">
            <div class="row mb-4 align-items-end">
                <div class="col-lg-8">
                    <div class="badge-pill mb-2">FAQs</div>
                    <h2 class="section-title mb-2">Everything you need to know about selling online with Shopify.</h2>
                    <p class="text-muted">From pricing and payments to migrations and support, here are answers to the most common questions.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-success rounded-pill" href="/page-contact-us.php">Contact sales</a>
                </div>
            </div>
            <div class="faq-item">
                <div class="faq-question">How do I start an online store?</div>
                <div class="faq-answer">Sign up for a free trial, choose a theme, add your products, and customize your checkout. Publish when you’re ready—Shopify handles hosting, security, and payments.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Can I migrate my existing site?</div>
                <div class="faq-answer">Yes. Import products, customers, and order history with migration tools or work with Shopify Experts to move your data and design over.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">What does it cost to sell on Shopify?</div>
                <div class="faq-answer">Start with a free trial. Plans include everything you need to sell online, with transparent payment processing fees and no hidden hosting costs.</div>
            </div>
            <div class="faq-item">
                <div class="faq-question">Which payment methods can I accept?</div>
                <div class="faq-answer">Offer major credit cards, Shop Pay, PayPal, Amazon Pay, Apple Pay, and local payment options depending on your region.</div>
            </div>
        </div>
    </section>

    <section class="section-spacer">
        <div class="container">
            <div class="cta-panel text-center">
                <div class="badge bg-white text-dark fw-semibold rounded-pill mb-3">Sell online</div>
                <h2 class="section-title text-white mb-3">Start your online store with Shopify today.</h2>
                <p class="text-white-50 mb-4">Get everything you need to build, launch, and grow your business online. Try Shopify free for 3 days and explore all features.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a class="btn btn-light" href="/page-register.php">Start free trial</a>
                    <a class="btn btn-outline-light rounded-pill" href="/page-contact-us.php">Book a demo</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
