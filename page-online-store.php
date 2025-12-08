<?php
/*
Template Name: Sell Online Landing
*/

$theme_dir = get_template_directory_uri();
$logo_src = cz('tp_logo_img');
$logo_src = $logo_src ? set_url_scheme($logo_src, is_ssl() ? 'https' : 'http') : $theme_dir . '/images/logo.png';
$logo_alt = esc_attr(get_bloginfo('name'));
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Webmakerr Online Store</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --wmr-font: 'Inter', 'Segoe UI', system-ui, -apple-system, sans-serif;
      --wmr-primary: #0f172a;
      --wmr-accent: #1f2937;
      --wmr-surface: #ffffff;
      --wmr-subtle: #f5f7fb;
      --wmr-border: #e5e7eb;
      --wmr-radius: 16px;
    }

    * { box-sizing: border-box; }

    body {
      background: linear-gradient(180deg, #f8fafc 0%, #ffffff 24%);
      font-family: var(--wmr-font);
      color: #0b1224;
      line-height: 1.65;
      margin: 0;
    }

    h1, h2, h5 { color: var(--wmr-primary); letter-spacing: -0.01em; }
    p { color: #4b5563; }

    .btn-webmakerr {
      background: linear-gradient(135deg, #0f172a 0%, #111827 100%);
      color: #fff;
      border: 1px solid #0b1324;
      border-radius: 999px;
      padding: 0.7rem 1.6rem;
      font-weight: 600;
      letter-spacing: 0.01em;
      box-shadow: 0 14px 30px rgba(15, 23, 42, 0.18);
      transition: all 0.2s ease;
    }

    .btn-webmakerr:hover,
    .btn-webmakerr:focus {
      color: #fff;
      transform: translateY(-1px);
      box-shadow: 0 20px 44px rgba(15, 23, 42, 0.22);
    }

    .btn-webmakerr:active {
      transform: translateY(0);
      box-shadow: 0 10px 24px rgba(15, 23, 42, 0.18);
    }

    .hero {
      background: radial-gradient(120% 140% at 20% 10%, #e5f0ff 0%, #f8fafc 40%, #ffffff 100%);
    }

    .section-light { background:#f8f9fa; }

    .section-frame {
      background: var(--wmr-surface);
      border: 1px solid var(--wmr-border);
      border-radius: var(--wmr-radius);
      padding: clamp(22px, 3vw, 34px);
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
    }

    .section-frame + .section-frame { margin-top: clamp(18px, 3vw, 28px); }

    .faq-question { font-size: 1.1rem; font-weight: 600; }

    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: rgba(255, 255, 255, 0.94);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--wmr-border);
    }

    .header-logo { display: inline-flex; align-items: center; gap: 10px; font-weight: 700; color: var(--wmr-primary); text-decoration: none; }
    .header-logo img { height: 32px; width: auto; object-fit: contain; }

    .feature-card img,
    .logo-grid img,
    .feature-visual img {
      border-radius: 12px;
      border: 1px solid var(--wmr-border);
    }

    .cta-title { font-size: clamp(2rem, 4vw, 2.6rem); }

    .feature-card h5 { margin-bottom: 0.5rem; }

    .input-group .form-control {
      border-radius: 999px;
      border: 1px solid var(--wmr-border);
      padding-inline: 1.25rem;
      box-shadow: inset 0 1px 2px rgba(15, 23, 42, 0.05);
    }

    .input-group .form-control:focus {
      border-color: #2563eb;
      box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15);
    }

    .hero-mockup-main { max-width: 520px; }
    .hero-card { right: 48px; top: -70px; width: 170px; }

    @media (max-width: 991.98px) {
      .hero-card { position: relative !important; top: -18px; right: auto; margin-left: auto; margin-right: auto; display: block; }
    }

    @media (max-width: 575.98px) {
      .btn-webmakerr { width: 100%; justify-content: center; display: inline-flex; text-align: center; }
      header .btn-webmakerr { width: auto; }
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="py-3">
  <div class="container section-frame d-flex justify-content-between align-items-center flex-wrap gap-3">
    <a href="/" class="header-logo">
      <img src="<?php echo esc_url($logo_src); ?>" alt="<?php echo $logo_alt; ?>">
      <span>Webmakerr</span>
    </a>
    <a href="#cta" class="btn btn-webmakerr d-inline-flex align-items-center">Start for free</a>
  </div>
</header>

<!-- HERO -->
<section class="hero py-5">
  <div class="container section-frame">
    <div class="row align-items-center">
      
      <!-- LEFT TEXT -->
      <div class="col-lg-6 mb-5 mb-lg-0">
        <h1 class="fw-semibold display-5 mb-3">Start an online store for free</h1>
        <p class="text-secondary fs-5 mb-4">
          Webmakerr is the all-in-one platform to build, run, and grow your online boutique.
          Start free, then get 3 months for €1/month.
        </p>

        <!-- LEAD CAPTURE FORM -->
        <form class="online-store-lead-form" data-online-store-lead-form style="max-width:420px;">
          <div class="input-group input-group-lg mb-2">
            <input type="text" class="form-control rounded-pill ps-4" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-group input-group-lg mb-2">
            <input type="email" class="form-control rounded-pill ps-4" name="email" placeholder="Enter your email address" required>
          </div>
          <div class="d-flex align-items-center mb-2">
            <button type="submit" class="btn btn-webmakerr" data-submit>
              <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" data-spinner></span>
              Start free trial
            </button>
          </div>
          <div class="text-success small d-none" data-status="success">Thanks! Redirecting…</div>
          <div class="text-danger small d-none" data-status="error">Please enter a valid name and email.</div>
          <small class="text-muted d-block mt-2">You agree to receive Webmakerr marketing emails.</small>
        </form>
      </div>

      <!-- RIGHT MOCKUP -->
      <div class="col-lg-6 text-center position-relative feature-visual">
        <img src="https://via.placeholder.com/480x320?text=Main+Mockup" class="img-fluid rounded shadow hero-mockup-main" alt="Webmakerr online store preview">
        <img src="https://via.placeholder.com/160x200?text=Card" class="position-absolute shadow-sm rounded hero-card" alt="Webmakerr store card">
      </div>

    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5">
  <div class="container section-frame">
    <div class="row gy-4">
      <div class="col-md-4 text-center feature-card">
        <img src="https://via.placeholder.com/300?text=Image" class="img-fluid mb-3" alt="Feature illustration">
        <h5 class="fw-semibold">Fast, flexible checkout</h5>
        <p>Convert more visitors with optimized checkout flow.</p>
      </div>
      <div class="col-md-4 text-center feature-card">
        <img src="https://via.placeholder.com/300?text=Image" class="img-fluid mb-3" alt="Feature illustration">
        <h5 class="fw-semibold">Built-in AI tools</h5>
        <p>Manage your store, marketing and inventory effortlessly.</p>
      </div>
      <div class="col-md-4 text-center feature-card">
        <img src="https://via.placeholder.com/300?text=Image" class="img-fluid mb-3" alt="Feature illustration">
        <h5 class="fw-semibold">Secure & scalable hosting</h5>
        <p>99.9% uptime, unlimited products, and global infrastructure.</p>
      </div>
    </div>
  </div>
</section>

<!-- LOGO GROUP -->
<section class="section-light py-5 text-center">
  <div class="container section-frame">
    <h2 class="mb-5">Powering millions of businesses worldwide</h2>
    <div class="row gy-4 justify-content-center logo-grid">
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
    </div>
  </div>
</section>

<!-- LONG FEATURE SECTIONS -->
<section class="py-5">
  <div class="container section-frame">

    <!-- Section 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-semibold mb-3">Everything you need to sell online</h2>
        <p class="text-secondary">Manage products, payments, marketing and customers from one place.</p>
      </div>
      <div class="col-lg-6 text-center feature-visual">
        <img src="https://via.placeholder.com/500x300?text=Feature+Image" class="img-fluid rounded shadow" alt="Dashboard preview">
      </div>
    </div>

    <!-- Section 2 -->
    <div class="row align-items-center flex-lg-row-reverse">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-semibold mb-3">Reach customers everywhere</h2>
        <p class="text-secondary">Sell on social media, marketplaces, and across your own online store.</p>
      </div>
      <div class="col-lg-6 text-center feature-visual">
        <img src="https://via.placeholder.com/500x300?text=Feature+Image" class="img-fluid rounded shadow" alt="Marketing preview">
      </div>
    </div>

  </div>
</section>

<!-- FAQ SECTION -->
<section class="section-light py-5">
  <div class="container section-frame">
    <h2 class="fw-semibold text-center mb-5">Frequently asked questions</h2>

    <div class="accordion" id="faqAccordion">

      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button faq-question" data-bs-toggle="collapse" data-bs-target="#faq1">
            How much does it cost to start?
          </button>
        </h2>
        <div id="faq1" class="accordion-collapse collapse show">
          <div class="accordion-body">
            Start free, then get 3 months for €1/month. No credit card required to begin.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed faq-question" data-bs-toggle="collapse" data-bs-target="#faq2">
            Do I need technical skills?
          </button>
        </h2>
        <div id="faq2" class="accordion-collapse collapse">
          <div class="accordion-body">
            No. Everything is beginner-friendly with built-in guidance tools.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed faq-question" data-bs-toggle="collapse" data-bs-target="#faq3">
            Can I sell internationally?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse">
          <div class="accordion-body">
            Yes, you can sell globally with multi-currency and tax automation tools.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- IDEAS / PLATFORM CTA SECTION -->
<section class="py-5 section-light" id="cta">
  <div class="container section-frame text-center">

    <h2 class="fw-semibold mb-4 cta-title">
      Your ideas. Our platform.
    </h2>

    <div class="d-flex justify-content-center mb-2">
      <form class="online-store-lead-form w-100" data-online-store-lead-form style="max-width:480px;">
        <div class="input-group input-group-lg mb-2">
          <input type="text" class="form-control rounded-pill ps-4" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-group input-group-lg mb-2">
          <input type="email" class="form-control rounded-pill ps-4" name="email" placeholder="Enter your email address" required>
        </div>
        <div class="d-flex align-items-center mb-2">
          <button type="submit" class="btn btn-webmakerr w-100" data-submit>
            <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" data-spinner></span>
            Start free trial
          </button>
        </div>
        <div class="text-success small d-none" data-status="success">Thanks! Redirecting…</div>
        <div class="text-danger small d-none" data-status="error">Please enter a valid name and email.</div>
        <small class="text-muted d-block mt-2">You agree to receive Webmakerr marketing emails.</small>
      </form>
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer class="py-4 bg-light text-center">
  <div class="container section-frame">
    <div class="d-flex justify-content-center gap-4 flex-wrap small mb-2">
      <a href="/privacy-policy" class="text-decoration-none text-muted">Privacy Policy</a>
      <a href="/terms" class="text-decoration-none text-muted">Terms</a>
      <a href="/imprint" class="text-decoration-none text-muted">Imprint</a>
    </div>
    <small class="text-muted d-block">&copy; <?php echo date('Y'); ?> Webmakerr. All rights reserved.</small>
  </div>
</footer>

<script>
  (function () {
    var forms = document.querySelectorAll('[data-online-store-lead-form]');
    var webhookUrl = 'https://beta.webmakerr.com/?fluentcrm=1&route=contact&hash=35e76663-bd59-4c58-b66c-a4a4b055f175';

    if (!forms.length) {
      return;
    }

    forms.forEach(function (form) {
      var nameInput = form.querySelector('input[name="name"]');
      var emailInput = form.querySelector('input[name="email"]');
      var successAlert = form.querySelector('[data-status="success"]');
      var errorAlert = form.querySelector('[data-status="error"]');
      var spinner = form.querySelector('[data-spinner]');
      var submitBtn = form.querySelector('[data-submit]');

      var showStatus = function (type) {
        if (successAlert) {
          successAlert.classList.toggle('d-none', type !== 'success');
        }
        if (errorAlert) {
          errorAlert.classList.toggle('d-none', type !== 'error');
        }
      };

      var setLoading = function (isLoading) {
        if (submitBtn) {
          submitBtn.disabled = isLoading;
        }
        if (spinner) {
          spinner.classList.toggle('d-none', !isLoading);
        }
      };

      form.addEventListener('submit', function (event) {
        event.preventDefault();

        var name = nameInput ? nameInput.value.trim() : '';
        var email = emailInput ? emailInput.value.trim() : '';

        showStatus('');

        if (!name || !email) {
          showStatus('error');
          return;
        }

        setLoading(true);

        fetch(webhookUrl, {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json'
          },
          body: JSON.stringify({
            email: email,
            first_name: name
          })
        })
          .then(function (response) {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json().catch(function () {
              return {};
            });
          })
          .then(function () {
            form.reset();
            showStatus('success');
            window.location.href = '/thank-you-contact';
          })
          .catch(function () {
            showStatus('error');
          })
          .finally(function () {
            setLoading(false);
          });
      });
    });
  })();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
