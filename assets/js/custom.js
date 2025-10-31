
// TABS JS

function makeTabActive() {

    var url = window.location.href;

    var indexof = url.indexOf("#");

    if (indexof > 0) {

        var activeTab = url.substring(indexof + 1);

        if (typeof activeTab != 'undefined' && activeTab != '' && activeTab != '#') {

            // to dispaly give tab content

            jQuery(".tab-pane").removeClass("active in show");

            jQuery("#" + activeTab).addClass("active in show")

            // to make active given tab

            jQuery(".nav-tabs li a").removeClass("active");

            jQuery(".nav-tabs li a[href='#" + activeTab + "']").addClass("active");
        }
    }
}

// About Page Tab Functionality
$(document).ready(function () {
    // Tab button click event
    $('.counter-section .abt-content').click(function (e) {
        e.preventDefault();

        // Get the target tab from button ID
        var buttonId = $(this).attr('id');
        var targetTab;

        // Handle different ID patterns
        if (buttonId.endsWith('-btn')) {
            targetTab = buttonId.replace('-btn', '-content');
        } else {
            // For IDs like "diff", use the same ID for content
            targetTab = buttonId;
        }

        // Remove active class from all buttons
        $('.counter-section .abt-content').removeClass('active');

        // Add active class to clicked button
        $(this).addClass('active');

        // Hide all content divs (both patterns)
        $('.aboutpage_content[id$="-content"], .aboutpage_content[id="diff"]').removeClass('active');

        // Show the target content div
        $('#' + targetTab).addClass('active');
    });

    // Clients and Partners Slider
    function initSliders() {
        const clientsSlider = $('.clients-slider');
        const partnersSlider = $('.partners-slider');

        // Wrap existing items in a track div for both sliders
        if (clientsSlider.length) {
            const clientItems = clientsSlider.html();
            clientsSlider.html('<div class="slider-track">' + clientItems + clientItems + '</div>');
        }

        if (partnersSlider.length) {
            const partnerItems = partnersSlider.html();
            partnersSlider.html('<div class="slider-track">' + partnerItems + partnerItems + '</div>');
        }

        // Manual navigation functionality
        let clientsCurrentIndex = 0;
        let partnersCurrentIndex = 0;
        const itemWidth = 180; // 150px width + 30px gap

        // Clients navigation
        $('.clients-prev').on('click', function () {
            const maxItems = $('.clients-slider .client-item').length / 2; // Divided by 2 because we duplicated
            clientsCurrentIndex = clientsCurrentIndex <= 0 ? maxItems - 1 : clientsCurrentIndex - 1;
            updateSliderPosition('.clients-slider .slider-track', clientsCurrentIndex, itemWidth);
        });

        $('.clients-next').on('click', function () {
            const maxItems = $('.clients-slider .client-item').length / 2;
            clientsCurrentIndex = clientsCurrentIndex >= maxItems - 1 ? 0 : clientsCurrentIndex + 1;
            updateSliderPosition('.clients-slider .slider-track', clientsCurrentIndex, itemWidth);
        });

        // Partners navigation
        $('.partners-prev').on('click', function () {
            const maxItems = $('.partners-slider .partner-item').length / 2;
            partnersCurrentIndex = partnersCurrentIndex <= 0 ? maxItems - 1 : partnersCurrentIndex - 1;
            updateSliderPosition('.partners-slider .slider-track', partnersCurrentIndex, itemWidth);
        });

        $('.partners-next').on('click', function () {
            const maxItems = $('.partners-slider .partner-item').length / 2;
            partnersCurrentIndex = partnersCurrentIndex >= maxItems - 1 ? 0 : partnersCurrentIndex + 1;
            updateSliderPosition('.partners-slider .slider-track', partnersCurrentIndex, itemWidth);
        });

        // Auto-play functionality
        setInterval(function () {
            $('.clients-next').click();
        }, 4000);

        setInterval(function () {
            $('.partners-next').click();
        }, 5000);
    }

    // Function to update slider position
    function updateSliderPosition(sliderTrack, index, itemWidth) {
        const translateX = -index * itemWidth;
        $(sliderTrack).css('transform', 'translateX(' + translateX + 'px)');
    }

    // Initialize sliders when document is ready
    initSliders();
});