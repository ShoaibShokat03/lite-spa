<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users Page</title>
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

        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid #ccc;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f8f8f8;
            color: #333;
        }

        td img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        /* Loading Style */
        #dataTable tbody tr {
            text-align: center;
        }

        /* Mobile Responsive Design */
        @media (max-width: 768px) {

            table,
            th,
            td {
                font-size: 0.9rem;
            }

            td img {
                width: 40px;
                height: 40px;
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
                <!-- Introduction Section -->
                <div class="section intro">
                    <h1>Welcome to the Users Page</h1>
                    <div class="content">
                        <p>
                            This page dynamically fetches and displays a list of randomly generated users from the
                            <a href="https://randomuser.me/">RandomUser.me API</a>. You can view details like name,
                            email, phone number, and country for each user in the table below. It's a great way to explore
                            user data and see how dynamic content can be displayed using API integration.
                        </p>
                        <p>
                            You can interact with the table, which shows profile pictures along with key user details.
                            The data is fetched on page load, and the number of users displayed is automatically updated.
                        </p>
                        <p>
                            <strong>Features of this page:</strong>
                        </p>
                        <ul>
                            <li>Dynamic fetching and display of user data</li>
                            <li>Responsive table for desktop and mobile views</li>
                            <li>Real-time update of user count</li>
                            <li>User profile images displayed as thumbnails</li>
                        </ul>
                    </div>
                </div>

                <!-- Users Table Section -->
                <div class="section">
                    <h2>Users List</h2>
                    <div class="content">
                        <table id="dataTable">
                            <thead>
                                <tr>
                                    <th colspan="5">
                                        <p>Users: <span id="total">0</span></p>
                                    </th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th>Picture</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="5">Loading...</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Include Footer -->
            <?php include("layouts/footer.php"); ?>
        </div>
    </div>

    <!-- Lite SPA Script -->
    <script type="module" main="main" src="./_lite_spa/main.js"></script>

    <script>
        // Fetch users from randomuser.me API
        fetch('https://randomuser.me/api/?results=500')
            .then(response => response.json())
            .then(data => {
                displayData(data.results);
            })
            .catch(error => console.error('Error fetching data:', error));

        // Function to display user data in table
        function displayData(users) {
            const tableBody = document.querySelector('#dataTable tbody');
            tableBody.innerHTML = ''; // Clear existing rows

            const total = document.querySelector("#total");
            total.textContent = users.length;

            users.forEach(user => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td><img src="${user.picture.thumbnail}" alt="User Picture"></td>
                    <td>${user.name.first} ${user.name.last}</td>
                    <td>${user.email}</td>
                    <td>${user.phone}</td>
                    <td>${user.location.country}</td>
                `;
                tableBody.appendChild(row);
            });
        }
    </script>

</body>

</html>