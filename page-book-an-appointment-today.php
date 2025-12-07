<?php
/**
 * Template Name: Book an Appointment Today
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

$theme_dir = get_template_directory_uri();

get_header();
?>

<style>
    /* Hide default header/footer elements to deliver a distraction-free layout */
    .codex-header,
    .codex-offcanvas,
    .footer,
    .content-footer,
    .codex-header-actions,
    .codex-main-nav,
    .codex-header .navbar-toggler { display: none !important; }

    :root {
        --bs-border-radius: 4px;
        --bs-border-radius-sm: 4px;
        --bs-border-radius-lg: 4px;
        --bs-border-radius-xl: 4px;
        --bs-border-radius-xxl: 4px;
        --bs-border-radius-pill: 4px;
    }

    .rounded-circle { border-radius: 4px !important; }

    .appointment-shell {
        background: #f8fafc;
        min-height: 100vh;
        padding: clamp(32px, 4vw, 52px) 0 clamp(48px, 6vw, 72px);
    }

    .appointment-card {
        background: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        box-shadow: 0 18px 45px rgba(15, 23, 42, 0.08);
        padding: clamp(22px, 3vw, 34px);
        width: 100%;
    }

    .appointment-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: clamp(10px, 2vw, 20px);
        padding-bottom: 14px;
        margin-bottom: clamp(18px, 3vw, 30px);
        border-bottom: 1px solid #e5e7eb;
        flex-wrap: nowrap;
        min-width: 0;
    }

    .appointment-logo img {
        max-height: 42px;
        width: auto;
        display: block;
    }

    .rating-pill {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 999px;
        background: #0f172a;
        border: 1px solid #0f172a;
        color: #ffffff;
        font-weight: 600;
        white-space: nowrap;
        box-shadow: 0 10px 25px rgba(15, 23, 42, 0.12);
    }

    .rating-pill .rating-stars {
        display: inline-flex;
        gap: 4px;
        align-items: center;
        color: #ff9900;
    }

    .rating-pill .rating-stars svg {
        width: 18px;
        height: 18px;
        fill: #ff9900;
        stroke: #ff9900;
    }

    .appointment-form {
        margin-bottom: clamp(20px, 4vw, 36px);
    }

    .trust-points {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 16px;
    }

    .trust-point {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 14px 16px;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        background: #f9fafb;
    }

    .trust-icon {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        background: #ffffff;
        border: 1px solid #e2e8f0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 20px rgba(15, 23, 42, 0.06);
        flex-shrink: 0;
    }

    .trust-icon svg { width: 22px; height: 22px; stroke: #0f172a; stroke-width: 1.75; fill: none; }

    .trust-text h5 {
        margin: 0;
        font-size: 1rem;
        font-weight: 700;
        color: #0f172a;
    }

    .trust-text p {
        margin: 4px 0 0;
        color: #475569;
        font-size: 0.9375rem;
    }

    .minimal-footer {
        margin-top: clamp(28px, 5vw, 40px);
        padding-top: 18px;
        border-top: 1px solid #e5e7eb;
        display: flex;
        flex-direction: column;
        gap: 6px;
        align-items: center;
        text-align: center;
    }

    .minimal-footer a {
        color: #94a3b8;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.875rem;
    }

    .minimal-footer a:hover { color: #0f172a; }

    .minimal-footer small {
        color: #94a3b8;
        font-size: 0.8125rem;
        letter-spacing: 0.01em;
    }

    @media (max-width: 575.98px) {
        .appointment-card { padding: 18px; }
        .appointment-header { gap: 10px; }
        .appointment-logo img { max-height: 36px; }
        .rating-pill { padding: 8px 12px; font-size: 0.875rem; }
        .rating-pill .rating-stars svg { width: 16px; height: 16px; }
    }
</style>

<div class="appointment-shell">
    <div class="container-xl">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-10">
                <div class="appointment-card">
                    <div class="appointment-header">
                        <div class="appointment-logo" aria-label="Webmakerr">
                            <?php do_action('adstm_logo_header'); ?>
                        </div>
                        <div class="rating-pill" aria-label="5-Star Rating">
                            <div class="rating-stars" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M12 3.5 14.35 8.27 19.5 9.02l-3.72 3.63.88 5.12L12 15.96 7.34 17.77l.88-5.12L4.5 9.02l5.15-.75L12 3.5Z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 3.5 14.35 8.27 19.5 9.02l-3.72 3.63.88 5.12L12 15.96 7.34 17.77l.88-5.12L4.5 9.02l5.15-.75L12 3.5Z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 3.5 14.35 8.27 19.5 9.02l-3.72 3.63.88 5.12L12 15.96 7.34 17.77l.88-5.12L4.5 9.02l5.15-.75L12 3.5Z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 3.5 14.35 8.27 19.5 9.02l-3.72 3.63.88 5.12L12 15.96 7.34 17.77l.88-5.12L4.5 9.02l5.15-.75L12 3.5Z"/></svg>
                                <svg viewBox="0 0 24 24"><path d="M12 3.5 14.35 8.27 19.5 9.02l-3.72 3.63.88 5.12L12 15.96 7.34 17.77l.88-5.12L4.5 9.02l5.15-.75L12 3.5Z"/></svg>
                            </div>
                            <span>Rated</span>
                        </div>
                    </div>

                    <div class="appointment-form">
                        <?php echo do_shortcode('[booking id="1"]'); ?>
                    </div>

                    <div class="trust-points" aria-label="Why book with Webmakerr">
                        <div class="trust-point">
                            <div class="trust-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M4 12.75 9.5 18 20 6" /></svg>
                            </div>
                            <div class="trust-text">
                                <h5>Complimentary Strategy Session</h5>
                                <p>Secure a no-cost booking tailored to your goals.</p>
                            </div>
                        </div>
                        <div class="trust-point">
                            <div class="trust-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M7 12h10M7 16h6M7 8h10M4 21h16a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1z"/></svg>
                            </div>
                            <div class="trust-text">
                                <h5>No Obligations or Contracts</h5>
                                <p>Book with confidence—your time is commitment free.</p>
                            </div>
                        </div>
                        <div class="trust-point">
                            <div class="trust-icon" aria-hidden="true">
                                <svg viewBox="0 0 24 24"><path d="M12 3 4 7v7c0 5 4 7 8 7s8-2 8-7V7l-8-4z"/><path d="m9 12 2 2 4-4"/></svg>
                            </div>
                            <div class="trust-text">
                                <h5>Guidance from Certified Experts</h5>
                                <p>Speak directly with vetted specialists who deliver.</p>
                            </div>
                        </div>
                    </div>

                    <div class="minimal-footer">
                        <div class="d-flex align-items-center gap-2">
                            <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a>
                            <span class="text-muted">•</span>
                            <a href="<?php echo esc_url( home_url('/legal') ); ?>">Terms &amp; Conditions</a>
                        </div>
                        <small>&copy; 2025 Webmakerr. All rights reserved.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
