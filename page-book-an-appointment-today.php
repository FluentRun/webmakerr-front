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
        padding: clamp(20px, 3vw, 32px);
        max-width: 960px;
        margin: 0 auto;
    }

    .appointment-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding-bottom: 12px;
        margin-bottom: clamp(16px, 3vw, 28px);
        border-bottom: 1px solid #e5e7eb;
    }

    .appointment-logo img {
        max-height: 46px;
        width: auto;
        display: block;
    }

    .rating-pill {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 10px 14px;
        border-radius: 999px;
        background: linear-gradient(135deg, #f9fafb, #eef2f7);
        border: 1px solid #e2e8f0;
        color: #0f172a;
        font-weight: 600;
        white-space: nowrap;
    }

    .rating-pill svg { width: 20px; height: 20px; stroke: #f59e0b; fill: none; }

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
        gap: 8px;
        align-items: flex-start;
    }

    .minimal-footer a {
        color: #0f172a;
        text-decoration: none;
        font-weight: 600;
    }

    .minimal-footer a:hover { text-decoration: underline; }

    .minimal-footer small { color: #64748b; }

    @media (max-width: 575.98px) {
        .appointment-card { padding: 18px; }
        .appointment-header { flex-direction: column; align-items: flex-start; }
        .rating-pill { align-self: flex-start; }
    }
</style>

<div class="appointment-shell">
    <div class="appointment-card">
        <div class="appointment-header">
            <div class="appointment-logo" aria-label="Webmakerr">
                <?php do_action('adstm_logo_header'); ?>
            </div>
            <div class="rating-pill" aria-label="5-Star Google Rating">
                <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 3.5l2.35 4.77 5.15.75-3.72 3.63.88 5.12L12 15.96l-4.66 2.45.88-5.12L4.5 9.02l5.15-.75L12 3.5z"/></svg>
                <span>5-Star Google Rating</span>
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
            <a href="<?php echo esc_url( home_url('/privacy-policy') ); ?>">Privacy Policy</a>
            <small>&copy; <?php echo esc_html( date('Y') ); ?> Webmakerr. All rights reserved.</small>
        </div>
    </div>
</div>

<?php get_footer(); ?>
