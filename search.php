<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <?php
    // Sample technologies array
    $computerTechnologies = [
        ["Technology" => "HTML", "Description" => "HyperText Markup Language, the standard language for web pages."],
        ["Technology" => "CSS", "Description" => "Cascading Style Sheets, used for styling web pages."],
        ["Technology" => "JavaScript", "Description" => "A programming language used to create dynamic and interactive effects on web pages."],
        ["Technology" => "PHP", "Description" => "A server-side scripting language used for web development."],
        ["Technology" => "MySQL", "Description" => "An open-source relational database management system."],
        ["Technology" => "Python", "Description" => "A high-level programming language for general-purpose programming."],
        ["Technology" => "Java", "Description" => "A programming language and computing platform used for web and application development."]
    ];

    // Handle search query if it exists
    $searchQuery = isset($_GET['q']) ? $_GET['q'] : '';
    $filteredTechnologies = [];

    if ($searchQuery) {
        foreach ($computerTechnologies as $tech) {
            if (stripos($tech["Technology"], $searchQuery) !== false || stripos($tech["Description"], $searchQuery) !== false) {
                $filteredTechnologies[] = $tech;
            }
        }
    } else {
        $filteredTechnologies = $computerTechnologies;
    }
    ?>

    <div class="root">
        <div class="page home">
            <?php include("layouts/header.php"); ?>
            <div class="main">
                <div class="heading">
                    <h1>Search Page</h1>
                    <br>
                    <p><span>Your search query is: </span><span><?php echo htmlspecialchars($searchQuery); ?></span></p>
                </div>
                
                <div class="section">
                    <div class="content">
                        <table id="dataTable" border="1">
                            <thead>
                                <th colspan="3">
                                    <p>Technologies: <span><?php echo count($filteredTechnologies); ?>/<?php echo count($computerTechnologies); ?></span></p>
                                </th>
                            </thead>
                            <thead>
                                <tr>
                                    <th>Sr#</th>
                                    <th>Technology</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (count($filteredTechnologies) > 0): ?>
                                    <?php foreach ($filteredTechnologies as $index => $technology): ?>
                                        <tr>
                                            <td><?php echo $index + 1; ?></td>
                                            <td><?php echo htmlspecialchars($technology["Technology"]); ?></td>
                                            <td><?php echo htmlspecialchars($technology["Description"]); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="3" style="text-align: center;">No results found for your search query.</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php include("layouts/footer.php"); ?>
        </div>
    </div>

    <!-- Lite SPA Script -->
    <script type="module" main="main" src="./_lite_spa/main.js"></script>
</body>

</html>
