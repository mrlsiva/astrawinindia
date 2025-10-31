<?php
// Include service data first to get the service information
include 'includes/service-data.php';

// Get service ID from URL parameter
$serviceId = isset($_GET['service']) ? $_GET['service'] : 'software-solutions';

// Check if service exists and get the service data
$currentService = isset($services[$serviceId]) ? $services[$serviceId] : $services['software-solutions'];
$pageTitle = $currentService['title'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title><?php echo $pageTitle; ?> | Astrawinindia</title>
    <!-- /SEO Ultimate -->
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
                        <h1 class="text-white"><?php echo $pageTitle; ?></h1>
                        <div class="box">
                            <span class="mb-0">Home</span><i class="first fa-regular fa-angle-right"></i><i class="second fa-regular fa-angle-right"></i>
                            <span class="mb-0">Services</span><i class="first fa-regular fa-angle-right"></i><i class="second fa-regular fa-angle-right"></i>
                            <span class="mb-0 box_span"><?php echo $pageTitle; ?></span>
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

<?php
// Include service detail component
include 'includes/service-detail-component.php';

// Check if service exists
if (isset($services[$serviceId])) {
    // Render the service detail using the already loaded service data
    renderServiceDetail($currentService);
} else {
    // Service not found, redirect to services page or show error
    ?>
    <section class="error-section">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Service Not Found</h2>
                    <p>The requested service could not be found.</p>
                    <a href="./services.php" class="btn btn-primary">Back to Services</a>
                </div>
            </div>
        </div>
    </section>
    <?php
}
?>

<?php include 'includes/footer.html'; ?>
</body>
</html>