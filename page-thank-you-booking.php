<?php
/*
 * Template Name: Booking Thank You
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

global $theme_dir;
$theme_dir = get_template_directory_uri();

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

    .rounded-circle {
        border-radius: 4px !important;
    }

    .thankyou-ambient {
        background:
            radial-gradient(circle at 20% 20%, rgba(96, 165, 250, 0.08), transparent 45%),
            radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
            radial-gradient(circle at 50% 80%, rgba(16, 185, 129, 0.08), transparent 40%);
    }

    .thankyou-card,
    .thankyou-step-card {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 4px;
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
    }

    .thankyou-card {
        padding: clamp(24px, 3vw, 36px);
    }

    .thankyou-card h1 {
        font-size: clamp(1.8rem, 1.4rem + 1vw, 2.4rem);
        margin-bottom: 0.35rem;
    }

    .thankyou-card p {
        color: #475569;
        margin-bottom: 1.25rem;
        max-width: 520px;
    }

    .thankyou-step-card {
        padding: 18px 20px;
        height: 100%;
    }

    .thankyou-next-steps {
        width: 100%;
    }

    .thankyou-next-steps h2 {
        font-size: 1.25rem;
        margin-bottom: 1rem;
    }

    .thankyou-next-step {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        padding: 12px 0;
        border-top: 1px solid #e5e7eb;
    }

    .thankyou-next-step:first-of-type {
        padding-top: 0;
        border-top: none;
    }

    .thankyou-next-icon {
        width: 32px;
        height: 32px;
        border-radius: 6px;
        background: linear-gradient(135deg, #f9fafb, #eef2f7);
        border: 1px solid #e2e8f0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .thankyou-next-icon svg {
        width: 20px;
        height: 20px;
        stroke: #0f172a;
    }

    .thankyou-next-step h5 {
        margin: 0;
        font-size: 1rem;
        line-height: 1.4;
    }

    .thankyou-next-step p {
        margin-bottom: 0;
        color: #475569;
    }

    @media (min-width: 992px) {
        .thankyou-step-card {
            padding: 22px 24px;
        }
    }

    .thankyou-step-icon {
        width: 44px;
        height: 44px;
        border-radius: 4px;
        background: linear-gradient(135deg, #f9fafb, #eef2f7);
        border: 1px solid #e2e8f0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 12px;
    }

    .thankyou-step-icon svg {
        width: 22px;
        height: 22px;
        stroke: #0f172a;
    }

    @media (max-width: 575.98px) {
        .thankyou-primary-actions {
            justify-content: center;
            text-align: center;
        }

        .thankyou-primary-actions .btn {
            margin-left: auto;
            margin-right: auto;
        }

        .thankyou-primary-actions .text-muted {
            width: 100%;
        }
    }

    .thankyou-header {
        gap: 12px;
    }

    .thankyou-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        border-radius: 999px;
        background: #f8fafc;
        border: 1px solid #e2e8f0;
        font-weight: 600;
        color: #0f172a;
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
</style>

<div class="thankyou-ambient py-5 py-lg-6">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div class="thankyou-card text-center d-flex flex-column align-items-center">
                    <div class="thankyou-step-icon">
                        <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M9 12.75 11 14.75 15 10.25M12 3 3 7V17L12 21 21 17V7L12 3Z" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h1 class="fw-bold"><?php esc_html_e('Your Booking Is Confirmed!', 'rap'); ?></h1>
                    <p class="mb-4 mx-auto">
                        <?php esc_html_e('Thank you for scheduling your appointment. We look forward to speaking with you.', 'rap'); ?>
                    </p>
                    <div class="thankyou-primary-actions d-flex flex-wrap align-items-center justify-content-center gap-2">
                        <a class="btn btn-dark btn-lg fw-semibold" href="https://webmakerr.com">
                            <?php esc_html_e('Go to Homepage', 'rap'); ?>
                        </a>
                    </div>
                    <div class="thankyou-next-steps mt-4 text-start">
                        <h2 class="fw-semibold">What Happens Next?</h2>
                        <div class="thankyou-next-step">
                            <div class="thankyou-next-icon">
                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M7 8.5 12 12 17 8.5M7 12.5 12 16 17 12.5" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M5 5h14a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Z" stroke="#0f172a" stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-semibold">Design Phase</h5>
                                <p>Our team begins creating the first website draft tailored to your business and goals.</p>
                            </div>
                        </div>
                        <div class="thankyou-next-step">
                            <div class="thankyou-next-icon">
                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M9.5 11h5M9.5 14h5M12 6.5A1.5 1.5 0 1 1 10.5 8 1.5 1.5 0 0 1 12 6.5Z" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6 4h12a2 2 0 0 1 2 2v12l-4-3H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z" stroke="#0f172a" stroke-width="1.5" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-semibold">Review Together</h5>
                                <p>During your scheduled meeting, we will walk you through the draft and discuss improvements.</p>
                            </div>
                        </div>
                        <div class="thankyou-next-step">
                            <div class="thankyou-next-icon">
                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M6 15.5 9 18l3.5-4M8 6h8a2 2 0 0 1 2 2v8.5L16.5 14H8a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2Z" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-semibold">Refinement</h5>
                                <p>We implement your feedback and polish the design until everything aligns perfectly.</p>
                            </div>
                        </div>
                        <div class="thankyou-next-step">
                            <div class="thankyou-next-icon">
                                <svg fill="none" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path d="M4 11h11M4 8h11M4 14h7" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15 5.5h3a2 2 0 0 1 2 2v9.5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V5.5h11Z" stroke="#0f172a" stroke-width="1.5" stroke-linejoin="round" />
                                    <path d="m14 12 2 2 4-4" stroke="#0f172a" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div>
                                <h5 class="fw-semibold">Final Delivery</h5>
                                <p>Once complete, you will receive full access, files, and a complete project handover.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
