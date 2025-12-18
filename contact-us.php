<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Contact | Astrawinindia</title>
    <?php include 'includes/head.php'; ?>
</head>

<body>
<!--Header  -->
<div class="sub-banner">
    <?php include 'includes/header.php'; ?>
    <figure class="sub-bannersideshape mb-0">
        <img src="./assets/images/sub-bannersideshape.png" alt="" class="img-fluid">
    </figure>
<!-- Sub-Banner -->
    <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12 col-12">
                    <div class="banner_content" data-aos="fade-right">
                        <h1 class="text-white">Contact Us</h1>
                        <!-- <p class="text-white">Huis autem vel eum iure reprehenderit aui in ea voluptate velit esse ruam nihil molestiae conseuatur.</p> -->
                        <div class="box">
                            <span class="mb-0">Home</span><i class="first fa-regular fa-angle-right"></i><i class="second fa-regular fa-angle-right"></i><span class="mb-0 box_span">Contact</span>
                        </div> 
                    </div>
                </div> 
                <div class="col-lg-5 col-md-6 col-sm-12 col-12">
                    <div class="banner_wrapper">
                        <figure class="mb-0 sub-bannerimage">
                            <img src="./assets/images/sub-bannerimage.png" alt="" class="">
                        </figure> 
                    </div>  
                </div>
            </div>
        </div> 
        <figure class="sub-bannersideshape2 mb-0">
            <img src="./assets/images/sub-bannersideshape2.png" alt="" class="img-fluid">
        </figure>
    </section>
</div>
<!--Contact section-->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_content" data-aos="fade-right">
                    <h5>Our Details</h5>
                    <h2>Contact Information</h2>
                    <div class="contact-box">
                        <div class="box-image">
                            <figure class="contact-location">
                                <img src="./assets/images/contact-location.png" alt="" class="img-fluid">
                            </figure> 
                        </div>
                        <div class="box-content">
                            <h4>Location:</h4>
                            <p class="text-size-18"> #232, 46th Street TVS Colony, Anna Nagar West Extn, Near Bharath Petroleum Chennai - 600101 Tamil Nadu.</p>
                        </div>
                    </div>
                    <div class="contact-box box-mb">
                        <div class="box-image">
                            <figure class="contact-phone">
                                <img src="./assets/images/contact-phone.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Phone:</h4>
                            <p>
                                <a href="tel:+917397729717" class="text-decoration-none text text-size-18">+91 7397729717</a>
                            </p>
                           
                        </div>
                    </div>
                    <div class="contact-box">
                        <div class="box-image">
                            <figure class="contact-email">
                                <img src="./assets/images/contact-email.png" alt="" class="img-fluid">
                            </figure>
                        </div>
                        <div class="box-content">
                            <h4 class="heading">Email:</h4>
                            <p>
                                <a href="mailto:info@Astrawinindia.com" class="text-decoration-none text-size-18">info@astrawinindia.com</a>
                            </p>
                            <!-- <p>
                                <a href="mailto:Astrawinindia@gmail.com" class="mb-0 text-decoration-none text-size-18">Astrawinindia@gmail.com</a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <?php include 'includes/contact-form-area.php'; ?>
            </div>
        </div>
    </div>
</section>
<div class="contact_map_section">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.1552788709714!2d80.1839878744148!3d13.089343687236925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52636677c67625%3A0xf000e36e5d1d77ac!2sAstrawin%20India%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1762252448072!5m2!1sen!2sin"
            width="1920" height="556" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
<?php include 'includes/footer.html'; ?>

<!-- Success Modal -->
<div id="successModal" class="success-modal">
    <div class="success-modal-content">
        <div class="success-checkmark">
            <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                <circle class="checkmark-circle" cx="26" cy="26" r="25" fill="none"/>
                <path class="checkmark-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
            </svg>
        </div>
        <h2 class="success-title">Thank You!</h2>
        <p class="success-message">Your form has been submitted successfully. Our team will contact you shortly.</p>
        <button class="success-btn" onclick="closeSuccessModal()">Close</button>
    </div>
</div>

<!-- Error Modal -->
<div id="errorModal" class="success-modal">
    <div class="success-modal-content error-content">
        <div class="error-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" width="80" height="80">
                <circle cx="26" cy="26" r="25" fill="#ff5e14"/>
                <line x1="18" y1="18" x2="34" y2="34" stroke="white" stroke-width="3" stroke-linecap="round"/>
                <line x1="34" y1="18" x2="18" y2="34" stroke="white" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </div>
        <h2 class="success-title">Oops!</h2>
        <p class="success-message" id="errorMessage">Something went wrong. Please try again.</p>
        <button class="success-btn" onclick="closeErrorModal()">Close</button>
    </div>
</div>

<style>
.success-modal {
    display: none;
    position: fixed;
    z-index: 99999;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    animation: fadeIn 0.3s ease;
}

.success-modal-content {
    background-color: #fff;
    margin: 10% auto;
    padding: 40px;
    border-radius: 15px;
    width: 90%;
    max-width: 450px;
    text-align: center;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
    animation: slideDown 0.4s ease;
    position: relative;
}

.error-content {
    border-top: 5px solid #ff5e14;
}

.success-checkmark {
    margin: 0 auto 20px;
    display: flex;
    justify-content: center;
    align-items: center;
}
svg.checkmark {
    margin: 0 auto;
}
.checkmark {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: block;
    stroke-width: 3;
    stroke: #4CAF50;
    stroke-miterlimit: 10;
    margin: 0 auto;
}

.checkmark-circle {
    stroke-dasharray: 166;
    stroke-dashoffset: 166;
    stroke-width: 3;
    stroke-miterlimit: 10;
    stroke: #4CAF50;
    fill: #f0f9f0;
    animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards, fillCircle 0.4s ease-in-out 0.4s forwards;
}

.checkmark-check {
    transform-origin: 50% 50%;
    stroke-dasharray: 48;
    stroke-dashoffset: 48;
    stroke: #fff;
    stroke-width: 3;
    animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
}

@keyframes fillCircle {
    100% {
        fill: #4CAF50;
    }
}

.error-icon {
    margin: 0 auto 20px;
    animation: errorShake 0.5s ease;
}

.success-title {
    font-size: 28px;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.success-message {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 30px;
}

.success-btn {
    background: linear-gradient(135deg, #ff5e14 0%, #ff8a3d 100%);
    color: white;
    border: none;
    padding: 12px 40px;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.success-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 20px rgba(255, 94, 20, 0.4);
}

@keyframes stroke {
    100% {
        stroke-dashoffset: 0;
    }
}

@keyframes scale {
    0%, 100% {
        transform: none;
    }
    50% {
        transform: scale3d(1.1, 1.1, 1);
    }
}

@keyframes fill {
    100% {
        box-shadow: inset 0 0 0 40px #4CAF50;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideDown {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes errorShake {
    0%, 100% {
        transform: translateX(0);
    }
    10%, 30%, 50%, 70%, 90% {
        transform: translateX(-5px);
    }
    20%, 40%, 60%, 80% {
        transform: translateX(5px);
    }
}
</style>

<script>
function closeSuccessModal() {
    document.getElementById('successModal').style.display = 'none';
}

function closeErrorModal() {
    document.getElementById('errorModal').style.display = 'none';
}

// Close modal when clicking outside
window.onclick = function(event) {
    var successModal = document.getElementById('successModal');
    var errorModal = document.getElementById('errorModal');
    if (event.target == successModal) {
        closeSuccessModal();
    }
    if (event.target == errorModal) {
        closeErrorModal();
    }
}

jQuery(document).ready(function($) {
    $('#contactpage').off('submit').on('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        // Form validation
        var name = $('input[name="name"]').val();
        var email = $('input[name="emailid"]').val();
        var phone = $('input[name="phone"]').val();
        var message = $('textarea[name="msg"]').val();
        
        // Trim values if they exist
        name = name ? name.trim() : '';
        email = email ? email.trim() : '';
        phone = phone ? phone.trim() : '';
        message = message ? message.trim() : '';
        
        // Check if all required fields are filled
        if (!name || !email || !phone || !message) {
            $('#errorMessage').text('Please fill in all required fields.');
            $('#errorModal').fadeIn();
            return false;
        }
        
        // Email validation
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            $('#errorMessage').text('Please enter a valid email address.');
            $('#errorModal').fadeIn();
            return false;
        }
        
        // Phone validation (basic check for numbers)
        var phonePattern = /^[0-9]{10,}$/;
        if (!phonePattern.test(phone.replace(/[\s\-\+\(\)]/g, ''))) {
            $('#errorMessage').text('Please enter a valid phone number (minimum 10 digits).');
            $('#errorModal').fadeIn();
            return false;
        }
        
        var formData = $(this).serialize();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalBtnText = submitBtn.html();
        
        // Disable button and show loading
        submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin"></i> Sending...');
        
        $.ajax({
            type: 'POST',
            url: './contact-form.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if(response.status === 'Success') {
                    // Show success modal
                    $('#successModal').fadeIn();
                    
                    // Reset form
                    $('#contactpage')[0].reset();
                    
                    // Auto close after 5 seconds
                    setTimeout(function() {
                        closeSuccessModal();
                    }, 5000);
                } else {
                    // Show error modal
                    $('#errorMessage').text(response.msg);
                    $('#errorModal').fadeIn();
                }
                
                // Re-enable button
                submitBtn.prop('disabled', false).html(originalBtnText);
            },
            error: function() {
                $('#errorMessage').text('Something went wrong. Please try again.');
                $('#errorModal').fadeIn();
                
                submitBtn.prop('disabled', false).html(originalBtnText);
            }
        });
        
        return false;
    });
});
</script>

</body>
</html>