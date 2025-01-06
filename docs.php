<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lite SPA Documentation</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
    <style>
        /* Global Styles */

        .heading h1 {
            margin-top: 0;
            color: chocolate;
        }

        .section pre {
            background-color: #2d3436;
            color: #fff;
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
            font-family: 'Courier New', monospace;
        }

        code {
            color: #e67e22;
        }

        ol {
            padding-left: 20px;
        }

        /* Button and Success Message */
        .copy-btn {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 8px 12px;
            margin-top: 5px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 5px;
        }

        .copy-btn:hover {
            background-color: #2980b9;
        }

        .success-message {
            margin-top: 10px;
            padding: 8px;
            background-color: #2ecc71;
            color: white;
            font-weight: bold;
            display: none;
            border-radius: 5px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .root {
                width: 95%;
            }
        }
    </style>
</head>

<body>
    <div class="root">
        <div class="page documentation">
            <?php include("layouts/header.php"); ?>

            <div class="main">

                <div class="section intro">
                    <h1>Lite SPA - Single Page Application (SPA) Framework</h1>
                    <p>A simple framework for building single-page applications with dynamic content loading.</p>
                </div>
                <div class="section">
                    <h2>Overview</h2>
                    <p>Lite SPA is a lightweight solution to build Single Page Applications (SPA) by intercepting page loads, allowing you to create dynamic and seamless user experiences. It helps with partial page updates by using AJAX to load and replace content without a full page reload.</p>
                    <p>The core feature of Lite SPA is that it handles form submissions, link clicks, and dynamic content changes by updating the URL and swapping in new content with minimal overhead.</p>
                </div>
                <div class="section">
                    <h2>Installation</h2>
                    <p>To use Lite SPA in your project, follow the steps below:</p>
                    <div class="content">
                        <li>Download or clone the Lite SPA script from your repository (or the package you have).</li>
                        <li>Include the Lite SPA script file in your HTML:</li>
                        <pre>
                            <code>&lt;script type="module" src="path/to/lite_spa/main.js"&gt;&lt;/script&gt;</code>
                        </pre>
                        <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                        <div class="success-message">Code copied successfully!</div>

                        <li>Initialize Lite SPA in your JavaScript file:</li>
                        <pre>
                            <code>
                                document.addEventListener("DOMContentLoaded", () => {
                                    const spaHandler = new LiteSAPHandler({
                                        baseUrl: window.location.origin, // Base URL of your application
                                        rootSelector: ".root", // The root element where content will be updated
                                    });
                                });
                            </code>
                        </pre>
                        <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                        <div class="success-message">Code copied successfully!</div>
                    </div>
                </div>

                <div class="section">
                    <h2>Usage</h2>
                    <h3>1. Initializing Lite SPA</h3>
                    <div class="content">
                        <p>After including the script, you need to initialize the Lite SPA handler. The handler will take care of intercepting page loads, form submissions, and dynamically loading content based on the URL.</p>
                        <pre>
                        <code>
                            // Initialize the Lite SAP handler
                            const spaHandler = new LiteSAPHandler({
                                baseUrl: window.location.origin,  // Your app's base URL
                                rootSelector: ".root",  // The container element to update
                            });
                        </code>
                    </pre>
                        <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                        <div class="success-message">Code copied successfully!</div>
                    </div>

                    <h3>2. Handling Form Submissions</h3>
                    <p>Lite SPA can intercept form submissions to avoid full-page reloads and dynamically update content. Here's an example of handling a search form submission:</p>
                    <pre>
                        <code>
                            document.querySelector("form").addEventListener("submit", (event) => {
                                event.preventDefault(); // Prevent the default form submission

                                const formData = new FormData(event.target);
                                const searchQuery = formData.get("q");

                                // Update the URL and load new content dynamically
                                spaHandler.render(`?q=${encodeURIComponent(searchQuery)}`);
                            });
                        </code>
                    </pre>
                    <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                    <div class="success-message">Code copied successfully!</div>

                    <h3>3. Linking Between Pages</h3>
                    <p>Links within your application can be handled dynamically with Lite SPA. When a user clicks on a link, Lite SPA will load the content associated with that link without reloading the entire page:</p>
                    <pre>
                        <code>
                            // Example of handling link clicks
                            document.querySelectorAll('a').forEach(link => {
                                link.addEventListener('click', (event) => {
                                    event.preventDefault();  // Prevent full page reload
                                    const targetUrl = link.getAttribute('href');

                                    spaHandler.render(targetUrl);  // Load the content for the link dynamically
                                });
                            });
                        </code>
                    </pre>
                    <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                    <div class="success-message">Code copied successfully!</div>
                </div>

                <div class="section">
                    <h2>API Reference</h2>
                    <p>Lite SPA provides the following methods:</p>
                    <h3>LiteSAPHandler</h3>
                    <p>The main object used to manage and render the SPA pages.</p>

                    <h4>Constructor</h4>
                    <p>The constructor takes an options object:</p>
                    <pre>
                        <code>
                            const spaHandler = new LiteSAPHandler({
                                baseUrl: window.location.origin,  // The base URL of your application
                                rootSelector: ".root",  // The selector of the root element to update
                            });
                        </code>
                    </pre>
                    <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                    <div class="success-message">Code copied successfully!</div>

                    <h4>Methods</h4>
                    <ul>
                        <li><strong>render(url)</strong>: Updates the page content based on the given URL. The URL can include query parameters or hash fragments.</li>
                        <li><strong>getCurrentUrl()</strong>: Returns the current URL being managed by Lite SPA.</li>
                    </ul>
                </div>

                <div class="section">
                    <h2>Example Integration</h2>
                    <p>Here’s a complete example of how you can integrate Lite SPA in your project:</p>
                    <pre>
                        <code>
                            &lt;!DOCTYPE html&gt;
                            &lt;html lang="en"&gt;
                            &lt;head&gt;
                                &lt;meta charset="UTF-8"&gt;
                                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
                                &lt;title&gt;Lite SPA Example&lt;/title&gt;
                                &lt;script type="module" src="path/to/lite_spa/main.js"&gt;&lt;/script&gt;
                            &lt;/head&gt;
                            &lt;body&gt;

                                &lt;div class="root"&gt;
                                    &lt;!-- Content will be dynamically loaded here --&gt;
                                &lt;/div&gt;

                                &lt;script&gt;
                                    document.addEventListener("DOMContentLoaded", () =&gt; {
                                        const spaHandler = new LiteSAPHandler({
                                            baseUrl: window.location.origin,
                                            rootSelector: ".root",
                                        });

                                        document.querySelector("form").addEventListener("submit", (event) =&gt; {
                                            event.preventDefault();
                                            const formData = new FormData(event.target);
                                            const searchQuery = formData.get("q");
                                            spaHandler.render(`?q=${encodeURIComponent(searchQuery)}`);
                                        });
                                    });
                                &lt;/script&gt;

                            &lt;/body&gt;
                            &lt;/html&gt;
                        </code>
                    </pre>
                    <button class="copy-btn" data-clipboard-target="code">Copy Code</button>
                    <div class="success-message">Code copied successfully!</div>
                </div>
            </div>

            <?php include("layouts/footer.php"); ?>
        </div>
    </div>

    <script>
        // JavaScript to handle code copying and show success message
        document.querySelectorAll('.copy-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const code = e.target.previousElementSibling;
                const codeText = code.textContent || code.innerText;

                navigator.clipboard.writeText(codeText).then(() => {
                    const successMessage = e.target.nextElementSibling;
                    successMessage.style.display = 'block';
                    setTimeout(() => {
                        successMessage.style.display = 'none';
                    }, 2000);
                });
            });
        });
    </script>
</body>

</html>