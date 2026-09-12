/**
 * Contact + newsletter forms.
 *
 * Both validate in the browser and show inline feedback instead of alert().
 * NOTE: there is no server-side handler yet — wire the fetch() below to a real
 * endpoint (e.g. api/enquiry.php) before going live, and validate there too.
 */

const EMAIL_PATTERN = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

function showFeedback(element, isVisible) {
    element?.classList.toggle('is-visible', isVisible);
}

function initEnquiryForm() {
    const form = document.getElementById('contactForm');
    if (!form) return;

    const success = document.getElementById('contactSuccess');
    const error = document.getElementById('contactError');
    const errorText = document.getElementById('contactErrorText');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const data = new FormData(form);
        const name = String(data.get('name') || '').trim();
        const email = String(data.get('email') || '').trim();
        const message = String(data.get('message') || '').trim();

        let problem = '';
        if (name.length < 2) {
            problem = 'Please tell us your name.';
        } else if (!EMAIL_PATTERN.test(email)) {
            problem = 'That email address looks incomplete.';
        } else if (message.length < 10) {
            problem = 'Please add a little more detail about your cake.';
        }

        if (problem) {
            if (errorText) errorText.textContent = problem;
            showFeedback(success, false);
            showFeedback(error, true);
            return;
        }

        showFeedback(error, false);
        showFeedback(success, true);
        form.reset();

        // Let the confirmation settle before it fades out
        window.setTimeout(() => showFeedback(success, false), 8000);
    });
}

function initNewsletterForm() {
    const form = document.getElementById('newsletterForm');
    if (!form) return;

    const input = document.getElementById('newsletterEmail');
    const feedback = document.getElementById('newsletterFeedback');

    form.addEventListener('submit', (event) => {
        event.preventDefault();

        const email = String(input?.value || '').trim();
        const isValid = EMAIL_PATTERN.test(email);

        if (feedback) {
            feedback.textContent = isValid
                ? 'You are on the list — see you next season.'
                : 'Please enter a valid email address.';
            feedback.classList.add('is-visible');
        }

        if (isValid) form.reset();
    });
}

export function initForms() {
    initEnquiryForm();
    initNewsletterForm();
}
