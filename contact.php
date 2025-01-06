<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite SPA - Contact</title>
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

        /* Contact Form */
        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            font-size: 1rem;
            width: 100%;
        }

        .contact-form button {
            padding: 10px 20px;
            background-color: #2d3e50;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .contact-form button:hover {
            background-color: #1d2d3a;
        }

        /* Social Media Links */
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            text-decoration: none;
            font-size: 1.5rem;
            color: #2d3e50;
        }

        .social-links a:hover {
            color: #1d2d3a;
        }

        /* Mobile Responsive Design */
        @media (max-width: 768px) {
            .section {
                padding: 20px;
            }

            .contact-form input,
            .contact-form textarea {
                padding: 8px;
            }

            .contact-form button {
                font-size: 1rem;
            }

            .social-links {
                justify-content: center;
            }
        }
    </style>
</head>

<body>
    <div class="root">
        <div class="page contact">
            <!-- Include Header (PHP) -->
            <?php include("layouts/header.php"); ?>

            <!-- Main Content -->
            <div class="main">
                <div class="section intro">
                    <h1>Contact Us</h1>
                    <div class="content">
                        <p>
                            We'd love to hear from you! Whether you have a question, feedback, or just want to say hello, feel
                            free to reach out using the form below or through our social media channels.
                        </p>
                    </div>
                </div>

                <div class="section contact-form-section">
                    <h2>Get in Touch</h2>
                    <div class="content">
                        <form class="contact-form" action="#" method="post">
                            <input type="text" name="name" placeholder="Your Name" required>
                            <input type="email" name="email" placeholder="Your Email" required>
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                            <button type="submit">Send Message</button>
                        </form>
                    </div>
                </div>

                <div class="section social-media">
                    <h2>Follow Us</h2>
                    <div class="content">
                        <p>Stay connected with us, say hello!:</p>
                        <div class="social-links">
                            <a href="https://wa.me/+923011840378" class="whtsapp" redirect="true" target="_blank">
                                <span>WhatsApp</span>
                            </a>
                        </div>
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
        console.log("Lite SPA Contact Page Loaded");
    </script>
</body>

</html>