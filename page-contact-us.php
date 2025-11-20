<?php
/* Template Name: Contact Us */

$webhook_url = get_option('raphael_webhook_url');

get_header();
?>

<section class="py-5 py-lg-5 bg-white">
    <div class="container">
        <div class="row g-4 align-items-stretch">
            <div class="col-lg-6">
                <div class="h-100 rounded-4 px-4 px-md-5 py-5" style="background-color: #F2FFF7;">
                    <div class="text-uppercase fw-semibold text-success small mb-3">Contact Us</div>
                    <h1 class="display-5 fw-bold lh-sm mb-3">
                        <span class="d-block">Our</span>
                        <span class="d-block text-success fst-italic">partnership</span>
                        <span class="d-block">starts here</span>
                    </h1>
                    <p class="fs-5 text-secondary mb-0" style="max-width: 30rem;">
                        Let us know how we can collaborate or help. Share your details and we will get back to you with the support you need.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card h-100 border-0 shadow-sm rounded-4" style="border: 1px solid #e6eee6 !important;">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="h4 fw-bold mb-4">Submit a Ticket</h2>
                        <div id="formAlert"></div>
                        <form id="ticketForm" class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">First Name</label>
                                <input type="text" name="sender[first_name]" class="form-control" placeholder="Enter your first name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
                                <input type="email" name="sender[email]" class="form-control" placeholder="name@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Ticket Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" class="form-control" placeholder="What do you need help with?" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-semibold">Ticket Content <span class="text-danger">*</span></label>
                                <textarea name="content" rows="5" class="form-control" placeholder="Share more details" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100 py-3 fw-semibold" id="submitBtn">
                                    Submit Ticket
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-4" style="border: 1px solid #e6eee6 !important;">
                    <div class="card-body p-4 p-md-5">
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
                            <div>
                                <div class="text-uppercase fw-semibold text-success small mb-2">Help Center</div>
                                <h2 class="h4 fw-bold mb-0">Frequently Asked Questions</h2>
                            </div>
                        </div>
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item border-0 mb-3">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        How quickly will I receive a response?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary">
                                        Our partnership team aims to reply within one business day. Complex requests may take up to 48 hours.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What information should I include in my ticket?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary">
                                        Please provide your objectives, timelines, and any relevant links or references to help us understand your needs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Can I update my request after submission?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary">
                                        Yes. Simply reply to the confirmation email you receive, or submit a new ticket referencing your previous request.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0 mb-3">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Who will handle my partnership inquiry?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary">
                                        A dedicated member of our partnerships team will review your request and coordinate with the right specialists.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-0">
                                <h2 class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed shadow-none fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Do you offer support in multiple languages?
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body text-secondary">
                                        We primarily operate in English, but we can accommodate other languages through our regional support partners when available.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
const WEBHOOK_URL = "<?php echo esc_url( $webhook_url ); ?>";

document.getElementById("ticketForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    const btn = document.getElementById("submitBtn");
    const alertBox = document.getElementById("formAlert");
    btn.disabled = true;
    btn.textContent = "Submitting...";

    const form = e.target;

    const payload = {
        title: form.title.value,
        content: form.content.value,
        sender: {
            first_name: form["sender[first_name]"].value,
            email: form["sender[email]"].value
        }
    };

    try {
        const res = await fetch(WEBHOOK_URL, {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(payload)
        });

        if (res.ok) {
            alertBox.innerHTML = `<div class="alert alert-success">Your ticket has been created successfully.</div>`;
            form.reset();
        } else {
            throw new Error();
        }
    } catch (err) {
        alertBox.innerHTML = `<div class="alert alert-danger">Something went wrong. Please try again.</div>`;
    }

    btn.disabled = false;
    btn.textContent = "Submit Ticket";
});
</script>

<?php get_footer(); ?>
