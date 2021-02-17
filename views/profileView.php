<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/profile.css" type="text/css"/>
    <title>Profile - John Doe</title>

</head>
<body>

        <?php require_once "templates/menuLeft.php"; ?>

        <main>
            <section id="leftSection">
                <div id="profile-picture1" style="background-image: url('static/images/john.jpg')"></div>
                <p id="user-name">John Doe</p>

                <div id="adds-holder">
                    <div class="add">
                        3<br/>
                        Projects
                    </div>

                    <div class="add">
                        8<br/>
                        Matches
                    </div>

                    <div class="add">
                        5<br/>
                        Stars
                    </div>
                </div>


                <div id="user-description">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit molestiae eaque quod debitis, iusto minus asperiores pariatur voluptatum illo obcaecati voluptatibus ad ut possimus autem ipsum, id suscipit nobis nemo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi adipisci debitis voluptates, minus saepe qui possimus blanditiis facere quidem reiciendis voluptas non! Sed, quam! Debitis incidunt hic similique quas tenetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam quae velit magnam veritatis adipisci autem quaerat dolore nesciunt. Obcaecati sint nam, vero tempora quas eos exercitationem accusantium quisquam nobis libero.
                </div>


            

                
                    <div id="portfolio-div">
                        <a href="#" style="text-decoration:none; color:white">
                            Portfolio Page
                        </a>
                    </div>
                

                    <div id="social-holder">
                        <a href="#">
                            <img src="static/images/icons/fb.png" class="social-icons"/>
                        </a>
                        <img src="static/images/icons/instagram.webp" class="social-icons"/>
                        <img src="static/images/icons/github.webp" class="social-icons"/>
                        <img src="static/images/icons/linkedin.png" class="social-icons"/>
                        <img src="static/images/icons/twitter.png" class="social-icons"/>
                        
                    </div>
                

            </section>

            
            <section id="rightSection">

                <h1 id="technology-h1">My technologies</h1>

                <div id="technology-holder">
                    <div class="technology-div" style="background-color:lime">Node.js</div>
                    <div class="technology-div" style="background-color:blue">CSS</div>
                    <div class="technology-div" style="background-color:orange">HTML</div>
                    <div class="technology-div" style="background-color:yellow">Javascript</div>
                    <div class="technology-div" style="background-color:aqua">React</div>
                    <div class="technology-div" style="background-color:purple">C#</div>
                    <div class="technology-div" style="background-color:red">Angular.js</div>
                    <div class="technology-div" style="background-color:magenta; margin-right:auto">C++</div>
                </div>

                <h1 id="projects-h1">My Projects</h1>

                <section id="projects-holder">

                    <a href="#" style="text-decoration:none">
                        <div class="project-card">
                            <div class="project-img-holder" style="background-image:url(static/images/john.png)"></div>
                            <div class="project-category">Web</div>
                            <div class="project-bottom-holder">
                                <h1 class="project-title">
                                    Hackaton 2069
                                </h1>

                                <div class="project-tech-holder">
                                    <div class="project-tech" style="background-color:blue">Django</div>
                                    <div class="project-tech" style="background-color:orange">HTML</div>
                                    <div class="project-tech" style="background-color:aqua">CSS</div>
                                </div>
                            </div>
                        </div>
                    </a>




                    <a href="#" style="text-decoration:none">
                        <div class="project-card">
                            <div class="project-img-holder" style="background-image:url(static/images/obraz.png)"></div>
                            <div class="project-category">Desktop</div>
                            <div class="project-bottom-holder">
                                <h1 class="project-title">
                                    Hackaton 3077
                                </h1>

                                <div class="project-tech-holder">
                                    <div class="project-tech" style="background-color:blue">Django</div>
                                    <div class="project-tech" style="background-color:orange">HTML</div>
                                    <div class="project-tech" style="background-color:aqua">CSS</div>
                                </div>
                            </div>
                        </div>
                    </a>



                </section>


            </section>
        </main>


</body>
</html>