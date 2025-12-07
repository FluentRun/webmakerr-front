<?php
get_header();
?>

<style>
    :root {
        --bs-border-radius: 4px;
        --bs-border-radius-sm: 4px;
        --bs-border-radius-lg: 4px;
        --bs-border-radius-xl: 4px;
        --bs-border-radius-xxl: 4px;
        --bs-border-radius-pill: 4px;
    }

    .page-404-shell {
        background:
            radial-gradient(circle at 20% 20%, rgba(96, 165, 250, 0.08), transparent 45%),
            radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
            radial-gradient(circle at 50% 80%, rgba(16, 185, 129, 0.08), transparent 40%);
    }

    .page-404-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.35rem 0.75rem;
        border: 1px solid #e2e8f0;
        border-radius: 999px;
        background: linear-gradient(135deg, #f8fafc, #eef2f7);
        font-weight: 600;
        color: #0f172a;
        letter-spacing: 0.02em;
    }

    .page-404-icon {
        width: 22px;
        height: 22px;
    }

    .page-404-link {
        color: #0f172a;
    }

    .page-404-link:hover,
    .page-404-link:focus {
        color: #111827;
        text-decoration: none;
    }
</style>

<main class="page-404-shell py-5 py-lg-6">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-xl-10">
                <div class="page-404-card bg-white border rounded-4 shadow-sm p-4 p-lg-5">
                    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
                        <div class="page-404-badge">
                            <svg xmlns="http://www.w3.org/2000/svg" class="page-404-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 9v4" />
                                <path d="M12 17h.01" />
                                <path d="M8 21h8a4 4 0 0 0 4-4V7a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v10a4 4 0 0 0 4 4Z" />
                            </svg>
                            <span><?php esc_html_e( 'Error 404', 'rap' ); ?></span>
                        </div>
                        <span class="text-muted small"><?php esc_html_e( 'Industry-grade experience', 'rap' ); ?></span>
                    </div>

                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <div class="text-center text-lg-start">
                                <h1 class="fw-bold display-5 mb-3"><?php esc_html_e( 'We couldn\'t find that page.', 'rap' ); ?></h1>
                                <p class="fs-5 text-muted mb-4"><?php echo wp_kses_post( cz( 'tp_404_text' ) ); ?></p>

                                <div class="d-flex flex-column flex-md-row align-items-md-center gap-3 mt-2">
                                    <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-dark btn-lg shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                                        <span><?php esc_html_e( 'Contact our team', 'rap' ); ?></span>
                                    </a>
                                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="page-404-link fw-semibold d-inline-flex align-items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 12L12 3l9 9" />
                                            <path d="M9 21V9h6v12" />
                                        </svg>
                                        <span><?php esc_html_e( 'Back to homepage', 'rap' ); ?></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="bg-light border rounded-3 p-4 h-100">
                                <p class="fw-semibold text-dark mb-3"><?php esc_html_e( 'Here are a few quick ways to get what you need:', 'rap' ); ?></p>
                                <ul class="list-unstyled text-muted mb-0 small d-grid gap-3">
                                    <li class="d-flex gap-3">
                                        <span class="badge bg-dark-subtle text-dark border rounded-pill px-3 py-2">1</span>
                                        <span><?php esc_html_e( 'Use the navigation or search to find the product, service, or tutorial you were expecting.', 'rap' ); ?></span>
                                    </li>
                                    <li class="d-flex gap-3">
                                        <span class="badge bg-dark-subtle text-dark border rounded-pill px-3 py-2">2</span>
                                        <span><?php esc_html_e( 'Explore our solutions library for templates, automations, and marketing tools tailored to your goals.', 'rap' ); ?></span>
                                    </li>
                                    <li class="d-flex gap-3">
                                        <span class="badge bg-dark-subtle text-dark border rounded-pill px-3 py-2">3</span>
                                        <span><?php esc_html_e( 'Chat with our team—we will send the correct link, recommend next steps, or set up a walkthrough.', 'rap' ); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4 mt-lg-5">
            <div class="col-xl-10">
                <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5">
                    <div class="text-center mb-4">
                        <span class="d-inline-flex align-items-center bg-light border px-3 py-1 rounded-pill text-secondary small mb-3"><?php esc_html_e( 'Frequently Asked Questions', 'rap' ); ?></span>
                        <h2 class="fw-semibold text-dark mb-2" style="font-size: 2.1rem;">
                            <?php esc_html_e( 'Answers to get you back on track', 'rap' ); ?>
                        </h2>
                        <p class="text-secondary mb-0"><?php esc_html_e( 'If something feels off, these quick answers explain what happened and how to reach the right place.', 'rap' ); ?></p>
                    </div>

                    <div class="accordion" id="faq404Accordion">
                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="faq404OneHeading">
                                <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#faq404One" aria-expanded="true" aria-controls="faq404One">
                                    <?php esc_html_e( 'Why am I seeing a 404 page?', 'rap' ); ?>
                                </button>
                            </h2>
                            <div id="faq404One" class="accordion-collapse collapse show" aria-labelledby="faq404OneHeading" data-bs-parent="#faq404Accordion">
                                <div class="accordion-body text-secondary">
                                    <?php esc_html_e( 'The link may be outdated, moved, or misspelled. We regularly update our resources, so some URLs change as we release new features or content.', 'rap' ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="faq404TwoHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq404Two" aria-expanded="false" aria-controls="faq404Two">
                                    <?php esc_html_e( 'How can I find the right page quickly?', 'rap' ); ?>
                                </button>
                            </h2>
                            <div id="faq404Two" class="accordion-collapse collapse" aria-labelledby="faq404TwoHeading" data-bs-parent="#faq404Accordion">
                                <div class="accordion-body text-secondary">
                                    <?php esc_html_e( 'Use the site search or main navigation to browse services, templates, and tutorials. You can also head back to the homepage for curated highlights.', 'rap' ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="faq404ThreeHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq404Three" aria-expanded="false" aria-controls="faq404Three">
                                    <?php esc_html_e( 'Can someone guide me to the right resource?', 'rap' ); ?>
                                </button>
                            </h2>
                            <div id="faq404Three" class="accordion-collapse collapse" aria-labelledby="faq404ThreeHeading" data-bs-parent="#faq404Accordion">
                                <div class="accordion-body text-secondary">
                                    <?php esc_html_e( 'Absolutely. Reach out through our contact form and we will send the correct link, recommend solutions, or arrange a quick walkthrough tailored to your goals.', 'rap' ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3 mb-3">
                            <h2 class="accordion-header" id="faq404FourHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq404Four" aria-expanded="false" aria-controls="faq404Four">
                                    <?php esc_html_e( 'Where can I explore your services and tools?', 'rap' ); ?>
                                </button>
                            </h2>
                            <div id="faq404Four" class="accordion-collapse collapse" aria-labelledby="faq404FourHeading" data-bs-parent="#faq404Accordion">
                                <div class="accordion-body text-secondary">
                                    <?php esc_html_e( 'Visit our homepage to review featured solutions or head to the services section to see how we support campaigns, automation, and content production.', 'rap' ); ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border rounded-3">
                            <h2 class="accordion-header" id="faq404FiveHeading">
                                <button class="accordion-button fw-semibold collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq404Five" aria-expanded="false" aria-controls="faq404Five">
                                    <?php esc_html_e( 'How do I report a broken link?', 'rap' ); ?>
                                </button>
                            </h2>
                            <div id="faq404Five" class="accordion-collapse collapse" aria-labelledby="faq404FiveHeading" data-bs-parent="#faq404Accordion">
                                <div class="accordion-body text-secondary">
                                    <?php esc_html_e( 'If you landed here from an email or bookmarked URL, let us know via the contact form. We will fix the link and send you the updated resource immediately.', 'rap' ); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="py-5 mt-4 mt-lg-5">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="bg-white border rounded-4 shadow-sm p-4 p-md-5 text-center">
                        <h2 class="fw-semibold lh-sm text-dark mx-auto" style="font-size: 2.25rem; max-width: 720px;">
                            <?php esc_html_e( 'Need help finding the right page?', 'rap' ); ?>
                            <br class="d-none d-sm-block"><?php esc_html_e( 'Tell us what you were looking for and we will guide you.', 'rap' ); ?>
                        </h2>

                        <div class="mt-4">
                            <a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn btn-dark btn-lg shadow-sm">
                                <?php esc_html_e( 'Contact our team', 'rap' ); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php
get_footer();
?>
