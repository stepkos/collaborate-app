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
                // Jaki? - Kamil
                if($owned_offerts_count[0][0] > 0){

                    echo "<section id='left-panel'>
                                <section id='projects-holder'>
                                    <form method='POST' id='my-projects-form' onclick=\"document.getElementById('my-projects-form').submit();\">

                                    <input type='radio' value=NULL name=\"chosenIdProject\" id='find-projects-input' style='display:none;'/>
                                    <label for='find-projects-input' >
                                        <div id='find-projects'>
                                            Find projects
                                        </div>
                                    </label>
                                    <h1 id='my-projects'>My projects</h1>
                        ";

                        
                        for($i = 0; $i < $owned_offerts_count[0][0]; $i+=1){

                            $tempName = $user_projects[0][2];
                            $single_offert = array_values(array_filter($user_projects, function($record) use ($tempName){
                                return $record[2] === $tempName;
                            }));
                            $user_projects = array_slice($user_projects, count($single_offert));

                            $id = $single_offert[0][0];
                            $offert_name = $single_offert[0][3];
                            $project_category = $single_offert[0][5];
                            $project_picture = $single_offert[0][2];
                           
                           $technologies = NULL;
                           foreach($single_offert as $record){
                               $name = $record['technology'];
                               $color = $record['color'];
                               $technologies.="<div class='project-tech' style='background-color:{$color}'>{$name}</div>";
                           };
    
                            $link = ROOT_URL."offertDetails/".$id;

                            echo "
                                    <input type='radio' value=$id name=\"chosenIdProject\" id=$id style='display:none;'/>
                                    <label for=$id name=\"chosenIdProject\">
                                        <div class='project-card'>
                                        <div class='project-img-holder' style='background-image:url(data:image/jpg;base64,".$project_picture."'></div>
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
                                    </label>
                                
                            ";
                        }

                        echo "
                                    
                                    </form>
                                </section>
                            </section>
                        ";
                }
            ?>






           <section id="right-holder">



            <?php
                if(isset($id_project_selected)){

                    $cos = $project_name[0][0];
                    echo "
                    <div id='searchingFor'>
                        Szukanie użytkowników do projektu $cos
                    </div>
                    ";
                }
            ?>
           

                <div id="swipe-information">
                    <span class="material-icons">
                        thumb_up
                    </span>
                </div>

                <div id="cos" style="width:100px; height:100px; background-color:red;">

                    <?php 
                        // print_r($id_project_selected); 
                        // echo "<br/>"; 
                        // print_r($display_projects_count)
                    ?> 
                </div>  



                <?php

                    if(isset($display_projects_count)){
                        require_once "templates/projectsFind.inc.php";
                    }
                    else{
                        require_once "templates/peopleFind.inc.php";
                    };
                ?> 






                </section>

        </main>

        <script src="static/javascript/jquery.js" language="javascript"></script>
        <script src="static/javascript/hammer.js" language="javascript"></script>
        <script src="static/javascript/swipe.js" language="javascript"></script>
</body>
 

</html>