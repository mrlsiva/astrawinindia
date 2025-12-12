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
                            <p class="text-size-18"> #232,46th Street TVS Colony, Anna Nagar West Extn, Near Bharath Petroleum Chennai - 600101 Tamil Nadu.</p>
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

<script>
jQuery(document).ready(function($) {
    $('#contactpage').off('submit').on('submit', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        var formData = $(this).serialize();
        var submitBtn = $(this).find('button[type="submit"]');
        var originalBtnText = submitBtn.html();
        
        // Disable button and show loading
        submitBtn.prop('disabled', true).html('Sending...');
        
        $.ajax({
            type: 'POST',
            url: './contact-form.php',
            data: formData,
            dataType: 'json',
            success: function(response) {
                var messageDiv = $('#form-message');
                
                if(response.status === 'Success') {
                    messageDiv.removeClass('alert-danger').addClass('alert-success')
                        .css({
                            'background-color': '#d4edda',
                            'color': '#155724',
                            'border': '1px solid #c3e6cb'
                        })
                        .html('<strong>Success!</strong> ' + response.msg)
                        .fadeIn();
                    
                    // Reset form
                    $('#contactpage')[0].reset();
                } else {
                    messageDiv.removeClass('alert-success').addClass('alert-danger')
                        .css({
                            'background-color': '#f8d7da',
                            'color': '#721c24',
                            'border': '1px solid #f5c6cb'
                        })
                        .html('<strong>Error!</strong> ' + response.msg)
                        .fadeIn();
                }
                
                // Re-enable button
                submitBtn.prop('disabled', false).html(originalBtnText);
                
                // Scroll to message
                $('html, body').animate({
                    scrollTop: messageDiv.offset().top - 100
                }, 500);
                
                // Hide message after 5 seconds
                setTimeout(function() {
                    messageDiv.fadeOut();
                }, 5000);
            },
            error: function() {
                $('#form-message')
                    .removeClass('alert-success').addClass('alert-danger')
                    .css({
                        'background-color': '#f8d7da',
                        'color': '#721c24',
                        'border': '1px solid #f5c6cb'
                    })
                    .html('<strong>Error!</strong> Something went wrong. Please try again.')
                    .fadeIn();
                
                submitBtn.prop('disabled', false).html(originalBtnText);
            }
        });
        
        return false;
    });
});
</script>

</body>
</html>