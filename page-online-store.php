<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Online Store Landing Clone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <style>
    :root {
      --primary: #111827;
      --accent: #111;
      --muted: #6b7280;
    }

    body { background: #fff; color: var(--primary); font-family: 'Inter', system-ui, -apple-system, sans-serif; }

    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: #fff;
      box-shadow: 0 1px 0 rgba(0, 0, 0, 0.04);
    }

    .hero {
      background: radial-gradient(circle at 20% 20%, rgba(17, 24, 39, 0.05), transparent 25%),
      radial-gradient(circle at 80% 10%, rgba(17, 24, 39, 0.05), transparent 25%),
      linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
    }

    .hero .lead-card {
      border-radius: 18px;
      border: 1px solid #e5e7eb;
    }

    .pill-badge {
      display: inline-flex;
      align-items: center;
      padding: 6px 12px;
      background: rgba(17, 24, 39, 0.06);
      border-radius: 999px;
      font-weight: 600;
      font-size: 0.9rem;
      letter-spacing: -0.01em;
    }

    .pill-badge span {
      background: #111827;
      color: #fff;
      border-radius: 999px;
      width: 24px;
      height: 24px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 0.8rem;
      margin-right: 8px;
    }

    .feature-icon {
      width: 44px;
      height: 44px;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: rgba(17, 24, 39, 0.08);
      color: #111827;
      font-weight: 700;
      margin-bottom: 12px;
    }

    .section-light { background: #f8f9fa; }

    .step-number {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: #111827;
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      margin-right: 14px;
    }

    .cta-banner {
      background: linear-gradient(120deg, #111827, #0f172a);
      color: #fff;
      border-radius: 20px;
    }

    .trust-logos img { opacity: 0.8; filter: grayscale(1); transition: 0.2s ease; }
    .trust-logos img:hover { opacity: 1; filter: grayscale(0); }

    .faq-question { font-size: 1.05rem; font-weight: 600; }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="py-3 bg-white border-bottom">
  <div class="container d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center gap-3">
      <img src="https://via.placeholder.com/120x30?text=Logo" height="30" alt="Logo">
      <span class="text-secondary small">Commerce that converts</span>
    </div>
    <div class="d-flex align-items-center gap-3">
      <a href="#conversion-form" class="text-dark fw-semibold">Talk to sales</a>
      <a href="#conversion-form" class="btn btn-dark rounded-pill px-4">Start for free</a>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="hero py-5 py-lg-6">
  <div class="container">
    <div class="row align-items-center gy-4">

      <!-- LEFT TEXT -->
      <div class="col-lg-6">
        <div class="pill-badge mb-3"><span>★</span>Launch faster & sell more</div>
        <h1 class="fw-semibold display-5 mb-3">Launch a polished online store in days, not months.</h1>
        <p class="text-secondary fs-5 mb-4">
          Pair high-converting storefronts with AI merchandising, built-in payments, and 24/7 support. Get everything you need to capture traffic and turn it into revenue.
        </p>

        <ul class="list-unstyled d-grid gap-2 text-secondary mb-4">
          <li class="d-flex align-items-start"><span class="me-2">✓</span> Proven templates and checkout optimized for mobile shoppers.</li>
          <li class="d-flex align-items-start"><span class="me-2">✓</span> Automated marketing and upsells without extra apps.</li>
          <li class="d-flex align-items-start"><span class="me-2">✓</span> Global selling with taxes, shipping, and inventory in one place.</li>
        </ul>

        <div class="d-flex flex-wrap gap-3 align-items-center mb-4">
          <a href="#conversion-form" class="btn btn-dark btn-lg rounded-pill px-4">Get free launch kit</a>
          <a href="#growth-highlights" class="btn btn-outline-dark btn-lg rounded-pill px-4">See how it works</a>
        </div>

        <div class="d-flex align-items-center gap-3 text-secondary">
          <div class="d-flex align-items-center">
            <div class="rounded-circle bg-dark text-white d-inline-flex align-items-center justify-content-center" style="width:38px;height:38px;">24/7</div>
            <div class="ms-2 small">Live experts when you need them</div>
          </div>
          <div class="small">Trusted by 70k+ growing stores</div>
        </div>
      </div>

      <!-- RIGHT FORM CARD -->
      <div class="col-lg-6">
        <div class="card shadow-sm lead-card p-4" id="conversion-form">
          <div class="d-flex align-items-center justify-content-between mb-2">
            <div>
              <p class="text-uppercase small fw-semibold text-secondary mb-1">Get started</p>
              <h4 class="fw-semibold mb-0">Claim your free launch kit</h4>
            </div>
            <div class="feature-icon mb-0">🚀</div>
          </div>
          <p class="text-secondary mb-4">Access our templates, onboarding checklist, and a 1:1 strategy call to map your first sales week.</p>

          <form data-lead-form class="needs-validation" novalidate>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="leadName">Name</label>
              <input type="text" id="leadName" name="name" class="form-control form-control-lg" placeholder="Your full name" required>
            </div>
            <div class="mb-3">
              <label class="form-label fw-semibold" for="leadEmail">Email</label>
              <input type="email" id="leadEmail" name="email" class="form-control form-control-lg" placeholder="you@example.com" required>
            </div>
            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-dark btn-lg rounded-pill" data-lead-submit>
                Start free trial
                <span class="spinner-border spinner-border-sm ms-2 d-none" aria-hidden="true" data-lead-spinner></span>
              </button>
              <small class="text-secondary">No credit card needed. Cancel anytime.</small>
            </div>
            <div class="alert alert-success d-none mt-3" role="alert" data-lead-success>
              You're in! Redirecting to your confirmation...
            </div>
            <div class="alert alert-danger d-none mt-3" role="alert" data-lead-error>
              Please add your name and email to continue. If the issue persists, try again.
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- TRUSTED BRANDS -->
<section class="py-5 section-light">
  <div class="container text-center">
    <p class="text-uppercase small fw-semibold text-secondary mb-2">Trusted by modern brands</p>
    <h2 class="fw-semibold mb-4">Powering millions of businesses worldwide</h2>
    <div class="row gy-4 justify-content-center trust-logos">
      <div class="col-6 col-sm-4 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-6 col-sm-4 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-6 col-sm-4 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-6 col-sm-4 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
      <div class="col-6 col-sm-4 col-md-2"><img src="https://via.placeholder.com/200x80?text=Logo" class="img-fluid" alt="Brand logo"></div>
    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5" id="growth-highlights">
  <div class="container">
    <div class="row justify-content-between align-items-end mb-4">
      <div class="col-lg-7">
        <h2 class="fw-semibold mb-3">Everything you need to sell online</h2>
        <p class="text-secondary">Handle products, payments, marketing, and shipping in one place. Launch confidently with built-in conversion best practices.</p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="#conversion-form" class="btn btn-outline-dark rounded-pill">Start for free</a>
      </div>
    </div>

    <div class="row gy-4">
      <div class="col-md-4">
        <div class="p-4 h-100 border rounded-4 shadow-sm">
          <div class="feature-icon">🛒</div>
          <h5 class="fw-semibold">Fast, flexible checkout</h5>
          <p class="text-secondary mb-0">Convert more visitors with mobile-first checkout, one-click pay, and tailored upsells.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 h-100 border rounded-4 shadow-sm">
          <div class="feature-icon">🤖</div>
          <h5 class="fw-semibold">Built-in AI tools</h5>
          <p class="text-secondary mb-0">Generate product descriptions, schedule campaigns, and automate merchandising in minutes.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="p-4 h-100 border rounded-4 shadow-sm">
          <div class="feature-icon">🔒</div>
          <h5 class="fw-semibold">Secure & scalable</h5>
          <p class="text-secondary mb-0">99.9% uptime, PCI-compliant payments, and infrastructure ready for flash sales.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- RESULTS SECTION -->
<section class="py-5 section-light">
  <div class="container">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-5">
        <p class="text-uppercase small fw-semibold text-secondary mb-2">Outcomes you can measure</p>
        <h2 class="fw-semibold mb-3">Reach customers everywhere</h2>
        <p class="text-secondary mb-4">Sell on social, marketplaces, and your storefront with unified analytics. Get alerts when opportunities or risks appear so you can act fast.</p>
        <div class="d-grid gap-3">
          <div class="d-flex align-items-center p-3 border rounded-4 bg-white">
            <div class="step-number">+32%</div>
            <div>
              <h6 class="fw-semibold mb-1">Average lift in checkout conversions</h6>
              <p class="text-secondary mb-0">When merchants switch to our accelerated checkout experience.</p>
            </div>
          </div>
          <div class="d-flex align-items-center p-3 border rounded-4 bg-white">
            <div class="step-number"><span class="fs-5">2x</span></div>
            <div>
              <h6 class="fw-semibold mb-1">More sales channels</h6>
              <p class="text-secondary mb-0">Launch on Instagram, TikTok, Amazon, and your own store with one catalog.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="p-4 h-100 border rounded-4 bg-white shadow-sm">
              <h6 class="fw-semibold">Everything in one dashboard</h6>
              <p class="text-secondary">Track inventory, fulfillment, and customer segments without hopping between tools.</p>
              <img src="https://via.placeholder.com/500x320?text=Dashboard" class="img-fluid rounded" alt="Dashboard preview">
            </div>
          </div>
          <div class="col-md-6">
            <div class="p-4 h-100 border rounded-4 bg-white shadow-sm">
              <h6 class="fw-semibold">Automated campaigns</h6>
              <p class="text-secondary">Build abandoned cart flows, winback journeys, and product drops with drag-and-drop automation.</p>
              <img src="https://via.placeholder.com/500x320?text=Automation" class="img-fluid rounded" alt="Automation preview">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- STEP-BY-STEP -->
<section class="py-5">
  <div class="container">
    <div class="row align-items-center gy-4">
      <div class="col-lg-5">
        <p class="text-uppercase small fw-semibold text-secondary mb-2">Simple path to launch</p>
        <h2 class="fw-semibold mb-3">Get selling in three focused steps</h2>
        <p class="text-secondary">We combine setup guidance, conversion design, and traffic playbooks so you can move quickly.</p>
        <a href="#conversion-form" class="btn btn-dark rounded-pill px-4">Talk to an expert</a>
      </div>
      <div class="col-lg-7">
        <div class="d-grid gap-3">
          <div class="d-flex align-items-start p-4 border rounded-4 shadow-sm bg-white">
            <div class="step-number">1</div>
            <div>
              <h6 class="fw-semibold mb-1">Pick your conversion-ready template</h6>
              <p class="text-secondary mb-0">Choose from launch-proven storefronts tailored for fashion, beauty, lifestyle, and more.</p>
            </div>
          </div>
          <div class="d-flex align-items-start p-4 border rounded-4 shadow-sm bg-white">
            <div class="step-number">2</div>
            <div>
              <h6 class="fw-semibold mb-1">Add products & payments</h6>
              <p class="text-secondary mb-0">Sync your catalog, connect payments, and preview your checkout on mobile and desktop.</p>
            </div>
          </div>
          <div class="d-flex align-items-start p-4 border rounded-4 shadow-sm bg-white">
            <div class="step-number">3</div>
            <div>
              <h6 class="fw-semibold mb-1">Ship your first campaign</h6>
              <p class="text-secondary mb-0">Use prebuilt email, SMS, and social templates to announce your launch and capture first sales.</p>
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
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
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
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            No. Everything is beginner-friendly with guided onboarding, templates, and live support.
          </div>
        </div>
      </div>

      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed faq-question" data-bs-toggle="collapse" data-bs-target="#faq3">
            Can I sell internationally?
          </button>
        </h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">
            Yes, you can sell globally with multi-currency checkout, duties and tax automation, and localized storefronts.
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA SECTION -->
<section class="py-5">
  <div class="container">
    <div class="cta-banner p-4 p-lg-5 shadow-lg">
      <div class="row align-items-center gy-4">
        <div class="col-lg-6">
          <p class="text-uppercase small fw-semibold text-white-50 mb-2">Ready to launch?</p>
          <h2 class="fw-semibold mb-3">Get your free launch kit and start selling</h2>
          <p class="text-white-50 mb-4">Tell us where to send your onboarding checklist and we'll redirect you to schedule a quick walkthrough.</p>
          <div class="d-flex flex-wrap gap-3 align-items-center text-white-50">
            <div class="d-flex align-items-center">
              <span class="me-2">✓</span> No credit card required
            </div>
            <div class="d-flex align-items-center">
              <span class="me-2">✓</span> Cancel anytime
            </div>
            <div class="d-flex align-items-center">
              <span class="me-2">✓</span> Works with your existing domain
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-white text-dark rounded-4 p-4 h-100">
            <form data-lead-form class="needs-validation" novalidate>
              <div class="mb-3">
                <label class="form-label fw-semibold" for="ctaName">Name</label>
                <input type="text" id="ctaName" name="name" class="form-control form-control-lg" placeholder="Your full name" required>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold" for="ctaEmail">Email</label>
                <input type="email" id="ctaEmail" name="email" class="form-control form-control-lg" placeholder="you@example.com" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-dark btn-lg rounded-pill" data-lead-submit>
                  Get my launch kit
                  <span class="spinner-border spinner-border-sm ms-2 d-none" aria-hidden="true" data-lead-spinner></span>
                </button>
                <small class="text-secondary">We will redirect you to confirm your details right after.</small>
              </div>
              <div class="alert alert-success d-none mt-3" role="alert" data-lead-success>
                You're in! Redirecting to your confirmation...
              </div>
              <div class="alert alert-danger d-none mt-3" role="alert" data-lead-error>
                Please add your name and email to continue. If the issue persists, try again.
              </div>
            </form>
          </div>
        </div>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  (function () {
    var webhookUrl = 'https://webmakerr.com/?fluentcrm=1&route=contact&hash=62bf47c0-9f1a-4a70-8e7e-e11ef0acc748';
    var forms = document.querySelectorAll('[data-lead-form]');

    if (!forms.length) {
      return;
    }

    var showStatus = function (form, type) {
      var successAlert = form.querySelector('[data-lead-success]');
      var errorAlert = form.querySelector('[data-lead-error]');

      if (successAlert) {
        successAlert.classList.toggle('d-none', type !== 'success');
      }
      if (errorAlert) {
        errorAlert.classList.toggle('d-none', type !== 'error');
      }
    };

    var setLoading = function (form, isLoading) {
      var submitBtn = form.querySelector('[data-lead-submit]');
      var spinner = form.querySelector('[data-lead-spinner]');

      if (submitBtn) {
        submitBtn.disabled = isLoading;
      }
      if (spinner) {
        spinner.classList.toggle('d-none', !isLoading);
      }
    };

    forms.forEach(function (form) {
      var nameInput = form.querySelector('input[name="name"]');
      var emailInput = form.querySelector('input[name="email"]');

      form.addEventListener('submit', function (event) {
        event.preventDefault();
        showStatus(form, '');

        var name = nameInput ? nameInput.value.trim() : '';
        var email = emailInput ? emailInput.value.trim() : '';

        if (!name || !email) {
          showStatus(form, 'error');
          return;
        }

        setLoading(form, true);

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
            showStatus(form, 'success');
            window.location.href = '/thank-you-contact';
          })
          .catch(function () {
            showStatus(form, 'error');
          })
          .finally(function () {
            setLoading(form, false);
          });
      });
    });
  })();
</script>
</body>
</html>
