
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

        // Hide all content divs (both patterns) - be more specific with selector
        $('.counter-section .aboutpage_content[id$="-content"], .counter-section .aboutpage_content[id="diff"]').removeClass('active');

        // Show the target content div
        $('.counter-section #' + targetTab).addClass('active');
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

    // Projects page filter functionality
    if ($('.projects-filter-section').length) {
        // Sticky filter behavior
        let filterSection = $('.projects-filter-section');
        let filterSectionTop = filterSection.offset().top;

        $(window).scroll(function () {
            let scrollTop = $(window).scrollTop();

            if (scrollTop >= filterSectionTop) {
                filterSection.addClass('scrolled');
            } else {
                filterSection.removeClass('scrolled');
            }
        });

        // Filter button clicks
        $('.filter-btn').on('click', function () {
            $('.filter-btn').removeClass('active');
            $(this).addClass('active');

            const category = $(this).data('category');
            filterProjects(category);
        });

        // Search functionality
        $('#projectSearch').on('input', function () {
            const searchTerm = $(this).val().toLowerCase();
            const activeCategory = $('.filter-btn.active').data('category');

            filterProjects(activeCategory, searchTerm);
        });

        function filterProjects(category, searchTerm = '') {
            // Filter projects directly
            $('.project-item').each(function () {
                const projectCard = $(this);
                const projectCategory = projectCard.data('category');
                const projectTitle = projectCard.find('h4').text().toLowerCase();
                const projectScope = projectCard.find('.project-scope').text().toLowerCase();
                const projectDetails = projectCard.find('.project-details').text().toLowerCase();

                // Check category match
                const categoryMatch = (category === 'all' || category === projectCategory);

                // Check search term match
                const searchMatch = (searchTerm === '' ||
                    projectTitle.includes(searchTerm) ||
                    projectScope.includes(searchTerm) ||
                    projectDetails.includes(searchTerm));

                // Show/hide project based on both filters
                if (categoryMatch && searchMatch) {
                    projectCard.show();
                } else {
                    projectCard.hide();
                }
            });

            // Show/hide category sections based on visible projects
            $('.projects-category').each(function () {
                const categorySection = $(this);
                const visibleProjects = categorySection.find('.project-item:visible').length;

                if (visibleProjects > 0) {
                    categorySection.show();
                } else {
                    categorySection.hide();
                }
            });

            // Show "no results" message if no projects are visible
            setTimeout(() => {
                const visibleProjects = $('.project-item:visible').length;
                if (visibleProjects === 0) {
                    if (!$('.no-results-message').length) {
                        $('.projects-grid-section .container').append(
                            '<div class="no-results-message text-center" style="padding: 60px 0;">' +
                            '<h4 style="color: #666;">No projects found matching your criteria</h4>' +
                            '<p style="color: #999;">Try adjusting your search terms or filter selection</p>' +
                            '</div>'
                        );
                    }
                } else {
                    $('.no-results-message').remove();
                }
            }, 100);
        }
    }

    // Smooth scroll for project CTA button
    $('.btn-explore, .btn-talk').on('click', function (e) {
        const href = $(this).attr('href');
        if (href && href.startsWith('#')) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(href).offset().top - 100
            }, 800);
        }
    });
});

// AOS initialization for projects page animations
if (typeof AOS !== 'undefined') {
    AOS.init({
        duration: 800,
        once: true,
        offset: 100
    });
}