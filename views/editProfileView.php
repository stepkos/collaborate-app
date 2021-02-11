<!DOCTYPE html>
<html lang="pl-PL">

<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/editProfile.css" type="text/css"/>
    <title>Document</title>

</head>


<body>
    <?php require_once "templates/menuLeft.php"; ?>

    <main>
        <form method="POST">
            <section id="left-panel-profile">

            <label for="profile-picture-input" id="label-picture"><img src="static/images/unknown-picture.jpg"/></label>
            <input type="file" alt="Profile picture input" id="profile-picture-input" name="profile_picture">

            <div id="description-holder">
                <textarea name="description" placeholder="Your profile description..." cols="30" rows="10"></textarea>
            </div>
            
            </section>

            <section id="top-panel-technology">

                <label for="search-technology" id="search-label">Your technologies</label>
                <input type="text" name="search-technology" id="search-input" placeholder="Search...">

                <div id="technologies-holder">

                <?php
                    require_once "models/editProfileModel.php";

                    foreach($technologies as $tech) {

                        $active = 'false';
                        if ($tech['id'] != null) {
                            $active = 'true';
                        }

                        echo '
                            <input type="checkbox" class="technology-checkbox" id='.$tech['name'].' value="'.$tech['name'].'" name="'.$tech['name'].'" checked="'.$active.'">
                            <label for="'.$tech['name'].'" class="technology-div" style="background-color: '.$tech['color'].';">
                                <span style="z-index:2;">'.$tech['name'].'</span>
                            </label>
                        ';
                    }

                ?>

                    
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

            <input type="submit" value="Submit" id="submit-button">
        </form>
        
    </main>


</body>
</html>