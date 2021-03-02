<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="../static/css/404.css" type="text/css"/>
    <title>Error 404</title>

</head>
<body>

    <?php require_once "templates/menuLeft.php"; ?>
    <main>
        <p id="p404">404</p>
        <p id="error-description">Page not found</p>
        <a href=<?= ROOT_URL ?>>
            <div id="homeButton">Home</div>
        </a>
    </main>



</body>
</html>