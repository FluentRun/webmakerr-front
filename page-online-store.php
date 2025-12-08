<?php
/*
Template Name: Sell Online Landing
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Online Store Landing Clone</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    :root {
      --bs-border-radius: 4px;
      --bs-border-radius-sm: 4px;
      --bs-border-radius-lg: 4px;
      --bs-border-radius-xl: 4px;
      --bs-border-radius-xxl: 4px;
      --bs-border-radius-pill: 4px;
    }

    body {
      background:#f8fafc;
      color: #0f172a;
      font-family: 'Inter', sans-serif;
      line-height: 1.6;
    }

    h1, h2, h5 { color: #0f172a; }
    p, .text-secondary { color: #475569 !important; }

    .hero {
      background: radial-gradient(circle at 20% 20%, rgba(96, 165, 250, 0.08), transparent 45%),
                  radial-gradient(circle at 80% 0%, rgba(167, 139, 250, 0.08), transparent 35%),
                  radial-gradient(circle at 50% 80%, rgba(16, 185, 129, 0.08), transparent 40%),
                  #f8fafc;
    }

    .section-light { background:#f8fafc; }
    .section-card { background:#fff; border:1px solid #e2e8f0; border-radius:4px; box-shadow:0 18px 40px rgba(15,23,42,0.08); }
    .faq-question { font-size: 1.1rem; font-weight: 600; color: #0f172a; }

    .btn {
      border-radius: 4px;
      font-weight: 600;
      letter-spacing: 0.01em;
    }

    .btn-dark {
      background-color: #0f172a;
      border-color: #0f172a;
      box-shadow: 0 10px 25px rgba(15, 23, 42, 0.15);
    }

    .btn-dark:hover {
      background-color: #111827;
      border-color: #111827;
      transform: translateY(-1px);
    }

    /* Sticky header */
    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: #fff;
      box-shadow: 0 8px 20px rgba(15, 23, 42, 0.05);
    }

    .page-header-logo img, .page-header-logo svg {
      max-height: 36px;
      width: auto;
    }

    .lead-form-shell {
      background: #fff;
      border: 1px solid #e2e8f0;
      box-shadow: 0 18px 40px rgba(15, 23, 42, 0.08);
      border-radius: 6px;
      padding: 24px;
    }

    .lead-form-shell .form-control {
      padding: 12px 14px;
      border-color: #e2e8f0;
    }

    .lead-form-shell .form-control:focus {
      box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
      border-color: #93c5fd;
    }

    .hero-visual {
      background: linear-gradient(135deg, #1877f2 50%, #000000 50%);
      border-radius: 6px;
      padding: 28px;
      min-height: 260px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 25px 50px rgba(15, 23, 42, 0.16);
      position: relative;
      overflow: hidden;
    }

    .hero-visual::before,
    .hero-visual::after {
      content: "";
      position: absolute;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.15);
      box-shadow: 0 15px 30px rgba(15, 23, 42, 0.18);
    }

    .hero-visual::before {
      width: 140px;
      height: 100px;
      top: 24px;
      left: 26px;
    }

    .hero-visual::after {
      width: 160px;
      height: 120px;
      bottom: 26px;
      right: 30px;
    }

    .hero-visual .feature-pills {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 12px;
      width: 100%;
      position: relative;
      z-index: 1;
    }

    .hero-visual .pill {
      background: #fff;
      border-radius: 6px;
      border: 1px solid #e5e7eb;
      padding: 10px 12px;
      font-weight: 600;
      color: #0f172a;
      text-align: center;
      box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
    }

    .feature-card img { display: none; }

    .feature-card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 6px;
      box-shadow: 0 12px 26px rgba(15, 23, 42, 0.08);
      padding: 24px 18px;
      height: 100%;
    }

    .feature-card h5 { font-size: 1.05rem; }

    .accordion-item { border: 1px solid #e2e8f0; border-radius: 6px; overflow: hidden; }

    .cta-card { max-width: 520px; margin: 0 auto; }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="py-3 bg-light border-bottom">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="page-header-logo d-flex align-items-center">
      <?php do_action('adstm_logo_header'); ?>
    </div>
    <a href="#" class="btn btn-dark btn-lg px-4">Start for free</a>
  </div>
</header>

<!-- HERO -->
<section class="hero py-5">
  <div class="container">
    <div class="row align-items-center g-4">

      <!-- LEFT FORM -->
      <div class="col-lg-5">
        <div class="lead-form-shell">
          <h1 class="fw-semibold display-5 mb-3">Start an online store for free</h1>
          <p class="text-secondary fs-5 mb-4">
            Webmakerr is the all-in-one platform to build, run, and grow your online boutique.
            Start free, then get 3 months for €1/month.
          </p>

          <form class="online-store-lead-form" data-online-store-lead-form>
            <div class="mb-3">
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="d-flex align-items-center mb-2">
              <button type="submit" class="btn btn-dark btn-lg px-4" data-submit>
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

      <!-- RIGHT VISUALS -->
      <div class="col-lg-7">
        <div class="hero-visual">
          <div class="feature-pills">
            <div class="pill">Fast checkout</div>
            <div class="pill">AI tools</div>
            <div class="pill">Secure hosting</div>
            <div class="pill">Global reach</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-4">
        <div class="feature-card h-100 text-center">
          <h5 class="fw-semibold">Fast, flexible checkout</h5>
          <p class="mb-0">Convert more visitors with optimized checkout flow.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card h-100 text-center">
          <h5 class="fw-semibold">Built-in AI tools</h5>
          <p class="mb-0">Manage your store, marketing and inventory effortlessly.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="feature-card h-100 text-center">
          <h5 class="fw-semibold">Secure & scalable hosting</h5>
          <p class="mb-0">99.9% uptime, unlimited products, and global infrastructure.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- LOGO GROUP -->
<section class="section-light py-5 text-center">
  <div class="container">
    <h2 class="mb-5">Powering millions of businesses worldwide</h2>
    <div class="row gy-4 justify-content-center">
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid"></div>
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid"></div>
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid"></div>
      <div class="col-4 col-sm-3 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid"></div>
    </div>
  </div>
</section>

<!-- LONG FEATURE SECTIONS -->
<section class="py-5">
  <div class="container">

    <!-- Section 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="section-card p-4">
          <h2 class="fw-semibold mb-3">Everything you need to sell online</h2>
          <p class="text-secondary">Manage products, payments, marketing and customers from one place.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="section-card p-4 h-100 d-flex align-items-center justify-content-center">
          <div class="hero-visual" style="min-height: 200px; box-shadow:none;">
            <div class="feature-pills">
              <div class="pill">Payments</div>
              <div class="pill">Automation</div>
              <div class="pill">Inventory</div>
              <div class="pill">Insights</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="row align-items-center flex-lg-row-reverse">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="section-card p-4">
          <h2 class="fw-semibold mb-3">Reach customers everywhere</h2>
          <p class="text-secondary">Sell on social media, marketplaces, and across your own online store.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="section-card p-4 h-100 d-flex align-items-center justify-content-center">
          <div class="hero-visual" style="min-height: 200px; box-shadow:none;">
            <div class="feature-pills">
              <div class="pill">Social</div>
              <div class="pill">Marketplaces</div>
              <div class="pill">Storefront</div>
              <div class="pill">Campaigns</div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- FAQ SECTION -->
<section class="section-light py-5">
  <div class="container">
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
<section class="py-5" style="background:#f5f5f5;">
  <div class="container text-center">

    <h2 class="fw-semibold mb-4" style="font-size:2.5rem;">
      Your ideas. Our platform.
    </h2>

    <div class="d-flex justify-content-center mb-2">
      <div class="lead-form-shell cta-card w-100">
        <form class="online-store-lead-form w-100" data-online-store-lead-form>
          <div class="mb-3">
            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <input type="email" class="form-control" name="email" placeholder="Enter your email address" required>
          </div>
          <div class="d-flex align-items-center mb-2">
            <button type="submit" class="btn btn-dark btn-lg px-4" data-submit>
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

  </div>
</section>

<!-- FOOTER -->
<footer class="py-4 bg-light text-center">
  <div class="container">
    <p class="mb-0">&copy; 2025 Your Company Name. All rights reserved.</p>
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
