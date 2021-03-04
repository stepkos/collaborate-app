<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/userPanel.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User panel</title>
</head>
<body>
    <?php require_once "templates/menuLeft.php"; ?>
    <main>


        <section id="leftSection">
                <div id="profile-picture1" style="background-image: url(data:image/jpg;base64,<?php echo $_SESSION['profile_picture']?>"></div>
                <p id="user-name"><?php print_r($user_main_data[0][0]) ?></p>

                <div id="adds-holder">
                    <div class="add">
                    <?php print_r($user_projects_count[0][0]); ?><br/>
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
                <a href=<?= ROOT_URL."profile/".$profile_user_id ?>><button id="button1">Display profile</button></a>
                <a href="editProfile"><button id="button2">Edit profile</button></a>
            </div>
        </div>

        </section>

        <section id="rightSection">


                <h1 id="projects-h1">My Projects</h1>

                <section id="projects-holder">

                <?php
                   
                   for($i = 0; $i <  $user_projects_count[0][0]; $i+=1){

                            $tempName = $user_projects[0][2];
                            $single_offert = array_values(array_filter($user_projects, function($record) use ($tempName){
                                return $record[2] === $tempName;
                            }));
                            $user_projects = array_slice($user_projects, count($single_offert));

                            $id = $single_offert[0][0];
                            $offert_name = $single_offert[0][3];
                            $project_picture = $single_offert[0][2];
                            $project_category = $single_offert[0][5];
                           
                           $technologies = NULL;
                           foreach($single_offert as $record){
                               $name = $record['technology'];
                               $color = $record['color'];
                               $technologies.="<div class='project-tech' style='background-color:{$color}'>{$name}</div>";
                           };

                           $link = ROOT_URL."offertDetails/".$id;

                           echo "
                           <a href='$link' style='text-decoration:none'>
                               <div class='project-card'>
                                   <div class='project-img-holder' style='background-image:url(data:image/jpg;base64,".$project_picture.")'></div>
                                   <div class='project-category'>$project_category</div>
                                   <div class='project-bottom-holder'>
                                       <h1 class='project-title'>
                                       $offert_name
                                       </h1>

                                       <div class='project-tech-holder'>
                                           $technologies
                                       </div>
                                   </div>
                               </div>
                           </a>
                           ";
                       
                   }
                   
                   ?>

                    <!--<a href='$link' style='text-decoration:none'>
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
                                    adhdlgbthwdp
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
                    </a>-->


                    <a href="addProject" id="add_button"><button>+</button></a>
                </section>
                

            
        </section>



    </main>
</body>
</html>