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
                if($owned_offerts_count[0][0] > 0){

                    echo "<section id='left-panel'>
                                <section id='projects-holder'>
            
                                    <div id='find-projects'>Find projects</div>
                                    <h1 id='my-projects'>My projects</h1>
                        ";

                        
                        for($i = 0; $i < $owned_offerts_count[0][0]; $i+=1){

                            $tempName = $user_projects[0][2];
                            $single_offert = array_values(array_filter($user_projects, function($record) use ($tempName){
                                return $record[2] === $tempName;
                            }));
                            $user_projects = array_slice($user_projects, count($single_offert));

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
                                <a href='$link'>
                                    <div class='project-card'>
                                        <div class='project-img-holder' style='background-image:url(static/images/john.png)'></div>
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

                        echo "
                                </section>
                            </section>
                        ";
                }
            ?>






           <section id="right-holder">

                    

                <div id="swipe-information">
                    <span class="material-icons">
                        thumb_up
                    </span>
                </div>


                <?php

                    $z_index = 1;
                    for($i = 0; $i <  $display_projects_count[0][0]; $i+=1){

                        $tempName = $offerts_main_data[0][2];
                        $single_offert = array_values(array_filter($offerts_main_data, function($record) use ($tempName){
                            return $record[2] === $tempName;
                        }));
                        $offerts_main_data = array_slice($offerts_main_data, count($single_offert));

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