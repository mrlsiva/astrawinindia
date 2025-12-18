<!DOCTYPE html>
<html lang="en">

<head>
    <title>404 - Page Not Found | Astrawin India</title>
    <?php include 'includes/head.php'; ?>
    <style>
        .error-section {
            padding: 100px 0;
            min-height: 70vh;
            display: flex;
            align-items: center;
        }
        .error-content {
            text-align: center;
        }
        .error-code {
            font-size: 120px;
            font-weight: 700;
            color: #1b778e;
            line-height: 1;
            margin-bottom: 20px;
        }
        .error-title {
            font-size: 36px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 20px;
        }
        .error-text {
            font-size: 18px;
            color: #666;
            margin-bottom: 40px;
        }
        .error-links {
            display: flex;
            gap: 20px;
            justify-content: center;
            flex-wrap: wrap;
        }
        .error-link {
            padding: 15px 30px;
            background: #1b778e;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s;
        }
        .error-link:hover {
            background: #e54d0a;
            transform: translateY(-2px);
        }
        .error-link.secondary {
            background: #1a1a1a;
        }
        .error-link.secondary:hover {
            background: #333;
        }
    </style>
</head>

<body>
    <?php include 'includes/header.php'; ?>

    <section class="error-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="error-content">
                        <div class="error-code">404</div>
                        <h1 class="error-title">Oops! Page Not Found</h1>
                        <p class="error-text">The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.</p>
                        <div class="error-links">
                            <a href="./index.php" class="error-link">
                                <i class="fas fa-home"></i> Go to Homepage
                            </a>
                            <a href="./services.php" class="error-link secondary">
                                <i class="fas fa-cogs"></i> View Services
                            </a>
                            <a href="./contact-us.php" class="error-link secondary">
                                <i class="fas fa-envelope"></i> Contact Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.html'; ?>
</body>

</html>
