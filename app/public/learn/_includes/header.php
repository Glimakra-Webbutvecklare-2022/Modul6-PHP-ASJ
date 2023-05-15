<header>
    Ett sidhuvud...

    <?= isset($_SESSION['username']) ? $_SESSION['username'] : ""; ?>
</header>
<nav>
    <a href="bird.php">Fåglar</a> | 
    <a href="login.php">Logga in</a> | 
    <a href="logout.php">Logga ut</a> | 
</nav>
<hr>