<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="../static/css/profile.css" type="text/css"/>
    <title>Profile - <?php print_r($user_main_data[0][0]) ?></title>

</head>
<body>


        <?php require_once "templates/menuLeft.php"; ?>
        
        
        <main>
            <section id="leftSection">
                <div id="profile-picture1" style="background-image: url('../static/images/john.jpg')"></div>
                <p id="user-name"><?php print_r($user_main_data[0][0])   ?></p>

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



                <?php
                    //opis profilu
                    if(isset($user_main_data[0][1])){
                        
                        $description = $user_main_data[0][1];
                        echo "
                            <div id='user-description'>
                                $description
                            </div>";
                    };
                ?>



                <?php
                    // portfolio div
                    $portfolio = array_values(array_filter($user_social_links, function($record){
                        return $record['name'] === 'Portfolio';
                    }));
                   

                    if(isset($portfolio) and count($portfolio) != 0){
                        $link = $portfolio[0][1];
                        echo "
                            <div id='portfolio-div'>
                                <a href='$link' style='text-decoration:none; color:white'>
                                    Portfolio Page
                                </a>
                            </div>
                        ";
                    }
                    else{
                        echo "
                            <div id='portfolio-div' style='background-color:grey'>
                                <a href='' style='text-decoration:none; color:white; cursor:default'>
                                    Portfolio Page
                                </a>
                            </div>
                        ";
                    }
                ?>




                

                <?php
                    
                    //technologie
                    $user_social_links1 = array_values(array_filter($user_social_links, function($record){
                        return $record['name'] != 'Portfolio';
                    }));

                    $medias = NULL;
                    for($i = 0; $i < count($user_social_links1); $i+=1){
                        $media_name = $user_social_links1[$i][0];
                        $media_link = $user_social_links1[$i][1];
                        $medias.="<a href='$media_link' target='_blank'><img src='../static/images/icons/$media_name.png' class='social-icons'/></a>";
                    };

                    echo "
                        <div id='social-holder'>
                            $medias
                        </div>
                     ";
                ?>
            </section>

            
            <section id="rightSection">

                <h1 id="technology-h1">My technologies</h1>




                <div id="technology-holder">


                    <?php
                        
                        $technologies = NULL;
                        for($i = 0; $i < count($user_technologies); $i+=1){
                            $color = $user_technologies[$i][1];
                            $name = $user_technologies[$i][0];
                            $technologies.="<div class='technology-div' style='background-color:$color'>$name</div>";
                        };

                        echo $technologies;
                    ?>
                   
                </div>

                <h1 id="projects-h1">My Projects</h1>

                <section id="projects-holder">



                    <?php
                    
                    for($i = 1; $i <  count($user_projects); $i+=1){

                        $single_offert = array_values(array_filter($user_projects, function ($offert_data) use($i){
                            return($offert_data['id'] == $i);
                        }));

                        if(isset($single_offert[0])){

                            $id = $single_offert[0][0];
                            $offert_name = $single_offert[0][2];
                            $project_category = $single_offert[0][4];
                            
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
                                    <div class='project-img-holder' style='background-image:url(../static/images/john.png)'></div>
                                    <div class='project-category'>Web</div>
                                    <div class='project-bottom-holder'>
                                        <h1 class='project-title'>
                                            Hackaton 2069
                                        </h1>

                                        <div class='project-tech-holder'>
                                            $technologies
                                        </div>
                                    </div>
                                </div>
                            </a>
                            ";
                        };
                    }
                    
                    ?>

                    <!--<a href="#" style="text-decoration:none">
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
                    </a>-->



                </section>


            </section>
        </main>


</body>
</html>