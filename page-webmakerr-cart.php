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
                        <span class="text-secondary">Hero — Supporting text</span>
                    </div>
                    <h1 class="display-4 fw-bold mb-3">Hero — Headline for Webmakerr Cart</h1>
                    <p class="lead text-secondary mb-4">Hero — Sub-headline describing the value proposition for Webmakerr Cart with concise placeholder copy.</p>
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <a class="btn btn-dark btn-lg" href="#cta">Download For Free</a>
                        <a class="btn btn-outline-dark btn-lg" href="#product-types">Secondary CTA — Learn more</a>
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <div class="avatar rounded-circle bg-light d-inline-flex align-items-center justify-content-center" style="width:44px; height:44px;">
                                <span class="fw-semibold">4.9</span>
                            </div>
                            <div>
                                <div class="fw-semibold">Placeholder social proof</div>
                                <small>Short note about trust and support</small>
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
                                    <span class="fw-semibold">Hero — Visual placeholder</span>
                                </div>
                                <span class="badge bg-success">Live preview</span>
                            </div>
                            <div class="row g-3 align-items-center">
                                <div class="col-sm-5">
                                    <div class="ratio ratio-4x3 bg-light rounded">
                                        <div class="d-flex flex-column justify-content-center align-items-center text-center p-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-dark mb-2"><rect x="6" y="6" width="36" height="28" rx="4"></rect><path d="M10 12h28"></path><circle cx="16" cy="26" r="3"></circle><circle cx="32" cy="26" r="3"></circle></svg>
                                            <span class="fw-semibold">Visual component</span>
                                            <small class="text-secondary">Placeholder illustration</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <div class="fw-semibold">Hero — Product name</div>
                                            <small class="text-secondary">Hero — Short descriptor</small>
                                        </div>
                                        <span class="fw-semibold h5 mb-0">$0.00</span>
                                    </div>
                                    <ul class="list-unstyled text-secondary mb-4">
                                        <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Hero highlight one</li>
                                        <li class="d-flex align-items-center gap-2 mb-2"><span class="text-success">•</span> Hero highlight two</li>
                                        <li class="d-flex align-items-center gap-2"><span class="text-success">•</span> Hero highlight three</li>
                                    </ul>
                                    <a class="btn btn-dark w-100" href="#cta">Download For Free</a>
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
                    <h2 class="fw-bold mb-2">Why Webmakerr Cart — Section headline</h2>
                    <p class="text-secondary mb-0">Why Webmakerr Cart — Sub-headline explaining the value of the platform.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark" href="#cta">Download For Free</a>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">1</div>
                                <h5 class="mb-0 fw-bold">Feature panel 1 title</h5>
                            </div>
                            <p class="text-secondary mb-0">Feature panel 1 description about performance and speed.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">2</div>
                                <h5 class="mb-0 fw-bold">Feature panel 2 title</h5>
                            </div>
                            <p class="text-secondary mb-0">Feature panel 2 description about scalability and resilience.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:48px; height:48px;">3</div>
                                <h5 class="mb-0 fw-bold">Feature panel 3 title</h5>
                            </div>
                            <p class="text-secondary mb-0">Feature panel 3 description about hybrid product flexibility.</p>
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
                    <h3 class="fw-bold mb-3">Product-types — Headline for Webmakerr Cart</h3>
                    <p class="text-secondary mb-4">Product-types — Summary that Webmakerr Cart supports digital and physical products with ease.</p>
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
                                <h5 class="fw-bold mb-2">Use-case 1 title</h5>
                                <p class="text-secondary mb-0">Use-case 1 description about selling software licenses, downloads, or memberships.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Use-case 2 title</h5>
                                <p class="text-secondary mb-0">Use-case 2 description about shipping physical goods with fulfillment options.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Use-case 3 title</h5>
                                <p class="text-secondary mb-0">Use-case 3 description about combining digital and physical items.</p>
                            </div>
                        </div>
                        <div class="col">
                            <div class="h-100 p-4 bg-light rounded-3 border">
                                <h5 class="fw-bold mb-2">Use-case 4 title</h5>
                                <p class="text-secondary mb-0">Use-case 4 description about localized experiences and multiple currencies.</p>
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
                    <h2 class="fw-bold mb-2">Benefits — Section headline</h2>
                    <p class="text-secondary mb-0">Benefits — Sub-headline highlighting Webmakerr Cart capabilities.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark" href="#cta">Download For Free</a>
                </div>
            </div>
            <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Benefit 1 title</h5>
                        <p class="text-secondary mb-0">Benefit 1 description covering store management and catalog control.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Benefit 2 title</h5>
                        <p class="text-secondary mb-0">Benefit 2 description about flexible checkout and payment options.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Benefit 3 title</h5>
                        <p class="text-secondary mb-0">Benefit 3 description about product variations and bundles.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Benefit 4 title</h5>
                        <p class="text-secondary mb-0">Benefit 4 description about subscriptions, renewals, and licensing.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Benefit 5 title</h5>
                        <p class="text-secondary mb-0">Benefit 5 description about developer-friendly APIs and headless builds.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="h-100 p-4 bg-light rounded-3 border">
                        <h5 class="fw-bold mb-2">Benefit 6 title</h5>
                        <p class="text-secondary mb-0">Benefit 6 description about analytics, reporting, and automation.</p>
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
                    <h3 class="fw-bold mb-0">Social proof — Headline for testimonials</h3>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark" href="#cta">Share your story</a>
                </div>
            </div>
            <div class="row g-4 row-cols-1 row-cols-md-3">
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-circle bg-dark" style="width:48px; height:48px;"></div>
                                <div>
                                    <div class="fw-bold">Testimonial 1 name</div>
                                    <small class="text-secondary">Role or company</small>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">Testimonial 1 quote placeholder about Webmakerr Cart reliability.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-circle bg-dark" style="width:48px; height:48px;"></div>
                                <div>
                                    <div class="fw-bold">Testimonial 2 name</div>
                                    <small class="text-secondary">Role or company</small>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">Testimonial 2 quote placeholder focusing on conversions and support.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body p-4">
                            <div class="d-flex align-items-center gap-3 mb-3">
                                <div class="rounded-circle bg-dark" style="width:48px; height:48px;"></div>
                                <div>
                                    <div class="fw-bold">Testimonial 3 name</div>
                                    <small class="text-secondary">Role or company</small>
                                </div>
                            </div>
                            <p class="text-secondary mb-0">Testimonial 3 quote placeholder highlighting ease of use.</p>
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
                    <h2 class="fw-bold mb-2">CTA — Final call to action headline</h2>
                    <p class="text-white-50 mb-0">CTA — Supporting text encouraging visitors to get started with Webmakerr Cart.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                        <a class="btn btn-light btn-lg" href="#">Download For Free</a>
                        <a class="btn btn-outline-light btn-lg" href="#">CTA — Contact sales</a>
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
