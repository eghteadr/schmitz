let toastTimer;

function notifyLanguageSoon(langLabel) {
    const toast = document.getElementById('lang-toast');
    const text = document.getElementById('lang-toast-text');
    text.textContent = `${langLabel} edition is currently in preparation. English (EN) is active.`;
    toast.classList.add('show');

    clearTimeout(toastTimer);
    toastTimer = setTimeout(() => {
        toast.classList.remove('show');
    }, 3200);
}

function selectProcessStep(stepNumber) {
    const progressBar = document.getElementById('process-progress-bar');
    const stepLabel = document.getElementById('process-step-label');
    if (progressBar) {
        progressBar.style.width = `${stepNumber * 25}%`;
    }
    if (stepLabel) {
        const pattern = stepLabel.getAttribute('data-pattern');
        stepLabel.textContent = pattern ? pattern.replace(':step', stepNumber) : `Stage 0${stepNumber} of 04`;
    }

    for (let i = 1; i <= 4; i++) {
        const card = document.getElementById(`proc-card-${i}`);
        const badge = card.querySelector('span:first-child');
        const dot = card.querySelector('span:last-child');
        if (i === stepNumber) {
            card.classList.add('ring-2', 'ring-schmitz-navy', 'shadow-md');
            badge.classList.remove('bg-schmitz-appleGray', 'text-schmitz-navy');
            badge.classList.add('bg-schmitz-navy', 'text-white');
            dot.classList.remove('text-slate-300');
            dot.classList.add('text-schmitz-gold');
        } else {
            card.classList.remove('ring-2', 'ring-schmitz-navy', 'shadow-md');
            badge.classList.add('bg-schmitz-appleGray', 'text-schmitz-navy');
            badge.classList.remove('bg-schmitz-navy', 'text-white');
            dot.classList.add('text-slate-300');
            dot.classList.remove('text-schmitz-gold');
        }
    }
}

function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const openIcon = document.getElementById('menu-icon-open');
    const closeIcon = document.getElementById('menu-icon-close');
    menu.classList.toggle('hidden');
    openIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
}

function openQuoteModal(preselectedCategory) {
    const modal = document.getElementById('rfq-modal');
    const categorySelect = document.getElementById('rfq-category');
    if (preselectedCategory && categorySelect) {
        categorySelect.value = preselectedCategory;
    }
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeQuoteModal() {
    document.getElementById('rfq-modal').classList.add('hidden');
    document.body.style.overflow = '';
}

function updateFileName(input) {
    const label = document.getElementById('file-chosen-text');
    if (input.files && input.files.length > 0) {
        label.textContent = input.files[0].name;
    }
}

async function handleInquirySubmit(e) {
    e.preventDefault();
    const form = e.target;
    const submitBtn = document.getElementById('rfq-submit-btn');
    const errorBox = document.getElementById('rfq-error-box');
    const refCodeEl = document.getElementById('rfq-modal-ref-code');

    if (errorBox) {
        errorBox.classList.add('hidden');
        errorBox.textContent = '';
    }

    const originalText = submitBtn ? submitBtn.textContent : '';
    if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.textContent = '...';
    }

    try {
        const formData = new FormData(form);
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
            },
        });

        const data = await response.json();

        if (!response.ok) {
            const firstError = data?.errors
                ? Object.values(data.errors).flat()[0]
                : (data?.message || 'Unable to submit inquiry. Please verify your entries.');
            if (errorBox) {
                errorBox.textContent = firstError;
                errorBox.classList.remove('hidden');
            }
            return;
        }

        if (refCodeEl && data.reference_code) {
            refCodeEl.textContent = `REF: ${data.reference_code}`;
        }

        document.getElementById('rfq-form-container').classList.add('hidden');
        document.getElementById('rfq-success-container').classList.remove('hidden');
    } catch (err) {
        if (errorBox) {
            errorBox.textContent = 'Network error while submitting your inquiry. Please try again.';
            errorBox.classList.remove('hidden');
        }
    } finally {
        if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    }
}

function resetAndCloseModal() {
    const form = document.getElementById('rfq-form');
    if (form) form.reset();
    const fileChosen = document.getElementById('file-chosen-text');
    if (fileChosen) {
        fileChosen.textContent = fileChosen.getAttribute('data-default-text') || fileChosen.textContent;
    }
    const success = document.getElementById('rfq-success-container');
    if (success) success.classList.add('hidden');
    const formContainer = document.getElementById('rfq-form-container');
    if (formContainer) formContainer.classList.remove('hidden');
    closeQuoteModal();
}

function openLegalModal(title) {
    document.getElementById('legal-modal-title').textContent = title;
    document.getElementById('legal-modal').classList.remove('hidden');
}

function closeLegalModal() {
    document.getElementById('legal-modal').classList.add('hidden');
}

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.bento-card').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
        });
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.08,
        rootMargin: '0px 0px -40px 0px'
    });

    document.querySelectorAll('.reveal-up').forEach(el => observer.observe(el));

    const header = document.getElementById('main-header');
    const headerInner = document.getElementById('header-inner');
    const heroImg = document.getElementById('hero-parallax-img');
    const heroShowcase = document.getElementById('hero-showcase');

    window.addEventListener('scroll', () => {
        const scrollY = window.scrollY;

        if (scrollY > 24) {
            header.classList.add('scrolled');
            headerInner.classList.remove('sm:h-[74px]');
            headerInner.classList.add('sm:h-16');
        } else {
            header.classList.remove('scrolled');
            headerInner.classList.add('sm:h-[74px]');
            headerInner.classList.remove('sm:h-16');
        }

        if (heroImg && heroShowcase && scrollY < 1100) {
            const scale = 1 + Math.min(scrollY * 0.00009, 0.07);
            const translateY = scrollY * 0.04;
            heroImg.style.transform = `scale(${scale}) translateY(${translateY}px)`;
        }
    }, { passive: true });
});

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        closeQuoteModal();
        closeLegalModal();
    }
});
