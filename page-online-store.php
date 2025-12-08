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
      background: #0f172a;
      color: #0f172a;
      font-family: 'Inter', sans-serif;
    }

    h1,
    h2,
    h5 {
      color: #0f172a;
    }

    p,
    .text-secondary {
      color: #475569 !important;
    }

    .btn-dark {
      background: linear-gradient(135deg, #0f172a, #111827);
      border-color: #0f172a;
      box-shadow: 0 15px 30px rgba(15, 23, 42, 0.16);
      transition: transform 180ms ease, box-shadow 180ms ease;
    }

    .btn-dark:hover {
      background: linear-gradient(135deg, #111827, #000000);
      border-color: #0f172a;
      transform: translateY(-1px);
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.2);
    }

    .btn,
    .form-control {
      border-radius: 4px;
    }

    /* Sticky header */
    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: #fff;
    }

    .page-header-logo img,
    .page-header-logo svg {
      max-height: 36px;
      width: auto;
    }

    .page-shell {
      background: #0f172a;
    }

    .content-shell {
      background: #f8fafc;
      min-height: 100vh;
    }

    .hero {
      background: linear-gradient(135deg, #111827 0%, #0f172a 45%, #0b1220 100%);
      border-bottom: 1px solid rgba(255, 255, 255, 0.06);
      color: #e2e8f0;
    }

    .hero .headline {
      color: #f8fafc;
      font-size: clamp(2rem, 1.2rem + 2vw, 3rem);
    }

    .hero .eyebrow {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.4rem 0.8rem;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.08);
      color: #e2e8f0;
      font-weight: 600;
      letter-spacing: 0.01em;
    }

    .hero .eyebrow svg {
      width: 18px;
      height: 18px;
      stroke: currentColor;
      stroke-width: 2;
      fill: none;
    }

    .lead-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      box-shadow: 0 20px 50px rgba(15, 23, 42, 0.18);
      padding: 24px;
    }

    .lead-card label {
      font-weight: 600;
      color: #0f172a;
    }

    .lead-card .form-control {
      border: 1px solid #e2e8f0;
      padding: 0.85rem 1rem;
      font-size: 1rem;
      box-shadow: inset 0 1px 2px rgba(15, 23, 42, 0.04);
    }

    .lead-card .form-control:focus {
      border-color: #2563eb;
      box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.2);
    }

    .lead-card .btn {
      width: 100%;
      padding-block: 0.9rem;
      font-size: 1.05rem;
      font-weight: 700;
      letter-spacing: 0.01em;
      text-transform: none;
    }

    .hero-details {
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.08);
      border-radius: 10px;
      padding: 24px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.22);
    }

    .hero-details h1,
    .hero-details h2,
    .hero-details p,
    .hero-details li {
      color: #e2e8f0;
    }

    .hero-details .stat-card {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      padding: 0.85rem 1rem;
      border-radius: 8px;
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.08);
    }

    .hero-details .stat-icon {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      border-radius: 10px;
      background: linear-gradient(135deg, #38bdf8, #2563eb);
      color: #fff;
      font-weight: 700;
      letter-spacing: 0.01em;
      box-shadow: 0 10px 25px rgba(56, 189, 248, 0.35);
    }

    .hero-details .list-check {
      list-style: none;
      padding: 0;
      margin: 0;
      display: grid;
      gap: 0.65rem;
    }

    .hero-details .list-check li {
      display: flex;
      gap: 0.6rem;
      align-items: flex-start;
      font-weight: 500;
    }

    .hero-details .list-check svg {
      width: 18px;
      height: 18px;
      stroke: #38bdf8;
      stroke-width: 2.3;
      fill: none;
      margin-top: 2px;
    }

    .section-light {
      background: #f8fafc;
    }

    .section-muted {
      background: #eef2f7;
    }

    .feature-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1.25rem;
    }

    .feature-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      padding: 1.4rem;
      box-shadow: 0 12px 32px rgba(15, 23, 42, 0.08);
      height: 100%;
    }

    .feature-card .icon-pill {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      background: linear-gradient(135deg, #e0f2fe, #dbeafe);
      display: grid;
      place-items: center;
      color: #0f172a;
      font-weight: 700;
      margin-bottom: 1rem;
      box-shadow: 0 10px 28px rgba(59, 130, 246, 0.28);
    }

    .feature-card h5 {
      color: #0f172a;
    }

    .logo-pill {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 999px;
      padding: 0.9rem 1.4rem;
      font-weight: 600;
      box-shadow: 0 10px 24px rgba(15, 23, 42, 0.08);
      color: #0f172a;
    }

    .panel {
      background: linear-gradient(135deg, #ffffff, #eef2f7);
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 2rem;
      box-shadow: 0 14px 36px rgba(15, 23, 42, 0.12);
      height: 100%;
    }

    .faq-question {
      font-size: 1.1rem;
      font-weight: 600;
      color: #0f172a;
    }

    .cta-shell {
      background: linear-gradient(135deg, #111827, #0f172a);
      color: #f8fafc;
      border-radius: 12px;
      padding: 3rem 2rem;
      box-shadow: 0 20px 45px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="py-3 bg-light border-bottom">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="page-header-logo d-flex align-items-center">
      <?php do_action('adstm_logo_header'); ?>
    </div>
    <a href="#" class="btn btn-dark px-4">Start for free</a>
  </div>
</header>

<!-- HERO -->
<div class="content-shell">
  <section class="hero py-5">
    <div class="container">
      <div class="row align-items-center g-5">
        <!-- LEAD CAPTURE FORM -->
        <div class="col-lg-5">
          <div class="lead-card">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <div class="fw-semibold text-secondary">Start for free</div>
              <div class="badge bg-light text-dark fw-semibold">No credit card</div>
            </div>
            <form class="online-store-lead-form" data-online-store-lead-form>
              <div class="mb-3">
                <label class="form-label" for="lead-name">Full name</label>
                <input type="text" class="form-control" id="lead-name" name="name" placeholder="Enter your name" required>
              </div>
              <div class="mb-3">
                <label class="form-label" for="lead-email">Work email</label>
                <input type="email" class="form-control" id="lead-email" name="email" placeholder="Enter your email address" required>
              </div>
              <div class="d-flex align-items-center mb-2">
                <button type="submit" class="btn btn-dark" data-submit>
                  <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" data-spinner></span>
                  Start for Free
                </button>
              </div>
              <div class="text-success small d-none" data-status="success">Thanks! Redirecting…</div>
              <div class="text-danger small d-none" data-status="error">Please enter a valid name and email.</div>
              <small class="text-muted d-block mt-2">You agree to receive Webmakerr marketing emails.</small>
            </form>
          </div>
        </div>

        <!-- HERO DETAILS -->
        <div class="col-lg-7">
          <div class="hero-details">
            <div class="eyebrow mb-3">
              <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 12l2 2 4-4"/><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              Omnichannel commerce made simple
            </div>
            <h1 class="headline fw-bold mb-3">Start an online store with the Webmakerr launch kit</h1>
            <p class="mb-4">Design your storefront, automate marketing, and scale securely on the same platform. Start free, then get 3 months for €1/month.</p>
            <ul class="list-check mb-4">
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Sell across social, search, and marketplaces with unified inventory.
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Built-in AI writes product copy, emails, and ad creative in seconds.
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Enterprise-grade checkout, payments, and fraud protection.
              </li>
            </ul>
            <div class="row g-3">
              <div class="col-md-6">
                <div class="stat-card">
                  <div class="stat-icon">3m</div>
                  <div>
                    <div class="fw-semibold text-white">Launch fast</div>
                    <small class="text-secondary">Get live in under 3 minutes.</small>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="stat-card">
                  <div class="stat-icon">99%</div>
                  <div>
                    <div class="fw-semibold text-white">Reliability</div>
                    <small class="text-secondary">Global CDN with 99.9% uptime.</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- FEATURES -->
  <section class="py-5">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
        <div>
          <p class="text-secondary mb-2 fw-semibold">Platform advantages</p>
          <h2 class="fw-bold mb-0">All the tools you need to ship and scale</h2>
        </div>
        <div class="badge bg-dark text-white">Made with Webmakerr</div>
      </div>
      <div class="feature-grid">
        <div class="feature-card">
          <div class="icon-pill">AI</div>
          <h5 class="fw-semibold mb-2">AI-first workflows</h5>
          <p class="mb-0 text-secondary">Generate product descriptions, campaigns, and ad creatives without leaving your dashboard.</p>
        </div>
        <div class="feature-card">
          <div class="icon-pill">UX</div>
          <h5 class="fw-semibold mb-2">Conversion-optimized checkout</h5>
          <p class="mb-0 text-secondary">Delight shoppers with one-click checkout, accelerated payments, and trust badges on every page.</p>
        </div>
        <div class="feature-card">
          <div class="icon-pill">HQ</div>
          <h5 class="fw-semibold mb-2">Unified operations</h5>
          <p class="mb-0 text-secondary">Manage orders, shipping, and support from one control center with real-time insights.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- LOGO GROUP -->
  <section class="section-light py-5 text-center">
    <div class="container">
      <h2 class="fw-bold mb-4">Trusted by modern brands</h2>
      <div class="d-flex flex-wrap justify-content-center gap-3 gap-md-4">
        <div class="logo-pill">Northwind Outfitters</div>
        <div class="logo-pill">Drift Labs</div>
        <div class="logo-pill">Lumina Beauty</div>
        <div class="logo-pill">Evergreen Supply</div>
      </div>
    </div>
  </section>

  <!-- LONG FEATURE SECTIONS -->
  <section class="py-5 section-muted">
    <div class="container">
      <div class="row g-4 align-items-stretch mb-4">
        <div class="col-lg-6">
          <div class="panel h-100">
            <p class="text-secondary fw-semibold mb-2">Storefront</p>
            <h2 class="fw-bold mb-3">Everything you need to sell online</h2>
            <p class="text-secondary mb-3">Launch premium product pages, embed video, and upsell with dynamic recommendations tailored to every visitor.</p>
            <ul class="list-check">
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Flexible templates that mirror the front page look and feel.
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Built-in SEO and schema so products rank out of the box.
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="panel h-100">
            <p class="text-secondary fw-semibold mb-2">Growth</p>
            <h2 class="fw-bold mb-3">Reach customers everywhere</h2>
            <p class="text-secondary mb-3">Connect storefront, ads, and email for consistent messaging across every channel.</p>
            <ul class="list-check">
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Publish to social shops and marketplaces while syncing inventory.
              </li>
              <li>
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M5 12l4 4L19 7"/></svg>
                Automated abandoned-cart journeys that feel on-brand.
              </li>
            </ul>
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
  <section class="py-5">
    <div class="container">
      <div class="cta-shell">
        <div class="row align-items-center g-4">
          <div class="col-lg-6 text-lg-start text-center">
            <p class="text-secondary fw-semibold mb-2">Launch today</p>
            <h2 class="fw-bold mb-3 text-white">Your ideas. Our platform.</h2>
            <p class="mb-0 text-secondary">Claim the Webmakerr launch offer, pair it with your favorite channels, and start selling in minutes.</p>
          </div>
          <div class="col-lg-6">
            <div class="lead-card">
              <form class="online-store-lead-form" data-online-store-lead-form>
                <div class="mb-3">
                  <label class="form-label" for="cta-name">Full name</label>
                  <input type="text" class="form-control" id="cta-name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cta-email">Work email</label>
                  <input type="email" class="form-control" id="cta-email" name="email" placeholder="Enter your email address" required>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <button type="submit" class="btn btn-dark" data-submit>
                    <span class="spinner-border spinner-border-sm me-2 d-none" role="status" aria-hidden="true" data-spinner></span>
                    Start for Free
                  </button>
                </div>
                <div class="text-success small d-none" data-status="success">Thanks! Redirecting…</div>
                <div class="text-danger small d-none" data-status="error">Please enter a valid name and email.</div>
                <small class="text-muted d-block mt-2">You agree to receive Webmakerr marketing emails.</small>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>


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
