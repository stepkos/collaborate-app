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
            <input type="file" alt="Profile picture input" id="profile-picture-input">

            <div id="description-holder">
                <textarea placeholder="Your profile description..." cols="30" rows="10"></textarea>
            </div>
            
            </section>

            <section id="top-panel-technology">

                <label for="search-technology" id="search-label">Your technologies</label>
                <input type="text" name="search-technology" id="search-input" placeholder="Search...">

                <div id="technologies-holder">

                    
                    <input type="checkbox" class="technology-checkbox" id="Node.js" value="Node.js" name="Node.js">
                    <label for="Node.js" class="technology-div" style="background-color:lime;">
                        <span style="z-index:2;">Node.js</span>
                    </label>


                    <input type="checkbox" class="technology-checkbox" id="HTML" value="HTML" name="HTML" checked="true">
                    <label for="HTML" class="technology-div" style="background-color:orange;">
                        <span style="z-index:2;">HTML</span>
                    </label>

                    <input type="checkbox" class="technology-checkbox" id="CSS" value="CSS" name="CSS" checked="true">
                    <label for="CSS" class="technology-div" style="background-color:blue;">
                        <span style="z-index:2;">CSS</span>
                    </label>

                    <input type="checkbox" class="technology-checkbox" id="Javascript" value="Javascript" name="Javascript">
                    <label for="Javascript" class="technology-div" style="background-color:yellow;">
                        <span style="z-index:2;">Javascript</span>
                    </label>

                    <input type="checkbox" class="technology-checkbox" id="PHP" value="PHP" name="PHP">
                    <label for="PHP" class="technology-div" style="background-color:orange;">
                        <span style="z-index:2;">PHP</span>
                    </label>

                    <input type="checkbox" class="technology-checkbox" id="Vue.js" value="Vue.js" name="Vue.js" checked="true">
                    <label for="Vue.js" class="technology-div" style="background-color:green;">
                        <span style="z-index:2;">Vue.js</span>
                    </label>

                    <input type="checkbox" class="technology-checkbox" id="C#" value="C#" name="C#" checked="true">
                    <label for="C#" class="technology-div" style="background-color:purple;">
                        <span style="z-index:2;">C#</span>
                    </label>

                    <input type="checkbox" class="technology-checkbox" id="C++" value="C++" name="C++" checked="true">
                    <label for="C++" class="technology-div" style="background-color:blue;">
                        <span style="z-index:2;">C++</span>
                    </label>

                    
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