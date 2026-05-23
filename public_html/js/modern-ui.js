/* ========================================
   MODERN UI ENHANCEMENTS FOR EMERALDNEWS
   ======================================== */

// Wait for DOM to load
document.addEventListener('DOMContentLoaded', function() {
    
    // Add fade-in animation to main content
    const mainContent = document.getElementById('emeraldnewsAtAGlance');
    if (mainContent) {
        mainContent.classList.add('fade-in');
    }
    
    // Add hover effects to feature cards
    const featureCards = document.querySelectorAll('#ThingsToDo li');
    featureCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0) scale(1)';
        });
    });
    
    // Enhanced form interactions
    const formInputs = document.querySelectorAll('.Text');
    formInputs.forEach(input => {
        // Add floating label effect
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            if (!this.value) {
                this.parentElement.classList.remove('focused');
            }
        });
        
        input.addEventListener('input', function() {
            this.style.borderColor = this.value.length > 0 ? 'var(--emerald-primary)' : 'var(--gray-200)';
            this.style.backgroundColor = this.value.length > 0 ? 'white' : 'var(--gray-50)';
        });
    });
    
    // Add smooth scrolling to anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Add parallax effect to header
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (ticking) {
            return;
        }

        requestAnimationFrame(() => {
            const header = document.getElementById('Header');
            if (header) {
                header.style.transform = `translate3d(0, ${window.pageYOffset * -0.5}px, 0)`;
            }
            ticking = false;
        });

        ticking = true;
    });
    
    // Add typing animation to main heading
    const mainHeading = document.querySelector('#emeraldnewsAtAGlance h2');
    if (mainHeading && !mainHeading.dataset.animated) {
        const text = mainHeading.textContent;
        mainHeading.textContent = '';
        mainHeading.dataset.animated = 'true';
        
        let i = 0;
        const typeWriter = () => {
            if (i >= text.length) {
                return;
            }

            mainHeading.textContent += text.charAt(i);
            i++;
            setTimeout(typeWriter, 100);
        };

        setTimeout(typeWriter, 500);
    }
    
    // Enhanced error message handling
    const errorMessages = document.querySelectorAll('.error-message, div[style*="color:red"]');
    errorMessages.forEach(msg => {
        msg.style.animation = 'shake 0.5s ease-in-out';
        msg.classList.add('error-message');
        
        // Auto-hide error messages after 5 seconds
        setTimeout(() => {
            msg.style.opacity = '0.7';
        }, 5000);
    });
    
    // Enhanced success message styling
    const successMessages = document.querySelectorAll('.success-message');
    successMessages.forEach(msg => {
        msg.style.cssText = `
            background: #F0FDF4;
            color: #166534;
            padding: 12px 16px;
            border-radius: 8px;
            border: 1px solid #BBF7D0;
            margin-bottom: 16px;
            font-size: 14px;
            text-align: center;
            animation: slideDown 0.3s ease-out;
        `;
    });
    
    // Add enhanced loading states for all buttons
    const allButtons = document.querySelectorAll('button, .Button, .signin-button, input[type="submit"]');
    allButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (this.classList.contains('loading')) return;

            const isSubmitButton =
                (this.tagName === 'BUTTON' && this.type === 'submit') ||
                (this.tagName === 'INPUT' && this.type === 'submit');
            const usesInnerHTML = this.tagName !== 'INPUT';
            const originalLabel = usesInnerHTML ? this.innerHTML : this.value;

            // Add loading animation without blocking form submission
            this.classList.add('loading');
            if (usesInnerHTML) {
                this.innerHTML = '<span style="margin-right: 8px;">⏳</span> Loading...';
            } else {
                this.value = 'Loading...';
            }

            // Only disable non-submit buttons to avoid cancelling form posts
            if (!isSubmitButton && 'disabled' in this) {
                this.disabled = true;
            }

            // Reset after timeout if page doesn't navigate
            setTimeout(() => {
                if (usesInnerHTML) {
                    this.innerHTML = originalLabel;
                } else {
                    this.value = originalLabel;
                }

                this.classList.remove('loading');

                if (!isSubmitButton && 'disabled' in this) {
                    this.disabled = false;
                }
            }, 3000);
        });
    });
    
    // Add intersection observer for scroll animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for scroll animations
    const animatedElements = document.querySelectorAll('#ThingsToDo li, #UserPlacesPane, #Showcase');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        observer.observe(el);
    });
    
    // Add welcome animation on page load
    setTimeout(() => {
        const welcomeElements = document.querySelectorAll('#emeraldnewsAtAGlance h2, #emeraldnewsAtAGlance h3');
        welcomeElements.forEach((el, index) => {
            setTimeout(() => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            }, index * 200);
        });
    }, 100);
    
    // Add smooth reveal for cards
    const cards = document.querySelectorAll('#ThingsToDo li');
    cards.forEach((card, index) => {
        card.style.opacity = '0';
        card.style.transform = 'translateY(30px)';
        card.style.transition = 'opacity 0.6s ease-out, transform 0.6s ease-out';
        
        setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
        }, 300 + (index * 150));
    });
    
    // Add glow effect to important elements
    const importantButtons = document.querySelectorAll('.signin-button, #DownloadAndPlay a');
    importantButtons.forEach(btn => {
        btn.addEventListener('mouseenter', function() {
            this.classList.add('animate-glow');
        });
        
        btn.addEventListener('mouseleave', function() {
            this.classList.remove('animate-glow');
        });
    });
    
});

// Add CSS animations via JavaScript
const style = document.createElement('style');
style.textContent = `
    @keyframes shake {
        0%, 100% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        75% { transform: translateX(5px); }
    }
    
    @keyframes slideDown {
        from { 
            opacity: 0; 
            transform: translateY(-10px); 
        }
        to { 
            opacity: 1; 
            transform: translateY(0); 
        }
    }
    
    @keyframes pulse {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.7; }
    }
    
    .loading {
        animation: pulse 1.5s infinite;
    }
`;
document.head.appendChild(style);
