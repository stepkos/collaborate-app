<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once "templates/metadata.php"; ?>
    <link rel="stylesheet" href="static/css/home.css" type="text/css"/>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
  

    <title>Home</title>

</head>
<body>

        <?php require_once "templates/menuLeft.php"; ?>

        

        <main>
            


            <?php
            
                //tutaj jakiś błąd
                if(!isset($owned_offerts)){

                    echo "
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
                    ";

                    
                    
                }
            
            ?>






           <section id="right-holder">

                <?php   print_r($display_projects_count[0][0]);  ?>

                <div id="swipe-information">
                    <span class="material-icons">
                        thumb_up
                    </span>
                </div>


                <?php

                    $z_index = 1;
                    for($i = 0; $i <  $display_projects_count[0][0]; $i+=1){

                        
                       
                        
                        //single offert jest nadal arrayem 2-wymiarowym
                        

                        $id = $offerts_main_data[0][0];
                        $offert_name = $offerts_main_data[0][2];
                        $project_category = $offerts_main_data[0][4];
                            
                            $technologies = NULL;
                            foreach($offerts_main_data as $record){
                                $name = $record['technology'];
                                $color = $record['color'];
                                $technologies.="<div class='project-tech' style='background-color:{$color}'>{$name}</div>";
                            };

                            $link = ROOT_URL."offertDetails/".$id;
                            
                            echo "
                                    <div class='project-card-find' style='z-index:{$z_index}' id='{$id}'>
                                        <a href='{$link}'>
                                            <div class='project-img-holder' style='background-image:url(static/images/obraz.png)'></div>
                                            <div class='project-category'>{$project_category}</div>

                                            <div class='project-bottom-holder-find'>
                                                <h1 class='project-title'>
                                                    {$offert_name}
                                                </h1>

                                                <div class='project-tech-holder'>
                                                    {$technologies}
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                ";
                            
                            $z_index+=1;
                           
                    };
                ?> 






                </section>

        </main>

        <script src="static/javascript/jquery.js" language="javascript"></script>
        <script src="static/javascript/hammer.js" language="javascript"></script>
        <script src="static/javascript/swipe.js" language="javascript"></script>
</body>
 

</html>