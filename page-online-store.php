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
      background:#fff;
      color: #0f172a;
      font-family: 'Inter', sans-serif;
    }
    h1, h2, h5 { color: #0f172a; }
    p, .text-secondary { color: #475569 !important; }
    .hero { background:#f8fafc; }
    .section-light { background:#f8fafc; }
    .faq-question { font-size: 1.1rem; font-weight: 600; color: #0f172a; }
    .btn-dark { background-color: #000; border-color: #000; }
    .btn-dark:hover { background-color: #111827; border-color: #111827; }
    .btn { border-radius: 4px; }

    /* Sticky header */
    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: #fff;
    }

    .page-header-logo img, .page-header-logo svg {
      max-height: 36px;
      width: auto;
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
<section class="hero py-5">
  <div class="container">
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
            <input type="text" class="form-control ps-4" name="name" placeholder="Enter your name" required>
          </div>
          <div class="input-group input-group-lg mb-2">
            <input type="email" class="form-control ps-4" name="email" placeholder="Enter your email address" required>
          </div>
          <div class="d-flex align-items-center mb-2">
            <button type="submit" class="btn btn-dark px-4" data-submit>
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
      <div class="col-lg-6 text-center position-relative">
        <img src="https://via.placeholder.com/480x320?text=Main+Mockup" class="img-fluid rounded shadow" style="max-width:480px;">
        <img src="https://via.placeholder.com/160x200?text=Card" class="position-absolute shadow-sm rounded" style="right:60px; top:-80px; width:160px;">
      </div>

    </div>
  </div>
</section>

<!-- FEATURES -->
<section class="py-5">
  <div class="container">
    <div class="row gy-4">
      <div class="col-md-4 text-center">
        <img src="https://via.placeholder.com/300?text=Image" class="img-fluid mb-3" alt="">
        <h5 class="fw-semibold">Fast, flexible checkout</h5>
        <p>Convert more visitors with optimized checkout flow.</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="https://via.placeholder.com/300?text=Image" class="img-fluid mb-3" alt="">
        <h5 class="fw-semibold">Built-in AI tools</h5>
        <p>Manage your store, marketing and inventory effortlessly.</p>
      </div>
      <div class="col-md-4 text-center">
        <img src="https://via.placeholder.com/300?text=Image" class="img-fluid mb-3" alt="">
        <h5 class="fw-semibold">Secure & scalable hosting</h5>
        <p>99.9% uptime, unlimited products, and global infrastructure.</p>
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
        <h2 class="fw-semibold mb-3">Everything you need to sell online</h2>
        <p class="text-secondary">Manage products, payments, marketing and customers from one place.</p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="https://via.placeholder.com/500x300?text=Feature+Image" class="img-fluid rounded shadow">
      </div>
    </div>

    <!-- Section 2 -->
    <div class="row align-items-center flex-lg-row-reverse">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <h2 class="fw-semibold mb-3">Reach customers everywhere</h2>
        <p class="text-secondary">Sell on social media, marketplaces, and across your own online store.</p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="https://via.placeholder.com/500x300?text=Feature+Image" class="img-fluid rounded shadow">
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
      <form class="online-store-lead-form w-100" data-online-store-lead-form style="max-width:480px;">
        <div class="input-group input-group-lg mb-2">
          <input type="text" class="form-control ps-4" name="name" placeholder="Enter your name" required>
        </div>
        <div class="input-group input-group-lg mb-2">
          <input type="email" class="form-control ps-4" name="email" placeholder="Enter your email address" required>
        </div>
        <div class="d-flex align-items-center mb-2">
          <button type="submit" class="btn btn-dark px-4" data-submit>
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
