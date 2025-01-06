<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Images Page</title>
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
            <!-- Include Header -->
            <?php include("layouts/header.php"); ?>

            <!-- Main Content -->
            <div class="main">

                <div class="section intro">
                    <h2>Why This Page?</h2>
                    <div class="content">
                        <p>
                            Welcome to the Images Page! This page is designed to display a variety of randomly generated images, which
                            are pulled from the <a href="https://picsum.photos/" target="_blank">Picsum Photos</a> service. The idea behind this page is to show how
                            images can be dynamically loaded and displayed in an efficient manner. Whether you are looking for placeholder
                            images or just need inspiration, this page serves as a great example for integrating dynamic content into your
                            web application.
                        </p>
                        <p>
                            The images displayed are fetched through a loop in PHP, making this page a dynamic resource that you can scale up
                            for different use cases, such as image galleries, portfolios, or even dynamic content on your website.
                        </p>
                    </div>
                </div>

                <div class="section">
                    <h2>Image Gallery</h2>
                    <div class="content">
                        <?php for ($i = 0; $i < 500; $i++): ?>
                            <img loading="lazy" src="<?php echo "https://picsum.photos/id/{$i}/200/300"; ?>" alt="Image" />
                        <?php endfor; ?>
                    </div>
                </div>
            </div>

            <!-- Include Footer -->
            <?php include("layouts/footer.php"); ?>
        </div>
    </div>

    <!-- Lite SPA Script -->
    <script type="module" main="main" src="./_lite_spa/main.js"></script>

</body>

</html>