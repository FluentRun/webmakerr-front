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

    .page-404-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 4px;
        box-shadow: 0 15px 30px rgba(15, 23, 42, 0.08);
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-8">
                <div class="page-404-card p-4 p-lg-5">
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

                    <div class="text-center text-md-start">
                        <h1 class="fw-bold display-5 mb-3"><?php esc_html_e( 'We couldn\'t find that page.', 'rap' ); ?></h1>
                        <p class="fs-5 text-muted mb-4"><?php echo wp_kses_post( cz( 'tp_404_text' ) ); ?></p>
                    </div>

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
        </div>
    </div>
</main>

<?php
get_footer();
?>
