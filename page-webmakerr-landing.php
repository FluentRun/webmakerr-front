<?php
/**
 * Template Name: Webmakerr Loft Landing
 * Template Post Type: page
 */

wp_enqueue_style(
    'webmakerr-landing',
    get_template_directory_uri() . '/assets/css/webmakerr-landing.css',
    [],
    '1.0.0'
);

get_header();
?>

<main class="wm-landing">
    <section class="wm-hero section-padding">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-6">
                    <div class="wm-badge mb-3">Webmakerr for Growth Teams</div>
                    <h1 class="display-4 fw-bold mb-3">High-converting websites, built for bold businesses.</h1>
                    <p class="lead text-muted mb-4">Launch a conversion-optimized site that tells your story, books more calls, and turns every visit into revenue—without slowing down your team.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn wm-btn" href="https://beta.webmakerr.com/register">Register – Start for Free</a>
                        <a class="btn wm-btn ghost" href="https://cal.com/webmakerr">Book a Call</a>
                    </div>
                    <div class="d-flex align-items-center gap-3 mt-4 flex-wrap text-muted">
                        <span class="fw-semibold text-dark">Avg. +38% lift in conversions</span>
                        <span class="vr"></span>
                        <span>Live in under 3 weeks</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wm-hero-media">
                        <div class="wm-hero-video" aria-label="Website preview video placeholder"></div>
                        <div class="wm-hero-cards">
                            <div class="wm-metric">
                                <span class="label">Speed Score</span>
                                <strong>99/100</strong>
                                <small>Core Web Vitals ready</small>
                            </div>
                            <div class="wm-metric">
                                <span class="label">Conversion Boost</span>
                                <strong>+38%</strong>
                                <small>Average across launches</small>
                            </div>
                            <div class="wm-metric">
                                <span class="label">Pages Delivered</span>
                                <strong>1200+</strong>
                                <small>Across SaaS & services</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-trusted section-padding bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                <h2 class="h5 text-uppercase text-muted mb-0">Trusted by teams shipping fast</h2>
                <span class="text-muted">Delivery, SaaS, agencies, and B2B leaders</span>
            </div>
            <div class="row g-4 text-center">
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Nexa Freight</div></div>
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Brightline CRM</div></div>
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Northwind Solar</div></div>
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Atlas Legal</div></div>
            </div>
        </div>
    </section>

    <section class="wm-value section-padding">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <p class="eyebrow">Value Proposition</p>
                    <h2 class="display-6 fw-semibold mb-3">Every section crafted to convert.</h2>
                    <p class="text-muted mb-4">Webmakerr blends sharp storytelling with conversion science—so your site keeps customers moving from scroll to signup. We handle UX, copy, development, analytics, and QA in one streamlined build.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="wm-chip">UX research built-in</div>
                        <div class="wm-chip">SEO-optimized launches</div>
                        <div class="wm-chip">Analytics instrumentation</div>
                        <div class="wm-chip">CMS you can edit</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wm-card-grid">
                        <article class="wm-card">
                            <h3 class="h6">Story-first messaging</h3>
                            <p class="text-muted">Copy crafted to win trust, highlight outcomes, and push clear next steps.</p>
                        </article>
                        <article class="wm-card">
                            <h3 class="h6">Performance engineering</h3>
                            <p class="text-muted">Lightweight builds, CDN ready, and Core Web Vitals tuned before launch.</p>
                        </article>
                        <article class="wm-card">
                            <h3 class="h6">Experiment ready</h3>
                            <p class="text-muted">Reusable modules and A/B friendly layouts make iteration fast.</p>
                        </article>
                        <article class="wm-card">
                            <h3 class="h6">Launch without chaos</h3>
                            <p class="text-muted">Managed sprints, clear QA, and production handoff with playbooks.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-explainer section-padding bg-light">
        <div class="container">
            <div class="row gy-4 align-items-center">
                <div class="col-lg-6">
                    <div class="wm-media-block" aria-label="Explainer video placeholder"></div>
                </div>
                <div class="col-lg-6">
                    <p class="eyebrow">How Webmakerr works</p>
                    <h2 class="display-6 fw-semibold mb-3">Websites that sell, shipped with your team.</h2>
                    <p class="text-muted mb-4">We translate your positioning into a high-velocity site. From kickoff to go-live, our strategists, designers, and engineers work as an extension of your crew—so you keep momentum while we build.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a class="btn wm-btn" href="https://beta.webmakerr.com/register">Start for Free</a>
                        <a class="btn wm-btn ghost" href="https://cal.com/webmakerr">Book a Call</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-services section-padding">
        <div class="container">
            <div class="d-flex justify-content-between flex-wrap align-items-center gap-3 mb-4">
                <h2 class="display-6 fw-semibold mb-0">Services tuned for revenue.</h2>
                <p class="text-muted mb-0">Each engagement is outcomes-first, with Webmakerr experts embedded alongside your team.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="wm-service-card">
                        <h3 class="h5">Conversion Landing Pages</h3>
                        <p class="text-muted">Campaign-ready pages built to capture leads and accelerate paid performance.</p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li>• Speed scores in the 90s</li>
                            <li>• CRO-informed hero layouts</li>
                            <li>• Integrated forms & CRM</li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="wm-service-card">
                        <h3 class="h5">Sales Websites</h3>
                        <p class="text-muted">Positioning, narrative, and proof that help your reps close faster.</p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li>• Modular messaging blocks</li>
                            <li>• Resource hubs & calculators</li>
                            <li>• Analytics and heatmap ready</li>
                        </ul>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="wm-service-card">
                        <h3 class="h5">Full-Site Revamps</h3>
                        <p class="text-muted">From IA to launch, we rebuild your site to match the way you sell today.</p>
                        <ul class="list-unstyled mb-0 text-muted">
                            <li>• UX research & wireframes</li>
                            <li>• SEO migration plan</li>
                            <li>• Training & handoff</li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-portfolio section-padding bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                <div>
                    <p class="eyebrow mb-1">Recent work</p>
                    <h2 class="display-6 fw-semibold mb-0">Examples engineered to convert.</h2>
                </div>
                <a class="btn wm-btn ghost" href="https://beta.webmakerr.com/register">View more</a>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="wm-portfolio-card">
                        <img src="https://via.placeholder.com/640x420" alt="Portfolio placeholder 1" class="img-fluid">
                        <div class="wm-portfolio-body">
                            <h3 class="h6 mb-1">B2B SaaS Launch</h3>
                            <p class="text-muted mb-0">Product storytelling with in-app proof points.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-portfolio-card">
                        <img src="https://via.placeholder.com/640x420" alt="Portfolio placeholder 2" class="img-fluid">
                        <div class="wm-portfolio-body">
                            <h3 class="h6 mb-1">Services Rebrand</h3>
                            <p class="text-muted mb-0">Credibility-driven design for a nationwide firm.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-portfolio-card">
                        <img src="https://via.placeholder.com/640x420" alt="Portfolio placeholder 3" class="img-fluid">
                        <div class="wm-portfolio-body">
                            <h3 class="h6 mb-1">Campaign Microsite</h3>
                            <p class="text-muted mb-0">High-speed landing system for paid acquisition.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-process section-padding">
        <div class="container">
            <div class="row align-items-center gy-4">
                <div class="col-lg-5">
                    <p class="eyebrow">Our process</p>
                    <h2 class="display-6 fw-semibold mb-3">Fast, focused, and accountable.</h2>
                    <p class="text-muted mb-4">Every sprint keeps you close to progress with clear approvals. We own the build; you keep moving on the rest of your roadmap.</p>
                </div>
                <div class="col-lg-7">
                    <div class="wm-steps">
                        <div class="wm-step">
                            <div class="step-num">1</div>
                            <div>
                                <h3 class="h6 mb-1">Discovery & goals</h3>
                                <p class="text-muted mb-0">We align on outcomes, audience, and KPIs to guide every decision.</p>
                            </div>
                        </div>
                        <div class="wm-step">
                            <div class="step-num">2</div>
                            <div>
                                <h3 class="h6 mb-1">Experience design</h3>
                                <p class="text-muted mb-0">Wireframes, copy, and design systems shaped for conversion.</p>
                            </div>
                        </div>
                        <div class="wm-step">
                            <div class="step-num">3</div>
                            <div>
                                <h3 class="h6 mb-1">Build & QA</h3>
                                <p class="text-muted mb-0">Performance-engineered builds with accessibility and device testing.</p>
                            </div>
                        </div>
                        <div class="wm-step">
                            <div class="step-num">4</div>
                            <div>
                                <h3 class="h6 mb-1">Launch & iterate</h3>
                                <p class="text-muted mb-0">Analytics installed, dashboards ready, and quick iteration baked in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-testimonials section-padding bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
                <div>
                    <p class="eyebrow mb-1">Testimonials</p>
                    <h2 class="display-6 fw-semibold mb-0">Teams that launch with Webmakerr.</h2>
                </div>
                <a class="btn wm-btn ghost" href="https://beta.webmakerr.com/register">See pricing</a>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <article class="wm-testimonial-card">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img class="avatar" src="https://via.placeholder.com/64" alt="Avatar placeholder 1">
                            <div>
                                <div class="fw-semibold">Jamie Lee</div>
                                <small class="text-muted">VP Marketing, Brightline</small>
                            </div>
                        </div>
                        <p class="mb-0">“Webmakerr rebuilt our site in weeks and doubled demo requests. Their team treated conversions like a science.”</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="wm-testimonial-card">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img class="avatar" src="https://via.placeholder.com/64" alt="Avatar placeholder 2">
                            <div>
                                <div class="fw-semibold">Carlos Mendoza</div>
                                <small class="text-muted">Founder, Atlas Legal</small>
                            </div>
                        </div>
                        <p class="mb-0">“Clear process, sharp copy, and a site our sales reps actually use. We saw lift within the first month.”</p>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="wm-testimonial-card">
                        <div class="d-flex align-items-center mb-3 gap-3">
                            <img class="avatar" src="https://via.placeholder.com/64" alt="Avatar placeholder 3">
                            <div>
                                <div class="fw-semibold">Priya Raman</div>
                                <small class="text-muted">COO, Northwind Solar</small>
                            </div>
                        </div>
                        <p class="mb-0">“They handled messaging, design, and build seamlessly. The new site is faster and easier for our team to update.”</p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="wm-cta section-padding">
        <div class="container">
            <div class="row justify-content-between align-items-center gy-3">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-semibold mb-2">Ready for a site that converts?</h2>
                    <p class="text-muted mb-0">Launch with Webmakerr and turn every page into a sales engine.</p>
                </div>
                <div class="col-lg-4 d-flex justify-content-lg-end gap-3">
                    <a class="btn wm-btn" href="https://beta.webmakerr.com/register">Register – Start for Free</a>
                    <a class="btn wm-btn ghost" href="https://cal.com/webmakerr">Book a Call</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
