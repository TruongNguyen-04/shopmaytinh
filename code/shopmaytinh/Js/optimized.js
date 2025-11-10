/**
 * Optimized JavaScript for better performance and user experience
 */

// Form validation and enhancement
document.addEventListener('DOMContentLoaded', function() {
    // Enhanced form validation
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!validateForm(this)) {
                e.preventDefault();
                return false;
            }
            
            // Show loading state
            showLoadingState(this);
        });
    });
    
    // Real-time validation
    const inputs = document.querySelectorAll('input[required]');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
        
        input.addEventListener('input', function() {
            clearFieldError(this);
        });
    });
});

/**
 * Validate entire form
 */
function validateForm(form) {
    let isValid = true;
    const inputs = form.querySelectorAll('input[required]');
    
    inputs.forEach(input => {
        if (!validateField(input)) {
            isValid = false;
        }
    });
    
    return isValid;
}

/**
 * Validate individual field
 */
function validateField(field) {
    const value = field.value.trim();
    const type = field.type;
    const pattern = field.pattern;
    
    // Clear previous errors
    clearFieldError(field);
    
    // Required field check
    if (field.hasAttribute('required') && !value) {
        showFieldError(field, 'Trường này là bắt buộc');
        return false;
    }
    
    // Pattern validation
    if (pattern && value && !new RegExp(pattern).test(value)) {
        showFieldError(field, field.title || 'Định dạng không hợp lệ');
        return false;
    }
    
    // Type-specific validation
    if (type === 'email' && value && !isValidEmail(value)) {
        showFieldError(field, 'Email không hợp lệ');
        return false;
    }
    
    if (type === 'tel' && value && !isValidPhone(value)) {
        showFieldError(field, 'Số điện thoại không hợp lệ');
        return false;
    }
    
    return true;
}

/**
 * Show field error
 */
function showFieldError(field, message) {
    field.classList.add('error');
    
    // Remove existing error message
    const existingError = field.parentNode.querySelector('.field-error');
    if (existingError) {
        existingError.remove();
    }
    
    // Add new error message
    const errorDiv = document.createElement('div');
    errorDiv.className = 'field-error';
    errorDiv.textContent = message;
    errorDiv.style.color = '#dc3545';
    errorDiv.style.fontSize = '12px';
    errorDiv.style.marginTop = '4px';
    
    field.parentNode.appendChild(errorDiv);
}

/**
 * Clear field error
 */
function clearFieldError(field) {
    field.classList.remove('error');
    const errorDiv = field.parentNode.querySelector('.field-error');
    if (errorDiv) {
        errorDiv.remove();
    }
}

/**
 * Show loading state
 */
function showLoadingState(form) {
    const submitBtn = form.querySelector('input[type="submit"]');
    if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.value = 'Đang xử lý...';
        form.classList.add('loading');
    }
}

/**
 * Validate email format
 */
function isValidEmail(email) {
    const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    return emailRegex.test(email);
}

/**
 * Validate phone number
 */
function isValidPhone(phone) {
    const phoneRegex = /^[0-9]{10,11}$/;
    return phoneRegex.test(phone);
}

/**
 * Optimize image loading
 */
function optimizeImages() {
    const images = document.querySelectorAll('img');
    
    images.forEach(img => {
        // Lazy loading for images below the fold
        if (!img.hasAttribute('loading')) {
            img.setAttribute('loading', 'lazy');
        }
        
        // Add error handling
        img.addEventListener('error', function() {
            this.src = 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWxsPSIjZGRkIi8+PHRleHQgeD0iNTAlIiB5PSI1MCUiIGZvbnQtZmFtaWx5PSJBcmlhbCIgZm9udC1zaXplPSIxNCIgZmlsbD0iIzk5OSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZHk9Ii4zZW0iPkltYWdlIG5vdCBmb3VuZDwvdGV4dD48L3N2Zz4=';
            this.alt = 'Image not found';
        });
    });
}

/**
 * Initialize optimizations
 */
function initOptimizations() {
    optimizeImages();
    
    // Add smooth scrolling
    document.documentElement.style.scrollBehavior = 'smooth';
    
    // Optimize form submissions
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            // Prevent double submission
            if (this.classList.contains('submitting')) {
                e.preventDefault();
                return false;
            }
            this.classList.add('submitting');
        });
    });
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initOptimizations);
} else {
    initOptimizations();
}

// Performance monitoring
if ('performance' in window) {
    window.addEventListener('load', function() {
        setTimeout(function() {
            const perfData = performance.getEntriesByType('navigation')[0];
            console.log('Page load time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
        }, 0);
    });
}
