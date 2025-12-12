<?php
/**
 * Template Name: Thank You - Webmakerr Cart
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

$license_key = 'EC89C417C50DE25AE5A26A7B9E35E352';

get_header();
?>

<main class="page-thank-you-webmakerr-cart pb-5">
    <section class="py-5 bg-light border-bottom">
        <div class="container py-lg-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <p class="text-primary fw-semibold mb-3 d-inline-flex align-items-center gap-2">
                        <span class="badge bg-primary-subtle text-primary border border-primary-subtle">Success</span>
                        <span>Welcome to Webmakerr Cart</span>
                    </p>
                    <h1 class="display-5 fw-bold mb-3">Thank you for choosing Webmakerr Cart</h1>
                    <p class="lead text-secondary mb-4">
                        Your purchase is confirmed. Use the license key below to activate unlimited access and start growing with Webmakerr Cart.
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a class="btn btn-primary btn-lg" href="#license-key">View License Key</a>
                        <a class="btn btn-outline-dark btn-lg" href="<?php echo esc_url( home_url( '/webmakerr-cart/' ) ); ?>">Learn more</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="p-4 bg-white border rounded-4 shadow-sm h-100 d-flex flex-column gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="bg-primary text-white rounded-3 p-3 d-inline-flex align-items-center justify-content-center flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 4.97-4.03 9-9 9s-9-4.03-9-9 4.03-9 9-9 9 4.03 9 9Z" />
                                </svg>
                            </div>
                            <div>
                                <p class="mb-1 text-secondary">Status</p>
                                <h5 class="mb-0">Purchase confirmed</h5>
                            </div>
                        </div>
                        <div class="border rounded-3 p-3 bg-light">
                            <p class="mb-1 text-secondary">License</p>
                            <p class="mb-0 fw-semibold">Lifetime valid</p>
                        </div>
                        <div class="d-flex align-items-center gap-2 text-secondary">
                            <span class="text-success">●</span>
                            <small class="fw-semibold text-success">Ready to activate</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="license-key" class="py-5">
        <div class="container py-lg-4">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <div class="bg-white border rounded-4 p-4 p-lg-5 shadow-sm h-100">
                        <div class="d-flex flex-column gap-3">
                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                <h2 class="h3 mb-0">Your Webmakerr Cart license</h2>
                                <span class="badge bg-success-subtle text-success border border-success-subtle">Lifetime valid</span>
                            </div>
                            <p class="text-secondary mb-0">Copy and paste this key into the License Activation screen inside the Webmakerr Cart plugin.</p>
                            <div class="d-flex flex-column flex-lg-row align-items-stretch gap-3">
                                <div class="form-control fs-5 text-monospace bg-light border-dark-subtle py-3" aria-label="License key" readonly><?php echo esc_html( $license_key ); ?></div>
                                <button class="btn btn-primary btn-lg w-100" type="button" data-license-key="<?php echo esc_attr( $license_key ); ?>" id="copy-license-key">Copy License Key</button>
                            </div>
                            <div class="d-flex align-items-center gap-2 text-success small d-none" id="copy-license-feedback" role="status">
                                <span>✓</span>
                                <span>License key copied</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-light border rounded-4 p-4 p-lg-5 h-100">
                        <h3 class="h4 fw-bold mb-3">Activate in minutes</h3>
                        <p class="text-secondary">Follow these steps to install and activate Webmakerr Cart.</p>
                        <ol class="ps-3 mb-0 d-flex flex-column gap-2 text-secondary">
                            <li>Check your email for the download link to the Webmakerr Cart plugin.</li>
                            <li>Download the plugin ZIP file.</li>
                            <li>Go to <strong>WordPress Admin → Plugins → Add New → Upload Plugin</strong>.</li>
                            <li>Upload and install the ZIP file.</li>
                            <li>Activate the plugin.</li>
                            <li>Open the <strong>License Activation</strong> screen in Webmakerr Cart.</li>
                            <li>Paste the provided license key and activate.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    (function() {
        const copyButton = document.getElementById('copy-license-key');
        const feedback = document.getElementById('copy-license-feedback');

        if (!copyButton || !navigator.clipboard || !navigator.clipboard.writeText) {
            return;
        }

        copyButton.addEventListener('click', function() {
            const licenseKey = copyButton.dataset.licenseKey || '';

            navigator.clipboard.writeText(licenseKey)
                .then(function() {
                    feedback.classList.remove('d-none');
                })
                .catch(function() {
                    feedback.classList.add('d-none');
                });
        });
    })();
</script>

<?php get_footer(); ?>
