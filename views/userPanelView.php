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
        <div class="holder">
            <div class="user_photo">
                <img src="static/images/unknown-picture.jpg" />
            </div>

            <div class="name">
                John Doe
            </div>

            <div class="stats">
                <div class="stat">
                    <div class="stat_count">
                        3
                    </div>
                    <div class="stat_name">
                        Projects
                    </div>
                </div>
                <div class="stat">
                    <div class="stat_count">
                        8
                    </div>
                    <div class="stat_name">
                        Matches
                    </div>
                </div>
                <div class="stat">
                    <div class="stat_count">
                        5
                    </div>
                    <div class="stat_name">
                        Stars
                    </div>
                </div>
            </div>

            <div class="buttons">
                <a href="#"><button id="button1">Display profile</button></a>
                <a href="/collaborate/editProfile"><button id="button2">Edit profile</button></a>
            </div>
        </div>

        <div class="holder">
                <div class="projects_holder">
                    <div class="project">
                        <div class="project_picture" style="background-size: cover; background-image: url('static/images/john.jpg');">
                            <div class="option_buttons">
                                <a href="#" id="x_button"><button>X</button></a>
                            </div>
                            <div class="project_type">
                                Mobile
                            </div>
                        </div>
                        <div class="project_name">
                            Android App
                        </div>

                        <div class="project_tech">
                            <div class="tech">
                                Django
                            </div>
                            <div class="tech">
                                Golang
                            </div>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project_picture" style="background-size: cover; background-image: url('static/images/john.png');">
                            <div class="option_buttons">
                                <a href="#" id="x_button"><button>X</button></a>
                            </div>
                            <div class="project_type">
                                Web
                            </div>
                        </div>
                        <div class="project_name">
                            Blog website
                        </div>
                        <div class="project_tech">
                            <div class="tech">
                                Django
                            </div>
                        </div>
                    </div>
                    <div class="project">
                        <div class="project_picture" style="background-size: cover; background-image: url('static/images/obraz1.png');">
                            <div class="option_buttons">
                                <a href="#" id="x_button"><button>X</button></a>
                            </div>
                            <div class="project_type">
                                Desktop
                            </div>
                        </div>
                        <div class="project_name">
                            HackHeroes2020
                        </div>
                        <div class="project_tech">
                            <div class="tech">
                                C#
                            </div>
                            <div class="tech">
                                UWP
                            </div>
                            <div class="tech">
                                C++
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" id="add_button"><button>+</button></a>
            </div>
        </div>
    </main>
</body>
</html>