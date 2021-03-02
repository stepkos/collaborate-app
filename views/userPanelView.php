<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/userPanel.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once "templates/menuLeft.php"; ?>
    <main>


        <section id="leftSection">
                <div id="profile-picture1" style="background-image: url('static/images/john.jpg')"></div>
                <p id="user-name">John Doe</p>

                <div id="adds-holder">
                    <div class="add">
                        0<br/>
                        Projects
                    </div>

                    <div class="add">
                        0<br/>
                        Matches
                    </div>

                    <div class="add">
                        0<br/>
                        Stars
                    </div>
                </div>

            <div class="buttons">
                <a href="profile"><button id="button1">Display profile</button></a>
                <a href="editProfile"><button id="button2">Edit profile</button></a>
            </div>
        </div>

        </section>

        <section id="rightSection">


                <h1 id="projects-h1">My Projects</h1>

                <section id="projects-holder">

                    <a href='$link' style='text-decoration:none'>
                        <div class='project-card'>
                            <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                            <div class='project-category'>Web</div>
                            <div class='project-bottom-holder'>
                                <h1 class='project-title'>
                                    Hackaton 2069
                                </h1>

                                <div class='project-tech-holder'>
                                    aisudhasihdiashdiashd
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href='$link' style='text-decoration:none'>
                        <div class='project-card'>
                            <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                            <div class='project-category'>Web</div>
                            <div class='project-bottom-holder'>
                                <h1 class='project-title'>
                                    Hackaton 2069
                                </h1>

                                <div class='project-tech-holder'>
                                    aisudhasihdiashdiashd
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href='$link' style='text-decoration:none'>
                        <div class='project-card'>
                            <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                            <div class='project-category'>Web</div>
                            <div class='project-bottom-holder'>
                                <h1 class='project-title'>
                                    Hackaton 2069
                                </h1>

                                <div class='project-tech-holder'>
                                    aisudhasihdiashdiashd
                                </div>
                            </div>
                        </div>
                    </a>


                    <a href='$link' style='text-decoration:none'>
                        <div class='project-card'>
                            <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                            <div class='project-category'>Web</div>
                            <div class='project-bottom-holder'>
                                <h1 class='project-title'>
                                    Hackaton 2069
                                </h1>

                                <div class='project-tech-holder'>
                                    aisudhasihdiashdiashd
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href='$link' style='text-decoration:none'>
                        <div class='project-card'>
                            <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                            <div class='project-category'>Web</div>
                            <div class='project-bottom-holder'>
                                <h1 class='project-title'>
                                    Hackaton 2069
                                </h1>

                                <div class='project-tech-holder'>
                                    aisudhasihdiashdiashd
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href='$link' style='text-decoration:none'>
                        <div class='project-card'>
                            <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
                            <div class='project-category'>Web</div>
                            <div class='project-bottom-holder'>
                                <h1 class='project-title'>
                                    Hackaton 2069
                                </h1>

                                <div class='project-tech-holder'>
                                    aisudhasihdiashdiashd
                                </div>
                            </div>
                        </div>
                    </a>


                    <a href="addProject" id="add_button"><button>+</button></a>
                </section>
                

            
        </section>



    </main>
</body>
</html>