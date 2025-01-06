<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite SPA - Home</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            background-color: #f4f7fc;
            color: #333;
            overflow-x: hidden;
        }

        .root {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .page {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        /* Main Section Styles */
        .main {
            padding: 40px 20px;
            flex: 1;
        }

        .section {
            background-color: #fff;
            margin-bottom: 30px;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section h1,
        .section h2 {
            color: #2d3e50;
            margin-bottom: 15px;
        }

        .section .content {
            color: #555;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .intro {
            border-left: 5px solid #2d3e50;
        }

        /* Features Section */
        .features ul {
            list-style: none;
            padding-left: 20px;
        }

        .features ul li {
            margin-bottom: 12px;
            font-size: 1.1rem;
            color: #555;
        }

        .features ul li::before {
            content: '✔';
            color: #2d3e50;
            margin-right: 10px;
        }

        /* Mobile Responsive Design */
        @media (max-width: 768px) {
            .section {
                padding: 20px;
            }

            .features ul {
                padding-left: 15px;
            }
        }
    </style>
</head>

<body>
    <div class="root">
        <div class="page home">
            <!-- Include Header (PHP) -->
            <?php include("layouts/header.php"); ?>

            <!-- Main Content -->
            <div class="main">
                <div class="section intro">
                    <h1>Welcome to Lite SPA</h1>
                    <div class="content">
                        <p>
                            Lite SPA is a lightweight JavaScript library designed to build fast, efficient, and seamless
                            single-page applications. This documentation will guide you through Lite SPA’s features,
                            setup instructions, and usage tips to get started on your web development projects.
                        </p>
                        <p>
                            Discover how Lite SPA simplifies dynamic page rendering, custom error handling, and much more.
                            Explore the sections below for a deep dive!
                        </p>
                        <br>
                        <p><a href="./docs.php">Documentation</a> <a href="./download.php">Download</a></p>
                    </div>
                </div>

                <div class="section features">
                    <h2>Features</h2>
                    <ul>
                        <li>Lightweight and modular design for faster performance</li>
                        <li>Dynamic page rendering for seamless transitions</li>
                        <li>Customizable error handling for better user experience</li>
                        <li>Efficient script and resource management for optimal performance</li>
                        <li>Responsive and mobile-friendly design</li>
                    </ul>
                </div>

                <div class="section get-started">
                    <h2>Get Started</h2>
                    <div class="content">
                        <p>
                            Ready to start using Lite SPA in your project? Head over to the <a href="./docs.php">Documentation</a>
                            section for a step-by-step guide to setting up Lite SPA and creating your first app.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Include Footer (PHP) -->
            <?php include("layouts/footer.php"); ?>
        </div>
    </div>

    <!-- Lite SPA Script -->
    <script type="module" main="main" src="./_lite_spa/main.js"></script>

    <!-- Custom Script -->
    <script>
        console.log("Lite SPA Home Page Loaded");
    </script>
</body>

</html>