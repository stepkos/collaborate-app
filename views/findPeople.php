<!DOCTYPE html>
<html lang="en">
<head>

    <?php 
    session_start();
    require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/home.css" type="text/css"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  

    <title>Home</title>

</head>
<body>

        <?php require_once "templates/menuLeft.php"; ?>

        <main>
        
            <section id='left-panel'>

                <section id='projects-holder'>

                    <div id='find-projects'>Find projects</div>
                    <h1 id='my-projects'>My projects</h1>

                    <a href='#'>
                            <div class='project-card'>
                                <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                                <div class='project-category'>Web</div>
                                <div class='project-bottom-holder'>
                                    <h1 class='project-title'>
                                        Hackaton 2069
                                    </h1>

                                    <div class='project-tech-holder'>
                                        <div class='project-tech' style='background-color:blue'>Django</div>
                                        <div class='project-tech' style='background-color:orange'>HTML</div>
                                        <div class='project-tech' style='background-color:aqua'>CSS</div>
                                    </div>
                                </div>
                            </div>
                        </a>

                </section>
            </section>



           <section id="right-holder">

                <div id="swipe-information">
                    <span class="material-icons">
                        thumb_up
                    </span>
                </div>

                           
                <div class='project-card-find' style='z-index:2' id='2'>
                    <a href='{$link}'>
                        <div class='project-img-holder' style='background-image:url(static/images/obraz.png)'></div>
                        <div class='project-category'>WEB</div>

                        <div class='project-bottom-holder-find'>
                            <h1 class='project-title'>
                                Nazwa
                            </h1>

                            <div class='project-tech-holder'>
                                <div class='project-tech' style='background-color: red;'>javascript</div>
                                <div class='project-tech' style='background-color: green;'>php</div>
                            </div>
                        </div>
                    </a>
                </div>



                </section>

        </main>

        <script src="static/javascript/jquery.js" language="javascript"></script>
        <script src="static/javascript/hammer.js" language="javascript"></script>
        <script src="static/javascript/swipe.js" language="javascript"></script>
</body>
 

</html>