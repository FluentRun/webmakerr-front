<?php
/**
 * Template Name: Webmakerr Loft Landing
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

$register_url = 'https://beta.webmakerr.com/register';
$call_url = 'https://cal.com/webmakerr';

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

    body {
        background: #f8fafc;
    }

    .wm-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 8px 12px;
        border-radius: 999px;
        background: #f8fafc;
        border: 1px solid #e5e7eb;
        color: #0f172a;
        font-weight: 600;
        box-shadow: 0 6px 18px rgba(15, 23, 42, 0.08);
    }

    .wm-hero-grid {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 4px;
        box-shadow: 0 18px 50px rgba(15, 23, 42, 0.12);
    }

    .wm-hero-media {
        background: linear-gradient(135deg, #111827, #2563eb);
        border-radius: 4px;
        min-height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .wm-hero-media::after {
        content: '';
        position: absolute;
        inset: 0;
        background: radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.08), transparent 40%),
            radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.08), transparent 40%);
    }

    .wm-hero-media .badge {
        position: relative;
        z-index: 2;
    }

    .wm-icon-box {
        width: 50px;
        height: 50px;
        border-radius: 4px;
        background: linear-gradient(135deg, #eef2f7, #f9fafb);
        border: 1px solid #e5e7eb;
        display: inline-flex;
        align-items: center;
        justify-content: center;
    }

    .wm-grid-card,
    .wm-case-card,
    .wm-step-card,
    .wm-testimonial-card,
    .wm-cta-card {
        border: 1px solid #e5e7eb;
        background: #ffffff;
        border-radius: 4px;
        box-shadow: 0 16px 36px rgba(15, 23, 42, 0.08);
    }

    .wm-muted {
        color: #475569;
    }

    .wm-divider {
        border-top: 1px solid #e5e7eb;
    }

    .wm-section-heading {
        max-width: 760px;
    }

    .wm-step-card .step-number {
        width: 40px;
        height: 40px;
        border-radius: 4px;
        background: #0f172a;
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
    }

    .wm-case-metric {
        font-size: 2rem;
        font-weight: 700;
        color: #0f172a;
    }

    .wm-cta-card {
        background: linear-gradient(120deg, #0f172a, #111827);
        color: #ffffff;
        border: 1px solid #0f172a;
    }

    .wm-cta-card p {
        color: rgba(255, 255, 255, 0.8);
    }

    .wm-logo-tile {
        border: 1px solid #e5e7eb;
        border-radius: 4px;
        padding: 14px 18px;
        background: #ffffff;
        font-weight: 600;
        color: #0f172a;
        text-align: center;
        box-shadow: 0 8px 18px rgba(15, 23, 42, 0.06);
    }

    .wm-video-frame {
        width: 100%;
        border-radius: 4px;
        min-height: 320px;
        border: 1px solid #e5e7eb;
        background: linear-gradient(135deg, #0f172a, #2563eb);
        position: relative;
        overflow: hidden;
    }

    .wm-video-frame::before,
    .wm-video-frame::after {
        content: '';
        position: absolute;
        border-radius: 999px;
        background: rgba(255, 255, 255, 0.1);
        filter: blur(18px);
    }

    .wm-video-frame::before {
        width: 140px;
        height: 140px;
        top: 12%;
        left: 6%;
    }

    .wm-video-frame::after {
        width: 180px;
        height: 180px;
        bottom: 10%;
        right: 8%;
    }

    .wm-play-button {
        position: absolute;
        inset: 0;
        margin: auto;
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        color: #0f172a;
        box-shadow: 0 16px 30px rgba(15, 23, 42, 0.18);
        border: 1px solid #e5e7eb;
        z-index: 2;
    }

    .wm-cta-btn {
        border-radius: 4px;
        box-shadow: 0 12px 26px rgba(15, 23, 42, 0.12);
    }
</style>

<main class="py-5">
    <div class="container-lg">
        <section class="p-4 p-md-5 wm-hero-grid row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="d-inline-flex align-items-center gap-2 mb-3">
                    <span class="wm-pill">Webmakerr Studio</span>
                    <span class="badge text-bg-dark rounded-pill">Loftflow inspired</span>
                </div>
                <h1 class="display-5 fw-semibold text-dark lh-sm mb-3">
                    Cinematic landing experiences engineered to convert every scroll.
                </h1>
                <p class="lead wm-muted mb-4">
                    Loftfilm’s flow, powered by Webmakerr. We choreograph your story across every section so visitors glide from intrigue to action without losing speed.
                </p>
                <div class="d-flex flex-wrap gap-3 align-items-center">
                    <a class="btn btn-dark btn-lg wm-cta-btn" href="<?php echo esc_url( $register_url ); ?>">Start for free</a>
                    <a class="btn btn-outline-dark btn-lg wm-cta-btn" href="<?php echo esc_url( $call_url ); ?>">Book a walkthrough</a>
                    <span class="wm-pill">Live sites in 3 weeks</span>
                </div>
                <div class="d-flex flex-wrap gap-4 align-items-center mt-4 wm-muted">
                    <div>
                        <div class="fw-semibold text-dark">+38% conversion lift</div>
                        <small>Average across new launches</small>
                    </div>
                    <div class="vr d-none d-md-block"></div>
                    <div>
                        <div class="fw-semibold text-dark">Core Web Vitals ready</div>
                        <small>Speed scores in the high 90s</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="wm-hero-media text-center text-white p-4">
                    <div class="position-relative z-2">
                        <div class="mb-3">Play the story your buyers expect.</div>
                        <div class="badge bg-white text-dark fw-semibold">Scroll choreography · Conversion beats · Analytics ready</div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <section class="py-5 border-top bg-light mt-5">
        <div class="container-lg">
            <div class="text-center mb-4">
                <h2 class="h5 text-uppercase text-secondary">Teams that choose Webmakerr for Loft-level polish</h2>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Brightline CRM</div></div>
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Northwind Solar</div></div>
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Atlas Legal</div></div>
                <div class="col-6 col-md-3"><div class="wm-logo-tile">Peakline AI</div></div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top">
        <div class="container-lg">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="wm-video-frame">
                        <div class="wm-play-button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wm-section-heading">
                        <span class="wm-pill mb-3">Narrative Showreel</span>
                        <h2 class="display-6 fw-semibold text-dark lh-sm mb-3">Every scene keeps momentum.</h2>
                        <p class="wm-muted mb-4">We map your offer like a film sequence: open strong, build proof, deliver the payoff. Visitors experience the same Loftfilm pacing—only it’s fully Webmakerr in tone, technology, and brand.</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="wm-grid-card p-3 h-100">
                                    <div class="wm-icon-box mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <path d="M3 5h18M3 12h18M3 19h18" />
                                        </svg>
                                    </div>
                                    <h5 class="mb-2">Story arcs for SaaS & services</h5>
                                    <p class="wm-muted mb-0">Hero, proof, offer, and urgency stitched together with purposeful scroll cues.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="wm-grid-card p-3 h-100">
                                    <div class="wm-icon-box mb-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                            <circle cx="12" cy="12" r="9" />
                                            <path d="m10 9 5 3-5 3V9Z" />
                                        </svg>
                                    </div>
                                    <h5 class="mb-2">Video-ready moments</h5>
                                    <p class="wm-muted mb-0">Screens, animation, and motion placeholders planned for your creative assets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a class="btn btn-dark wm-cta-btn" href="<?php echo esc_url( $register_url ); ?>">See the Webmakerr flow</a>
                            <a class="btn btn-outline-dark wm-cta-btn" href="<?php echo esc_url( $call_url ); ?>">Schedule a live demo</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-top">
        <div class="container-lg">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-semibold text-dark lh-sm mb-2">What we build in the Webmakerr Loft.</h2>
                    <p class="wm-muted mb-0">High-converting landing pages, cinematic storytelling, and proof-rich sections that mirror Loftfilm’s cadence while keeping your brand unmistakably Webmakerr.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-dark wm-cta-btn" href="<?php echo esc_url( $register_url ); ?>">Launch a page</a>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="wm-grid-card p-4 h-100">
                        <h5 class="mb-2">Conversion-first hero beats</h5>
                        <p class="wm-muted mb-3">Instant clarity, social proof, and dual CTAs that set the tone for the scroll.</p>
                        <ul class="list-unstyled wm-muted mb-0">
                            <li>• Story-driven headlines</li>
                            <li>• Speed-optimized imagery</li>
                            <li>• Mobile-first microcopy</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-grid-card p-4 h-100">
                        <h5 class="mb-2">Proof-led sections</h5>
                        <p class="wm-muted mb-3">Case snippets, metrics, and logos that appear exactly when intent peaks.</p>
                        <ul class="list-unstyled wm-muted mb-0">
                            <li>• Sequential credibility</li>
                            <li>• Structured stat reveals</li>
                            <li>• Embedded calculators</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-grid-card p-4 h-100">
                        <h5 class="mb-2">Action-centered finales</h5>
                        <p class="wm-muted mb-3">CTA panels with crisp pricing signals, contact forms, and booking links.</p>
                        <ul class="list-unstyled wm-muted mb-0">
                            <li>• CRM & calendar ready</li>
                            <li>• Accessibility checked</li>
                            <li>• Analytics & heatmaps</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top">
        <div class="container-lg">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-8">
                    <h2 class="display-6 fw-semibold text-dark lh-sm mb-2">Featured launches with Loft-level pacing.</h2>
                    <p class="wm-muted mb-0">Each project follows the same scroll choreography: tease, prove, educate, and convert.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="btn btn-outline-dark wm-cta-btn" href="<?php echo esc_url( $call_url ); ?>">View more examples</a>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="wm-case-card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Brightline CRM</h5>
                            <span class="wm-case-metric">+42%</span>
                        </div>
                        <p class="wm-muted">Multi-section narrative that doubled demo requests with crisp proof moments.</p>
                        <div class="wm-divider my-3"></div>
                        <small class="text-uppercase text-secondary">Hero → Proof → Offer → CTA</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-case-card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Northwind Solar</h5>
                            <span class="wm-case-metric">-38%</span>
                        </div>
                        <p class="wm-muted">Speed-optimized storyline that lowered bounce rates while showcasing installs.</p>
                        <div class="wm-divider my-3"></div>
                        <small class="text-uppercase text-secondary">Story → Stats → Gallery → CTA</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="wm-case-card p-4 h-100">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="mb-0">Atlas Legal</h5>
                            <span class="wm-case-metric">3x</span>
                        </div>
                        <p class="wm-muted">Loftfilm-inspired scroll with testimonials and rapid booking funnel.</p>
                        <div class="wm-divider my-3"></div>
                        <small class="text-uppercase text-secondary">Problem → Proof → Team → Booking</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-top">
        <div class="container-lg">
            <div class="text-center mx-auto mb-5" style="max-width: 720px;">
                <span class="wm-pill mb-3">Webmakerr Production Flow</span>
                <h2 class="display-6 fw-semibold text-dark lh-sm mb-3">A cinematic sequence from kickoff to launch.</h2>
                <p class="wm-muted mb-0">Modeled after Loftfilm’s storyboards, executed with Webmakerr’s build discipline.</p>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="wm-step-card p-4 h-100 d-flex flex-column gap-2">
                        <span class="step-number">1</span>
                        <h5 class="mb-1">Kickoff & plot</h5>
                        <p class="wm-muted mb-0">Audience, offer, and conversion goals mapped into a scrollable outline.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wm-step-card p-4 h-100 d-flex flex-column gap-2">
                        <span class="step-number">2</span>
                        <h5 class="mb-1">Script & design</h5>
                        <p class="wm-muted mb-0">Copy, visuals, and motion cues crafted to mirror Loftfilm pacing.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wm-step-card p-4 h-100 d-flex flex-column gap-2">
                        <span class="step-number">3</span>
                        <h5 class="mb-1">Build & QA</h5>
                        <p class="wm-muted mb-0">Performance-engineered sections, accessibility checks, and analytics wiring.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="wm-step-card p-4 h-100 d-flex flex-column gap-2">
                        <span class="step-number">4</span>
                        <h5 class="mb-1">Launch & learn</h5>
                        <p class="wm-muted mb-0">A/B-ready modules, dashboards, and iteration sprints after go-live.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top">
        <div class="container-lg">
            <div class="row g-4 align-items-center">
                <div class="col-lg-7">
                    <h2 class="display-6 fw-semibold text-dark lh-sm mb-3">Choose the Loft-inspired plan that fits.</h2>
                    <p class="wm-muted mb-4">Each package uses the same cinematic layout logic and Webmakerr build quality. Pick the cadence that matches your roadmap.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="wm-grid-card p-3 h-100">
                                <h5 class="mb-2">Launch Sprint</h5>
                                <p class="wm-muted mb-2">One landing page, crafted and shipped in under three weeks.</p>
                                <small class="text-secondary">Includes copy, design, build, QA.</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wm-grid-card p-3 h-100">
                                <h5 class="mb-2">Campaign System</h5>
                                <p class="wm-muted mb-2">A reusable page system with variants for paid, product, and partner plays.</p>
                                <small class="text-secondary">Includes analytics, personalization hooks.</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wm-grid-card p-3 h-100">
                                <h5 class="mb-2">Full Site Flow</h5>
                                <p class="wm-muted mb-2">Loft-style storytelling across your entire site with modular sections.</p>
                                <small class="text-secondary">Includes migration & CMS training.</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="wm-grid-card p-3 h-100">
                                <h5 class="mb-2">Embedded Team</h5>
                                <p class="wm-muted mb-2">Webmakerr strategists, designers, and engineers as your ongoing squad.</p>
                                <small class="text-secondary">Includes sprint reviews & rapid tests.</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="wm-testimonial-card p-4 h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="wm-icon-box">
                                <strong>N</strong>
                            </div>
                            <div>
                                <div class="fw-semibold text-dark">Nora Patel</div>
                                <small class="text-secondary">CMO, Peakline AI</small>
                            </div>
                        </div>
                        <p class="fw-semibold text-dark mb-2">“They rebuilt our landing flow with the drama of a film trailer and the rigor of a CRO lab. We saw lift in week one.”</p>
                        <p class="wm-muted mb-0">We’ll help you pick a plan on the first call.</p>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <a class="btn btn-dark wm-cta-btn" href="<?php echo esc_url( $call_url ); ?>">Book a call</a>
                            <a class="btn btn-outline-dark wm-cta-btn" href="<?php echo esc_url( $register_url ); ?>">Start free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 border-top">
        <div class="container-lg">
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="wm-testimonial-card p-4 h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="wm-icon-box">
                                <strong>J</strong>
                            </div>
                            <div>
                                <div class="fw-semibold text-dark">Jamal Grant</div>
                                <small class="text-secondary">VP Growth, Brightline CRM</small>
                            </div>
                        </div>
                        <p class="fw-semibold text-dark">“Webmakerr choreographed the exact Loft-style flow we wanted. Every section tees up the next ask.”</p>
                        <p class="wm-muted mb-0">Results: +42% demos, faster load times, and happy sales reps.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="wm-testimonial-card p-4 h-100">
                        <div class="d-flex align-items-center gap-3 mb-3">
                            <div class="wm-icon-box">
                                <strong>S</strong>
                            </div>
                            <div>
                                <div class="fw-semibold text-dark">Sara Lin</div>
                                <small class="text-secondary">Founder, Atlas Legal</small>
                            </div>
                        </div>
                        <p class="fw-semibold text-dark">“They handled copy, visuals, and dev with a film producer’s mindset. The new page feels premium and books more calls.”</p>
                        <p class="wm-muted mb-0">Results: 3x booked consultations with the same ad spend.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top">
        <div class="container-lg">
            <div class="wm-cta-card p-4 p-md-5 d-flex flex-column flex-lg-row justify-content-between align-items-center gap-3">
                <div>
                    <h2 class="display-6 fw-semibold text-white lh-sm mb-2">Ready for a Loftfilm-style page with Webmakerr speed?</h2>
                    <p class="mb-0">We’ll script, design, and build the full sequence. You just choose the CTA.</p>
                </div>
                <div class="d-flex flex-wrap gap-3">
                    <a class="btn btn-light btn-lg wm-cta-btn" href="<?php echo esc_url( $register_url ); ?>">Start for free</a>
                    <a class="btn btn-outline-light btn-lg wm-cta-btn" href="<?php echo esc_url( $call_url ); ?>">Talk with us</a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
