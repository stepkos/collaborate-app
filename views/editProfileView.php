<!DOCTYPE html>
<html lang="pl-PL">

<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/editProfile.css" type="text/css"/>
    <title>Edit Profile</title>

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

                    foreach($technologies as $tech) {
                        $active = '';
                        if ($tech['id'] != null) {
                            $active = 'checked=true';
                        }

                        echo '
                            <input type="checkbox" class="technology-checkbox" id='.$tech['name'].' value="'.$tech['name'].'" name="technologies[] " '.$active.' >
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
                <input type="email" id="email-change" name="email">

                <label for="password-change">Change password</label>
                <input type="password" id="password-change" name="password">

            </section>

            <section id="right-panel-links">

                <label for="link-change-portfolio" class="links-label">Portfolio</label>
                <input type="text" name="link-portfolio" value="<?= (isset($links['Portfolio'])) ? $links['Portfolio'] : '' ?>">

                <label for="link-change-github" class="links-label">Github</label>
                <input type="text" name="link-github" value="<?= (isset($links['Github'])) ? $links['Github'] : '' ?>">

                <label for="link-change-facebook" class="links-label">Facebook</label>
                <input type="text" name="link-facebook" value="<?= (isset($links['Facebook'])) ? $links['Facebook'] : '' ?>">

                <label for="link-change-linkedln" class="links-label">Linkedln</label>
                <input type="text" name="link-linkedln" value="<?= (isset($links['Linkedln'])) ? $links['Linkedln'] : '' ?>">

                <label for="link-change-instagram" class="links-label">Instagram</label>
                <input type="text" name="link-instagram" value="<?= (isset($links['Instagram'])) ? $links['Instagram'] : '' ?>">

                <label for="link-change-twitter" class="links-label">Twitter</label>
                <input type="text" name="link-twitter" value="<?= (isset($links['Twitter'])) ? $links['Twitter'] : '' ?>">
            </section>

            <input type="submit" value="Submit" id="submit-button">
        </form>
        
    </main>


</body>
</html>