<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Online Store Landing Clone</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body { background:#fff; }
    .hero { background:#f5f5f5; }
    .section-light { background:#f8f9fa; }
    .faq-question { font-size: 1.1rem; font-weight: 500; }

    /* Sticky header */
    header {
      position: sticky;
      top: 0;
      z-index: 1020;
      background: #fff;
    }
  </style>
</head>
<body>

<!-- HEADER -->
<header class="py-3 bg-light border-bottom">
  <div class="container d-flex justify-content-between align-items-center">
    <img src="https://via.placeholder.com/120x30?text=Logo" height="28" alt="Logo">
    <a href="#" class="btn btn-dark rounded-pill px-4">Start for free</a>
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
          Shopify is the all-in-one platform to build, run, and grow your online boutique.
          Start free, then get 3 months for €1/month.
        </p>

        <!-- EMAIL FIELD -->
        <div class="input-group input-group-lg mb-2" style="max-width:420px;">
          <input type="email" class="form-control rounded-pill ps-4" placeholder="Enter your email address">
          <button class="btn btn-dark rounded-pill ms-2 px-4">Start free trial</button>
        </div>

        <small class="text-muted">You agree to receive Shopify marketing emails.</small>
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
      <div class="input-group input-group-lg" style="max-width:480px;">
        <input type="email" class="form-control rounded-pill ps-4" placeholder="Enter your email address">
        <button class="btn btn-dark rounded-pill ms-2 px-4">Start free trial</button>
      </div>
    </div>

    <small class="text-muted">You agree to receive Shopify marketing emails.</small>

  </div>
</section>

<!-- FOOTER -->
<footer class="py-4 bg-light text-center">
  <div class="container">
    <p class="mb-0">&copy; 2025 Your Company Name. All rights reserved.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
