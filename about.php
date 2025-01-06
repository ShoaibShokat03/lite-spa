<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite SPA - About</title>
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

        /* Mobile Responsive Design */
        @media (max-width: 768px) {
            .section {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="root">
        <div class="page about">
            <!-- Include Header (PHP) -->
            <?php include("layouts/header.php"); ?>

            <!-- Main Content -->
            <div class="main">
                <div class="section intro">
                    <h1>About Lite SPA</h1>
                    <div class="content">
                        <p>
                            Lite SPA is a modern JavaScript library designed to help developers create fast, efficient, and
                            seamless single-page applications (SPAs). It was built with simplicity, performance, and flexibility
                            in mind, making it an excellent choice for developers looking for an easy-to-use framework for their
                            web projects.
                        </p>
                        <p>
                            Unlike traditional multi-page applications, Lite SPA allows developers to render content dynamically
                            on a single page without refreshing the browser, ensuring a smooth and engaging user experience.
                        </p>
                    </div>
                </div>

                <div class="section features">
                    <h2>Key Features</h2>
                    <div class="content">
                        <ul>
                            <li>Lightweight and Modular Design</li>
                            <li>Dynamic Page Rendering for Faster User Interactions</li>
                            <li>Customizable Error Handling for Robust Applications</li>
                            <li>Seamless Transitions Between Views</li>
                            <li>Easy Integration with Existing Projects</li>
                            <li>Responsive Design for Mobile and Desktop</li>
                        </ul>
                    </div>
                </div>

                <div class="section philosophy">
                    <h2>Our Philosophy</h2>
                    <div class="content">
                        <p>
                            At Lite SPA, we believe in keeping things simple and intuitive. The goal is to make the development
                            process as smooth as possible, empowering developers to focus on building great features rather than
                            worrying about complex configurations.
                        </p>
                        <p>
                            We understand the importance of performance in modern web applications, and that’s why Lite SPA is
                            optimized to deliver fast, responsive experiences, even on slower networks or devices.
                        </p>
                    </div>
                </div>

                <div class="section get-started">
                    <h2>Get Started</h2>
                    <div class="content">
                        <p>
                            Want to get started with Lite SPA? Head over to our <a href="./docs.php">Documentation</a> page to
                            learn more about how to integrate Lite SPA into your web projects.
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
        console.log("Lite SPA About Page Loaded");
    </script>
</body>

</html>