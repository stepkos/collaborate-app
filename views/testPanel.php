<!DOCTYPE html>
<html lang="pl-PL">

<head>

    <?php require_once "../templates/metadata.php"; ?>
    <link rel="stylesheet" href="../static/css/testPanel.css" type="text/css"/>
    <title>Document</title>

</head>


<body>
    <?php require_once "../templates/menuLeft.php"; ?>

    <main>
        <form>
            <section id="left-panel-profile">

                

            </section>

            <section id="top-panel-technology">

                <label for="search-technology" id="search-label">Your technologies</label>
                <input type="email" name="search-technology" id="search-input" placeholder="Search...">

                <div id="technologies-holder">

                    <label for="Node.js" class="technology-div">Node.js</label>
                    <input type="checkbox" class="technology-checkbox" id="Node.js" value="Node.js">

                </div>

            </section>

            <section id="middle-panel-email-password">

                <label for="email-change">Change email</label>
                <input type="email" id="email-change" name="email-change">

                <label for="password-change">Change password</label>
                <input type="text" id="password-change" name="password-change">

            </section>

            <section id="right-panel-links">

                <label for="link-change-portfolio" class="links-label">Portfolio</label>
                <input type="text" name="link-change-portfolio">

                <label for="link-change-github" class="links-label">Github</label>
                <input type="text" name="link-change-github">

                <label for="link-change-facebook" class="links-label">Facebook</label>
                <input type="text" name="link-change-facebook">

                <label for="link-change-linkedln" class="links-label">Linkedln</label>
                <input type="text" name="link-change-linkedln">

                <label for="link-change-instagram" class="links-label">Instagram</label>
                <input type="text" name="link-change-instagram">

                <label for="link-change-twitter" class="links-label">Twitter</label>
                <input type="text" name="link-change-twitter">
            </section>

            <input type="submit" value="submit" id="submit-button">
        </form>
        
    </main>


</body>
</html>