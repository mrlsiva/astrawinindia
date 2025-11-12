<?php
function renderServiceDetail($service) {
?>
    <!-- Service Hero Section -->
    <section class="service-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-1 col-md-12">
                    <div class="service-icon mb-3">
                            <img src="<?php echo $service['icon']; ?>" alt="<?php echo $service['title']; ?>" class="img-fluid">
                        </div>
                </div>
                <div class="col-lg-11 col-md-12">
                    <div class="service-hero-content" data-aos="fade-right">
                        
                        <h1 class="service-title"><?php echo $service['title']; ?></h1>
                        <p class="service-description text-size-18"><?php echo $service['short_description']; ?></p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Service Overview Section -->
    <!-- <section class="service-overview-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-overview-content" data-aos="fade-up">
                        <h2>Overview</h2>
                        <p class="text-size-18"><?php echo $service['overview']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Service Details Section -->
    <section class="service-details-section">
        <div class="container">
            <?php foreach ($service['subsections'] as $index => $subsection): ?>
                <div class="service-subsection <?php echo $index % 2 == 0 ? 'even' : 'odd'; ?>" data-aos="fade-up">
                    <div class="row">
                        <div class="col-12">
                            <div class="subsection-header">
                                <span class="subsection-number"><?php echo ($index + 1); ?></span>
                                <h3 class="subsection-title"><?php echo $subsection['title']; ?></h3>
                                <?php if (!empty($subsection['subtitle'])): ?>
                                    <p class="subsection-subtitle"><?php echo $subsection['subtitle']; ?></p>
                                <?php endif; ?>
                                <?php if (!empty($subsection['description'])): ?>
                                    <p class="subsection-description text-size-18"><?php echo $subsection['description']; ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Capabilities -->
                        <div class="col-lg-6 col-md-12">
                            <div class="capabilities-section">
                                <h4>Capabilities / Solutions</h4>
                                <ul class="capabilities-list">
                                    <?php foreach ($subsection['capabilities'] as $capability => $description): ?>
                                        <li>
                                            <div class="capability-item">
                                                <h5><?php echo $capability; ?>:</h5>
                                                <p class="text-size-16"><?php echo $description; ?></p>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <!-- Business Outcomes -->
                        <div class="col-lg-6 col-md-12">
                            <div class="outcomes-section">
                                <h4>Business Outcomes</h4>
                                <ul class="outcomes-list">
                                    <?php foreach ($subsection['outcomes'] as $outcome): ?>
                                        <li>
                                            <div class="outcome-item">
                                                <i class="fa-solid fa-check"></i>
                                                <span><?php echo $outcome; ?></span>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php if ($index < count($service['subsections']) - 1): ?>
                    <hr class="subsection-divider">
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="service-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center" data-aos="fade-up">
                        <h3>Ready to Transform Your Business?</h3>
                        <p class="text-size-18">Let's discuss how our <?php 
                            $title_lower = strtolower($service['title']); 
                            
                            // Handle specific capitalization cases
                            $title_lower = str_replace('iot', 'IoT', $title_lower);
                            $title_lower = str_replace('managed it services', 'Managed IT Services', $title_lower);
                            $title_lower = str_replace('cybersecurity services', 'Cybersecurity Services', $title_lower);
                            $title_lower = str_replace('infrastructure management', 'Infrastructure Management', $title_lower);
                            $title_lower = str_replace('next-generation workspace technologies', 'Next-Generation Workspace Technologies', $title_lower);
                            
                            echo $title_lower; 
                        ?> can drive your digital transformation.</p>
                        <a href="./contact-us.php" class="btn-cta">Get Started Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
}
?>