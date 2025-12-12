<div class="need-section">
                    <div class="need_content">
                        <h3>Got a question or an idea to explore?</h3>
                        <p class="text-size-16">We’d love to hear from you! The team at Astrawin India Pvt. Ltd. is ready to help you with the right technology solutions to move your business forward.Share your details below, and we’ll connect with you shortly.</p>                        
                        <!-- Success/Error Message -->
                        <div id="form-message" style="display: none; padding: 15px; margin-bottom: 20px; border-radius: 5px;"></div>
                        
                        <form id="contactpage" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form_style" placeholder="Your Name:" name="name">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <input type="email" class="form_style" placeholder="Your Email:"
                                            name="emailid">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-0">
                                        <input type="tel" class="form_style" placeholder="Phone:" name="phone">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class=" form-group mb-0">
                                        <textarea class="form_style" placeholder="Message" rows="3"
                                            name="msg"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="manage-button text-center">
                                <button type="submit" class="submit_now text-decoration-none">Submit Now<i
                                        class="circle fa-regular fa-angle-right"></i></button>
                            </div>
                        </form>
                        <figure class="faq-image mb-0">
                            <img src="./assets/images/faq-image.png" alt="" class="img-fluid">
                        </figure>
                    </div>
                </div>

<script>
jQuery(document).ready(function($) {
    $('#contactpage').on('submit', function(e) {
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