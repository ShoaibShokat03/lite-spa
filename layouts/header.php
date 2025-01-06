<div class="header">
    <div class="app-name">
        <a href="./index.php">Lite SPA</a>
    </div>
    <div class="nav-links">
        <a href="./index.php" class="nav-link">Home</a>
        <a href="./docs.php" class="nav-link">Documentation</a>
        <a href="./about.php" class="nav-link">About</a>
        <a href="./contact.php" class="nav-link">Contact</a>
        <a href="./images.php" class="nav-link">Loop Images</a>
        <a href="./users.php" class="nav-link">Users</a>
        <a href="https://github.com/ShoaibShokat03" class="nav-link active">Git Hub</a>
    </div>
</div>
<div class="search-box">
    <form action="./search.php" method="get">
        <input type="search" placeholder="Search technolgoy html css js..." name="q" value="<?php echo htmlspecialchars(isset($_GET['q']) ? $_GET['q'] : ''); ?>">
        <button type="submit">Search</button>
    </form>
</div>