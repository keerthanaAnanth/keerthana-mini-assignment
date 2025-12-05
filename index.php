<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Get in Touch</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Base Styles with Gradient Background */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Nunito', sans-serif;
            line-height: 1.6;
            color: #333;
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-attachment: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Animated Background Elements */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: 
                radial-gradient(circle at 20% 80%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(255,255,255,0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 40%, rgba(255,255,255,0.05) 0%, transparent 50%);
            z-index: -1;
        }
        
        /* Floating Particles Animation */
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .particle {
            position: fixed;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            z-index: -1;
            animation: float 6s ease-in-out infinite;
        }
        
        .particle:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }
        
        .particle:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 20%;
            right: 15%;
            animation-delay: 1s;
        }
        
        .particle:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 30%;
            left: 20%;
            animation-delay: 2s;
        }
        
        /* Contact Wrapper */
        .contact-wrapper {
            width: 100%;
            max-width: 1200px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            animation: slideUp 0.8s ease-out;
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0; 
                transform: translateY(50px); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0); 
            }
        }
        
        /* Glass Morphism Contact Card */
        .contact-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.4),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            padding: 50px;
            width: 100%;
            max-width: 700px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        /* Decorative Corner Accents */
        .contact-card::before,
        .contact-card::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1), rgba(118, 75, 162, 0.1));
            z-index: 0;
        }
        
        .contact-card::before {
            top: -100px;
            right: -100px;
        }
        
        .contact-card::after {
            bottom: -100px;
            left: -100px;
        }
        
        /* Card Content */
        .card-content {
            position: relative;
            z-index: 1;
        }
        
        /* Headings with Gradient Text */
        h2 {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 900;
            text-align: center;
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }
        
        .subtitle {
            color: #6c757d;
            font-size: 1.15rem;
            margin-bottom: 40px;
            line-height: 1.6;
            text-align: center;
            font-weight: 500;
        }
        
        /* Form Styles */
        form {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        
        .form-group {
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 700;
            color: #2c3e50;
            font-size: 1.05rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        label i {
            color: #667eea;
            font-size: 0.9rem;
        }
        
        .required {
            color: #ff4757;
            font-weight: 900;
        }
        
        input, textarea {
            width: 100%;
            padding: 18px 20px;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 1rem;
            font-family: 'Nunito', sans-serif;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background-color: rgba(255, 255, 255, 0.9);
            color: #333;
        }
        
        input:focus, textarea:focus {
            outline: none;
            border-color: #667eea;
            background-color: white;
            box-shadow: 
                0 10px 25px rgba(102, 126, 234, 0.15),
                0 0 0 4px rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }
        
        input:hover, textarea:hover {
            border-color: #adb5bd;
            transform: translateY(-1px);
        }
        
        textarea {
            resize: vertical;
            min-height: 160px;
            line-height: 1.5;
        }
        
        /* Submit Button */
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 20px 40px;
            border-radius: 12px;
            font-size: 1.2rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            font-family: 'Nunito', sans-serif;
            margin-top: 20px;
            position: relative;
            overflow: hidden;
            letter-spacing: 0.5px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        button:hover::before {
            left: 100%;
        }
        
        button:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 15px 30px rgba(102, 126, 234, 0.4),
                0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        button:active {
            transform: translateY(-2px);
        }
        
        button:disabled {
            opacity: 0.6;
            cursor: not-allowed;
            transform: none !important;
            box-shadow: none !important;
        }
        
        button:disabled::before {
            display: none;
        }
        
        /* Button Icon Animation */
        button i {
            transition: transform 0.3s ease;
        }
        
        button:hover i {
            transform: translateX(5px);
        }
        
        /* Validation styles */
        .error-message {
            color: #ff4757;
            font-size: 0.9rem;
            margin-top: 8px;
            display: none;
            font-weight: 600;
            padding-left: 5px;
            animation: shake 0.3s ease;
        }
        
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            75% { transform: translateX(5px); }
        }
        
        .error {
            border-color: #ff4757 !important;
            background-color: rgba(255, 71, 87, 0.05) !important;
            animation: errorShake 0.5s ease;
        }
        
        @keyframes errorShake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        
        .success {
            border-color: #2ecc71 !important;
            background-color: rgba(46, 204, 113, 0.05) !important;
        }
        
        /* Input Icons */
        .input-icon {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #adb5bd;
            transition: all 0.3s ease;
            pointer-events: none;
        }
        
        input:focus ~ .input-icon {
            color: #667eea;
            transform: translateY(-50%) scale(1.1);
        }
        
        .error ~ .input-icon {
            color: #ff4757;
        }
        
        .success ~ .input-icon {
            color: #2ecc71;
        }
        
        /* Mobile Responsive Styles */
        @media (max-width: 768px) {
            body {
                padding: 15px;
            }
            
            .contact-card {
                padding: 35px 25px;
                border-radius: 20px;
            }
            
            h2 {
                font-size: 2rem;
            }
            
            .subtitle {
                font-size: 1rem;
                margin-bottom: 30px;
            }
            
            input, textarea {
                padding: 16px 18px;
                font-size: 1rem;
            }
            
            button {
                padding: 18px 30px;
                font-size: 1.1rem;
                width: 100%;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .contact-card {
                padding: 30px 20px;
                border-radius: 16px;
            }
            
            h2 {
                font-size: 1.8rem;
            }
            
            .subtitle {
                font-size: 0.95rem;
                margin-bottom: 25px;
            }
            
            input, textarea {
                padding: 14px 16px;
            }
            
            button {
                padding: 16px 24px;
                font-size: 1rem;
            }
        }
        
        /* Loading Animation for Submit */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .loading-spinner {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 10px;
        }
    </style>
</head>

<body>

<!-- Animated Background Particles -->
<div class="particle"></div>
<div class="particle"></div>
<div class="particle"></div>

<div class="contact-wrapper">

    <div class="contact-card">
        <div class="card-content">
            <h2>Contact Us</h2>
            <p class="subtitle">We would love to hear from you. Please fill out the form below and we'll get back to you as soon as possible.</p>

            <form id="contactForm" action="process.php" method="POST" novalidate>

                <div class="form-group">
                    <label for="name">
                        <i class="fas fa-user"></i>
                        Name <span class="required">*</span>
                    </label>
                    <input type="text" name="name" id="name" 
                           placeholder="Enter your full name" 
                           minlength="2" 
                           maxlength="100"
                           pattern="[A-Za-z\s]{2,}" 
                           title="Name should contain only letters and spaces (minimum 2 characters)"
                           required>
                    <i class="fas fa-user input-icon"></i>
                    <div class="error-message" id="nameError">Please enter a valid name (minimum 2 characters, letters only)</div>
                </div>

                <div class="form-group">
                    <label for="email">
                        <i class="fas fa-envelope"></i>
                        Email <span class="required">*</span>
                    </label>
                    <input type="email" name="email" id="email" 
                           placeholder="Enter your email address" 
                           title="Please enter a valid email address"
                           required>
                    <i class="fas fa-envelope input-icon"></i>
                    <div class="error-message" id="emailError">Please enter a valid email address</div>
                </div>

                <div class="form-group">
                    <label for="phone">
                        <i class="fas fa-phone"></i>
                        Phone <span class="required">*</span>
                    </label>
                    <input type="tel" name="phone" id="phone" 
                           placeholder="Enter 10-digit mobile number" 
                           pattern="[6-9][0-9]{9}"
                           title="Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9"
                           required>
                    <i class="fas fa-phone input-icon"></i>
                    <div class="error-message" id="phoneError">Please enter a valid 10-digit mobile number starting with 6, 7, 8, or 9</div>
                </div>

                <div class="form-group">
                    <label for="message">
                        <i class="fas fa-comment-dots"></i>
                        Message <span class="required">*</span>
                    </label>
                    <textarea name="message" id="message" 
                              placeholder="Type your message here..." 
                              minlength="10" 
                              maxlength="1000"
                              required></textarea>
                    <div class="error-message" id="messageError">Please enter a message (minimum 10 characters)</div>
                </div>

                <button type="submit" id="submitBtn">
                    <span id="submitText">Send Message</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const phoneInput = document.getElementById('phone');
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    
    // ============================================
    // ADVANCED POPUP MESSAGE SYSTEM
    // ============================================
    
    // Advanced Popup Message System
    function showAdvancedPopup(title, message, type, autoClose = true) {
        // Create popup overlay if it doesn't exist
        let popupOverlay = document.getElementById('advancedPopupOverlay');
        if (!popupOverlay) {
            popupOverlay = document.createElement('div');
            popupOverlay.id = 'advancedPopupOverlay';
            popupOverlay.style.cssText = `
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.7);
                backdrop-filter: blur(8px);
                -webkit-backdrop-filter: blur(8px);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                opacity: 0;
                animation: fadeIn 0.3s ease forwards;
            `;
            document.body.appendChild(popupOverlay);
            
            // Close popup when clicking outside
            popupOverlay.addEventListener('click', function(e) {
                if (e.target === popupOverlay) {
                    hideAdvancedPopup();
                }
            });
            
            // Close on ESC key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    hideAdvancedPopup();
                }
            });
        }
        
        // Create or update popup content
        let popup = document.getElementById('advancedPopup');
        if (!popup) {
            popup = document.createElement('div');
            popup.id = 'advancedPopup';
            popupOverlay.appendChild(popup);
        }
        
        // Set icon and colors based on type
        let icon, color, gradient;
        if (type === 'success') {
            icon = 'fa-check-circle';
            color = '#2ecc71';
            gradient = 'linear-gradient(135deg, #2ecc71, #27ae60)';
        } else {
            icon = 'fa-exclamation-circle';
            color = '#ff4757';
            gradient = 'linear-gradient(135deg, #ff4757, #ff6b6b)';
        }
        
        // Popup content
        popup.innerHTML = `
            <div style="
                background: linear-gradient(145deg, #ffffff, #f8f9fa);
                border-radius: 20px;
                padding: 0;
                width: 90%;
                max-width: 450px;
                box-shadow: 
                    0 25px 50px rgba(0, 0, 0, 0.25),
                    0 0 0 1px rgba(255, 255, 255, 0.1),
                    inset 0 1px 0 rgba(255, 255, 255, 0.5);
                overflow: hidden;
                transform: translateY(30px) scale(0.95);
                animation: popupSlideUp 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
                position: relative;
            ">
                <!-- Header with gradient -->
                <div style="
                    background: ${gradient};
                    padding: 30px 20px 20px;
                    text-align: center;
                    position: relative;
                ">
                    <!-- Animated icon -->
                    <div style="
                        width: 80px;
                        height: 80px;
                        background: rgba(255, 255, 255, 0.2);
                        border-radius: 50%;
                        margin: 0 auto 20px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        animation: iconPulse 0.6s ease;
                    ">
                        <i class="fas ${icon}" style="
                            font-size: 40px;
                            color: white;
                        "></i>
                    </div>
                    
                    <!-- Close button -->
                    <button id="popupCloseBtn" style="
                        position: absolute;
                        top: 15px;
                        right: 15px;
                        background: rgba(255, 255, 255, 0.2);
                        border: none;
                        width: 36px;
                        height: 36px;
                        border-radius: 50%;
                        color: white;
                        font-size: 18px;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                    ">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                
                <!-- Content -->
                <div style="padding: 30px;">
                    <h3 style="
                        color: #2c3e50;
                        margin: 0 0 10px;
                        font-size: 1.8rem;
                        font-weight: 800;
                        text-align: center;
                    ">${title}</h3>
                    
                    <p style="
                        color: #6c757d;
                        line-height: 1.6;
                        text-align: center;
                        font-size: 1.1rem;
                        margin-bottom: 25px;
                    ">${message}</p>
                    
                    <!-- Action buttons -->
                    <div style="
                        display: flex;
                        gap: 15px;
                        margin-top: 20px;
                    ">
                        <button id="popupActionBtn" style="
                            flex: 1;
                            background: ${gradient};
                            color: white;
                            border: none;
                            padding: 14px;
                            border-radius: 10px;
                            font-size: 1rem;
                            font-weight: 700;
                            cursor: pointer;
                            transition: all 0.3s ease;
                            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
                        ">
                            ${type === 'success' ? 'Continue' : 'Try Again'}
                        </button>
                        
                        <button id="popupViewBtn" style="
                            flex: 1;
                            background: #f8f9fa;
                            color: #667eea;
                            border: 2px solid #667eea;
                            padding: 14px;
                            border-radius: 10px;
                            font-size: 1rem;
                            font-weight: 700;
                            cursor: pointer;
                            transition: all 0.3s ease;
                        ">
                            View Submissions
                        </button>
                    </div>
                </div>
                
                <!-- Progress bar for auto-close -->
                ${autoClose ? `
                <div id="popupProgress" style="
                    width: 100%;
                    height: 4px;
                    background: rgba(0, 0, 0, 0.1);
                    position: absolute;
                    bottom: 0;
                    left: 0;
                    overflow: hidden;
                ">
                    <div style="
                        width: 100%;
                        height: 100%;
                        background: ${color};
                        transform: translateX(-100%);
                        animation: progressBar 5s linear forwards;
                    "></div>
                </div>
                ` : ''}
            </div>
        `;
        
        // Show popup
        popupOverlay.style.display = 'flex';
        
        // Add event listeners
        document.getElementById('popupCloseBtn').addEventListener('click', hideAdvancedPopup);
        document.getElementById('popupActionBtn').addEventListener('click', function() {
            if (type === 'success') {
                hideAdvancedPopup();
            } else {
                hideAdvancedPopup();
                // Focus on first field
                const firstField = document.querySelector('input, textarea');
                if (firstField) {
                    firstField.focus();
                }
            }
        });
        
        document.getElementById('popupViewBtn').addEventListener('click', function() {
            window.location.href = 'view.php';
        });
        
        // Auto-close for success messages
        if (autoClose && type === 'success') {
            setTimeout(hideAdvancedPopup, 5000);
        }
    }
    
    function hideAdvancedPopup() {
        const popupOverlay = document.getElementById('advancedPopupOverlay');
        if (popupOverlay) {
            popupOverlay.style.animation = 'fadeOut 0.3s ease forwards';
            setTimeout(() => {
                if (popupOverlay.parentNode) {
                    popupOverlay.parentNode.removeChild(popupOverlay);
                }
            }, 300);
        }
    }
    
    // Add CSS animations for popup
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        
        @keyframes popupSlideUp {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        
        @keyframes iconPulse {
            0% { transform: scale(0); }
            70% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        @keyframes progressBar {
            from { transform: translateX(-100%); }
            to { transform: translateX(0); }
        }
        
        #popupActionBtn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        }
        
        #popupViewBtn:hover {
            background: #667eea !important;
            color: white !important;
            transform: translateY(-2px);
        }
        
        #popupCloseBtn:hover {
            background: rgba(255, 255, 255, 0.3) !important;
            transform: rotate(90deg);
        }
    `;
    document.head.appendChild(style);
    
    // ============================================
    // URL PARAMETER HANDLING WITH POPUP
    // ============================================
    
    // Get URL parameters for success/error messages
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('success')) {
        // Clear URL parameters to prevent popup on refresh
        window.history.replaceState({}, document.title, window.location.pathname);
        
        setTimeout(() => {
            showAdvancedPopup(
                '🎉 Success!', 
                'Thank you! Your message has been sent successfully. We have also emailed you a confirmation.',
                'success',
                true
            );
        }, 500);
    }
    if (urlParams.has('error')) {
        const errorMsg = urlParams.get('error');
        // Clear URL parameters
        window.history.replaceState({}, document.title, window.location.pathname);
        
        setTimeout(() => {
            showAdvancedPopup(
                '⚠️ Error!', 
                errorMsg || 'There was an error submitting your form. Please check all fields and try again.',
                'error',
                false
            );
        }, 500);
    }
    
    // ============================================
    // FORM VALIDATION
    // ============================================
    
    // Phone number validation - NO LEADING ZERO allowed
    phoneInput.addEventListener('input', function() {
        // Remove any non-digit characters
        let phoneValue = this.value.replace(/\D/g, '');
        
        // Don't allow leading zero - automatically remove if typed
        if (phoneValue.startsWith('0')) {
            phoneValue = phoneValue.substring(1);
        }
        
        // Limit to 10 digits
        if (phoneValue.length > 10) {
            phoneValue = phoneValue.substring(0, 10);
        }
        
        // Update the input value
        this.value = phoneValue;
        
        // Validate phone in real-time
        validatePhoneField(this);
    });
    
    // Real-time validation for other fields
    const inputs = form.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        if (input.id !== 'phone') {
            // Validate on blur
            input.addEventListener('blur', function() {
                validateField(this);
            });
        }
        
        // Remove error class when user starts typing
        input.addEventListener('input', function() {
            // Remove error styling from field
            this.classList.remove('error');
            
            // Get the error element for this field
            const errorElement = document.getElementById(this.id + 'Error');
            
            // Hide error message if it exists
            if (errorElement) {
                errorElement.style.display = 'none';
            }
            
            // Add success styling only if field has content
            if (this.value.trim() !== '') {
                this.classList.add('success');
            } else {
                this.classList.remove('success');
            }
        });
    });
    
    // Form submission validation - USING NORMAL FORM SUBMISSION
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        let isValid = true;
        
        // Validate all fields
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const message = document.getElementById('message');
        
        // Validate each field
        if (!validateField(name)) isValid = false;
        if (!validateField(email)) isValid = false;
        if (!validatePhoneField(phone)) isValid = false;
        if (!validateField(message)) isValid = false;
        
        // If all fields are valid, submit the form NORMALLY
        if (isValid) {
            // Show loading state
            submitBtn.disabled = true;
            submitText.innerHTML = '<span class="loading-spinner"></span> Sending...';
            
            // Submit the form normally (no AJAX)
            form.submit();
        } else {
            showAdvancedPopup(
                '⚠️ Validation Error!', 
                'Please fix the errors in the form before submitting.',
                'error',
                false
            );
            // Scroll to first error
            const firstError = form.querySelector('.error');
            if (firstError) {
                firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
    });
    
    // Field validation function (for name, email, message)
    function validateField(field) {
        const errorId = field.id + 'Error';
        const errorElement = document.getElementById(errorId);
        
        // Check if field is empty
        if (field.value.trim() === '') {
            showError(field, errorElement, 'This field is required');
            return false;
        }
        
        // Field-specific validation
        switch(field.id) {
            case 'name':
                if (!/^[A-Za-z\s]{2,}$/.test(field.value.trim())) {
                    showError(field, errorElement, 'Name should contain only letters and spaces (minimum 2 characters)');
                    return false;
                }
                break;
                
            case 'email':
                // Enhanced email validation
                const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailRegex.test(field.value.trim())) {
                    showError(field, errorElement, 'Please enter a valid email address');
                    return false;
                }
                break;
                
            case 'message':
                if (field.value.trim().length < 10) {
                    showError(field, errorElement, 'Message should be at least 10 characters');
                    return false;
                }
                if (field.value.trim().length > 1000) {
                    showError(field, errorElement, 'Message should not exceed 1000 characters');
                    return false;
                }
                break;
        }
        
        // If validation passes
        hideError(field, errorElement);
        return true;
    }
    
    // Phone field validation (EXACTLY 10 digits, NO LEADING ZERO)
    function validatePhoneField(field) {
        const errorId = field.id + 'Error';
        const errorElement = document.getElementById(errorId);
        
        // Remove any non-digit characters
        const phoneValue = field.value.replace(/\D/g, '');
        
        // Check if empty
        if (phoneValue === '') {
            showError(field, errorElement, 'Phone number is required');
            return false;
        }
        
        // Check if exactly 10 digits
        if (!/^\d{10}$/.test(phoneValue)) {
            showError(field, errorElement, 'Please enter exactly 10 digits');
            return false;
        }
        
        // Check if starts with zero
        if (phoneValue.startsWith('0')) {
            showError(field, errorElement, 'Phone number cannot start with 0');
            return false;
        }
        
        // Check if valid mobile number (starts with 6, 7, 8, or 9)
        if (!/^[6-9]\d{9}$/.test(phoneValue)) {
            showError(field, errorElement, 'Please enter a valid mobile number (should start with 6, 7, 8, or 9)');
            return false;
        }
        
        // If validation passes
        hideError(field, errorElement);
        return true;
    }
    
    // Helper functions
    function showError(field, errorElement, message) {
        // Check if field exists before manipulating
        if (field) {
            field.classList.add('error');
            field.classList.remove('success');
        }
        
        // Check if errorElement exists before manipulating
        if (errorElement) {
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }
    }
    
    function hideError(field, errorElement) {
        // Check if field exists before manipulating
        if (field) {
            field.classList.remove('error');
            // Only add success class if field has content
            if (field.value.trim() !== '') {
                field.classList.add('success');
            } else {
                field.classList.remove('success');
            }
        }
        
        // Check if errorElement exists before manipulating
        if (errorElement) {
            errorElement.style.display = 'none';
        }
    }
});
</script>

</body>
</html>